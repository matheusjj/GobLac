<?php

declare(strict_types=1);

namespace Drupal\test_tailwindcss_utility\Controller;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Site\Settings;
use Drupal\tailwindcss_utility\RuleStorage;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

class TestController extends ControllerBase {

  public function build(): array {
    return [
      '#markup' => $this->t('Hello world'),
      '#prefix' => '<div class="m-2">',
      '#suffix' => '</div>',
      '#attached' => [
        'library' => [
          'styles' => 'test_tailwindcss_utility/tailwind',
        ],
      ],
    ];
  }


}
