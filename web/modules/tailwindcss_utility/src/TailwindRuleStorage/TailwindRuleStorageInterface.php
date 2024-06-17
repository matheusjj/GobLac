<?php

declare(strict_types=1);

namespace Drupal\tailwindcss_utility\TailwindRuleStorage;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;

interface TailwindRuleStorageInterface extends ContainerInjectionInterface {

  /**
   * Rule getter - gets all stored rules.
   *
   * @param string[] $selectors
   *
   * @return mixed[]
   */
  public function getRules(): TailwindRulesIterator;

  /**
   * Rule setter.
   *
   * @see Drupal\Core\Database\Query\Merge::execute().
   */
  public function addRule(string $class, array $rule): int;

  /**
   * Delete rule.
   *
   * @return bool
   *   TRUE on success, FALSE otherwise.
   */
  public function deleteRule(string $class): bool;

  /**
   * Search for classes.
   */
  public function search(string $string, bool $exact): array;

}
