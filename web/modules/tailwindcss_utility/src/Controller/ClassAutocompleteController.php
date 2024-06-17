<?php

declare(strict_types=1);

namespace Drupal\tailwindcss_utility\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\tailwindcss_utility\RuleStorage;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

final class ClassAutocompleteController extends ControllerBase {

  /**
   * Tailwind rule storage service.
   */
  private RuleStorage $ruleStorage;

  public function __construct(RuleStorage $rule_storage) {
    $this->ruleStorage = $rule_storage;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): self {
    return new static(
      $container->get('tailwindcss_utility.rule_storage'),
    );
  }

  /**
   * Autocomplete callback.
   */
  public function handleAutocomplete(Request $request, $include_core = FALSE): JsonResponse {
    $matches = [];
    $string = $request->query->get('q');
    $classes = \explode(' ', $string);
    $last_class = \array_pop($classes);
    if (\strlen($last_class) > 0) {
      $results = $this->ruleStorage->classSearch($last_class, FALSE, (bool) $include_core);
      if (\count($results)) {
        $base = '';
        if (\count($classes)) {
          $base = \implode(' ', $classes) . ' ';
        }
        foreach ($results as $class) {
          $matches[] = [
            'value' => $base . $class,
            'label' => $class,
          ];
        }
      }
    }
    return new JsonResponse($matches);
  }

}
