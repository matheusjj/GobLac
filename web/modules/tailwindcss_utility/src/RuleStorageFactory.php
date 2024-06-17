<?php

declare(strict_types=1);

namespace Drupal\tailwindcss_utility;

use Drupal\Component\DependencyInjection\ContainerInterface;

final class RuleStorageFactory {

  public function __construct(
    private ContainerInterface $container,
  ) {}


  public function get($storage_type) {
    $storage_class = 'Drupal\\tailwindcss_utility\\TailwindRuleStorage\\TailwindRuleStorage' . ucfirst($storage_type);

    $storage = $storage_class::create($this->container);
    return new RuleStorage(
      $this->container->get('cache.tailwindcss_utility'),
      $this->container->get('logger.channel.tailwindcss_utility'),
      $storage
    );
  }

}
