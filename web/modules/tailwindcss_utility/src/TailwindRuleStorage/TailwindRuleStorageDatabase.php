<?php

declare(strict_types=1);

namespace Drupal\tailwindcss_utility\TailwindRuleStorage;

use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Database storage class for Tailwind custom rules.
 */
final class TailwindRuleStorageDatabase implements TailwindRuleStorageInterface {

  public const TABLE = 'tailwind_rules';

  /**
   * The database connection.
   */
  private Connection $connection;

  /**
   * Creates a new TailwindRuleStorageConfig object.
   */
  public function __construct(Connection $connection) {
    $this->connection = $connection;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('database')
    );
  }

  /**
   * Schema definition.
   *
   * @return mixed[]
   */
  public static function schemaDefinition(): array {
    return [
      self::TABLE => [
        'description' => 'Stores tailwind rules by class.',
        'fields' => [
          'class' => [
            'description' => 'The Tailwind class.',
            'type' => 'varchar_ascii',
            'length' => 128,
            'not null' => TRUE,
            'default' => '',
          ],
          'rules' => [
            'description' => 'The Tailwind rules to apply to.',
            'type' => 'blob',
            'not null' => TRUE,
          ],
        ],
        'primary key' => ['class'],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getRules(): TailwindRulesIterator {
    $result = $this->connection->select(self::TABLE, 't')
      ->fields('t', ['class', 'rules'])
      ->execute()
      ->fetchAllKeyed();

    return new TailwindRulesIterator($result);
  }

  /**
   * {@inheritdoc}
   */
  public function addRule(string $class, array $rule): int {
    // Type cast for phpstan only (see @see above).
    return (int) $this->connection->merge(self::TABLE)
      ->fields([
        'class' => $class,
        'rules' => json_encode($rule),
      ])
      ->key(['class' => $class])
      ->execute();
  }

  /**
   * {@inheritdoc}
   */
  public function deleteRule(string $class): bool {
    return (bool) $this->connection->delete(self::TABLE)
      ->condition('class', $class)
      ->execute();
  }

  /**
   * {@inheritdoc}
   */
  public function search(string $string, bool $exact): array {
    $query = $this->connection->select(self::TABLE, 't')
      ->fields('t', ['class']);
    if ($exact) {
      $query->condition('class', $string);
    }
    else {
      $query->condition('class', $this->connection->escapeLike($string) . '%', 'LIKE');
    }
    $query->range(0, 10);

    return $query->execute()->fetchCol();
  }

}
