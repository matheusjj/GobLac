<?php

declare(strict_types=1);

namespace Drupal\tailwindcss_utility;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Site\Settings;
use Drupal\tailwindcss_utility\TailwindRuleStorage\TailwindRuleStorageInterface;
use Psr\Log\LoggerInterface;

final class RuleStorage {

  private const DEFAULT_CACHE_KEY = '_default';

  /**
   * The cache bin.
   */
  private CacheBackendInterface $cache;

  /**
   * The tailwindcss_utility logger channel.
   */
  private LoggerInterface $logger;

  /**
   * The Tailwind rule storage.
   */
  private TailwindRuleStorageInterface $storage;

  /**
   * Creates a new RuleStorage object.
   */
  public function __construct(
    CacheBackendInterface $cache,
    LoggerInterface $logger,
    TailwindRuleStorageInterface $storage
  ) {
    $this->cache = $cache;
    $this->logger = $logger;
    $this->storage = $storage;
  }

  /**
   * Gets default rules from file storage.
   *
   * @return mixed[]
   */
  private function getDefaultRules(): array {
    $cached = $this->cache->get(self::DEFAULT_CACHE_KEY);
    if (!empty($cached->data)) {
      return $cached->data;
    }

    $json_file = \DRUPAL_ROOT . '/' . Settings::get('tailwind_css_json_path');
    if (!\file_exists($json_file) || !\is_file($json_file)) {
      $this->logger->error('JSON file with tailwind styles not found at the given location: %path.', [
        '%path' => $json_file,
      ]);
      return [];
    }

    $output = [];

    $contents = \file_get_contents($json_file);
    $decoded = \json_decode($contents, TRUE);

    if (\is_null($decoded) || !\is_array($decoded)) {
      $this->logger->error('Invalid JSON file with tailwind styles at the given location: %path.', [
        '%path' => $json_file,
      ]);
      return [];
    }

    foreach ($decoded as $selector => $rules) {
      // We want single classes only.
      if (!\str_starts_with($selector, '.')) {
        continue;
      }
      $class = \stripslashes(\substr($selector, 1));
      $output[$class] = $rules;
    }

    $this->cache->set(self::DEFAULT_CACHE_KEY, $output);
    return $output;
  }

  /**
   * Rule getter.
   *
   * @param string[] $selectors
   *
   * @return mixed[]
   */
  public function getRules(array &$classes): array {
    // Load all rules first and filter by classes to maintain Tailwind order.
    $rules = $this->getDefaultRules();

    // Find custom rules, add in place of existing to apply possible overrides.
    foreach ($this->storage->getRules() as $class => $custom_rules) {
      $rules[$class] = $custom_rules;
    }

    $flipped = \array_flip($classes);
    $classes = \array_flip(\array_diff_key($flipped, $rules));
    return \array_intersect_key($rules, $flipped);
  }

  /**
   * Get rules for a single class.
   *
   * @return string[]
   */
  public function getSingleClassRules(string $class): ?array {
    // @todo This could be optimized in case of a single rule
    // if ever needed, this method is run only from admin settings.
    $classes = [$class];
    $rules = $this->getRules($classes);
    return \array_key_exists($class, $rules) ? $rules[$class] : NULL;
  }

  /**
   * Search for classes.
   *
   * @return string[]
   */
  public function classSearch(string $string, bool $exact = FALSE, bool $include_core = FALSE): array {
    $results = $this->storage->search($string, $exact);

    if ($include_core) {
      $default_classes = \array_keys($this->getDefaultRules());
      if ($exact) {
        $default_classes = \array_filter($default_classes,
          static fn ($class) => ($class === $string)
        );
      }
      else {
        $default_classes = \array_filter($default_classes,
          static fn ($class) => \str_starts_with($class, $string)
        );
      }
      $results = \array_unique(\array_merge($results, $default_classes));
    }

    \sort($results);

    // Return 10 results.
    if (\count($results) > 10) {
      $results = \array_slice($results, 0, 10);
    }

    return $results;
  }

  /**
   * Rule setter.
   *
   * @see Drupal\Core\Database\Query\Merge::execute().
   */
  public function addRule(string $class, array $rule): int {
    return $this->storage->addRule($class, $rule);
  }

  /**
   * Delete rule.
   *
   * @return bool
   *   TRUE on success, FALSE otherwise.
   */
  public function deleteRule(string $class): bool {
    return $this->storage->deleteRule($class);
  }

}
