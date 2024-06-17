<?php

declare(strict_types=1);

namespace Drupal\tailwindcss_utility\EventSubscriber;

use Drupal\layout_builder\Event\SectionBuildRegionsRenderArrayEvent;
use Drupal\layout_builder\Event\SectionComponentBuildRenderArrayEvent;
use Drupal\layout_builder\LayoutBuilderEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Tailwind CSS Utilities event subscriber.
 */
final class SectionSubscriberRenderArray implements EventSubscriberInterface {

  public function onSectionComponentBuildRender(SectionComponentBuildRenderArrayEvent $event): void {
    $build = $event->getBuild();
    $tailwind_classes = $event->getComponent()->getThirdPartySetting('tailwindcss_utility', 'tailwind_classes', FALSE);
    if ($tailwind_classes) {
      $build['#attributes']['class'][] = $tailwind_classes;
      $event->setBuild($build);
    }
  }

  public function onSectionBuildRender(SectionBuildRegionsRenderArrayEvent $event): void {
    $regions = $event->getRegions();
    $tailwind_classes = $event->getSection()->getThirdPartySetting('tailwindcss_utility', 'tailwind_classes', FALSE);
    if ($tailwind_classes) {
      foreach ($regions as &$region) {
        $region['#attributes']['class'][] = $tailwind_classes;
      }
      $event->setRegions($regions);
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events = [
      LayoutBuilderEvents::SECTION_COMPONENT_BUILD_RENDER_ARRAY => ['onSectionComponentBuildRender'],
    ];
    // @see https://www.drupal.org/node/3062862
    if (class_exists(SectionBuildRegionsRenderArrayEvent::class)) {
      $events[SectionBuildRegionsRenderArrayEvent::class] = ['onSectionBuildRender'];
    }
    return $events;
  }

}
