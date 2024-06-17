<?php

declare(strict_types=1);

namespace Drupal\tailwindcss_utility\TailwindRuleStorage;

use Drupal\Core\Config\Config;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Database\Query\Merge;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Config storage class for Tailwind custom rules.
 * 
 * NOTE: this is currently not used but it stays because of many
 * switches between config and database storage (versioned / unversioned).
 */
final class TailwindRuleStorageConfig implements TailwindRuleStorageInterface {

  /**
   * The module config.
   */
  private Config $config;

  /**
   * Creates a new TailwindRuleStorageConfig object.
   */
  public function __construct(ConfigFactoryInterface $config_factory) {
    $this->config = $config_factory->getEditable('tailwindcss_utility.config');
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getRules(): TailwindRulesIterator {
    $rules = $this->config->get('custom_rules');
    if (!\is_array($rules)) {
      $rules = [];
    }
    return new TailwindRulesIterator($rules, FALSE);
  }

  /**
   * {@inheritdoc}
   */
  public function addRule(string $class, array $rule): int {
    $rules = $this->getRules();
    if (\array_key_exists($class, $rules)) {
      $return = Merge::STATUS_UPDATE;
    }
    else {
      $return = Merge::STATUS_INSERT;
    }
    $rules[$class] = $rule;
    $this->config->set('custom_rules', $rules);
    $this->config->save();
    return $return;
  }

  /**
   * {@inheritdoc}
   */
  public function deleteRule(string $class): bool {
    $rules = $this->getRules();
    if (\array_key_exists($class, $rules)) {
      unset($rules[$class]);
      $this->config->set('custom_rules', $rules);
      $this->config->save();
      return TRUE;
    }

    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function search(string $string, bool $exact): array {
    $results = $this->getRules()->getKeys();
    if ($exact) {
      $results = \array_filter($results,
        static fn ($class) => ($class === $string)
      );
    }
    else {
      $results = \array_filter($results,
        static fn ($class) => \str_starts_with($class, $string)
      );
    }
    return $results;
  }

}
