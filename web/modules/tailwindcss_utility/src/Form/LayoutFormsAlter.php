<?php

declare(strict_types=1);

namespace Drupal\tailwindcss_utility\Form;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\DependencyInjection\DependencySerializationTrait;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Link;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Url;
use Drupal\layout_builder\LayoutTempstoreRepositoryInterface;
use Drupal\layout_builder\Section;
use Symfony\Component\DependencyInjection\ContainerInterface;

final class LayoutFormsAlter implements ContainerInjectionInterface {

  use DependencySerializationTrait;
  use StringTranslationTrait;

  /**
   * The layout tempstore repository.
   *
   * @see https://www.drupal.org/project/drupal/issues/3110266
   * @phpstan-ignore-next-line
   */
  protected LayoutTempstoreRepositoryInterface $layoutTempstoreRepository;

  public function __construct(LayoutTempstoreRepositoryInterface $layout_tempstore_repository) {
    $this->layoutTempstoreRepository = $layout_tempstore_repository;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): self {
    return new static(
      $container->get('layout_builder.tempstore_repository')
    );
  }

  /**
   * Get form element for Tailwind classes.
   *
   * @return mixed[]
   */
  private function getClassesElement($default_value): array {
    return [
      '#type' => 'textfield',
      '#title' => $this->t('Tailwind classes'),
      '#description' => $this->t('Enter class names separated with a space. For more information see the @link.', [
        '@link' => Link::fromTextAndUrl($this->t('Tailwind docs'), Url::fromUri('https://tailwindcss.com/docs'))->toString(),
      ]),
      '#autocomplete_route_name' => 'tailwindcss_utility.class_autocomplete',
      '#autocomplete_route_parameters' => [
        'include_core' => TRUE,
      ],
      '#default_value' => $default_value,
    ];
  }

  private function getSection(FormStateInterface $form_state): ?Section {
    $form_object = $form_state->getFormObject();
    if (\method_exists($form_object, 'getCurrentSection')) {
      return $form_object->getCurrentSection();
    }
    $build_info = $form_state->getBuildInfo();
    [$section_storage, $delta] = $build_info['args'];

    $sections = $section_storage->getSections();
    return \array_key_exists($delta, $sections) ? $sections[$delta] : NULL;
  }

  // Section form methods.
  public function alterSectionForm(array &$form, FormStateInterface $form_state): void {
    $classes = '';
    $section = $this->getSection($form_state);
    if ($section instanceof Section) {
      $settings = $section->getThirdPartySettings('tailwindcss_utility');
      if (\array_key_exists('tailwind_classes', $settings)) {
        $classes = $settings['tailwind_classes'];
      }
    }

    $form['layout_settings']['tailwind_classes'] = $this->getClassesElement($classes);
    $form['#submit'][] = [$this, 'submitSectionForm'];
  }

  public function submitSectionForm($form, FormStateInterface $form_state): void {
    $section = $this->getSection($form_state);

    $tailwind_classes = $form_state->getValue([
      'layout_settings',
      'tailwind_classes',
    ]);

    $section->setThirdPartySetting('tailwindcss_utility', 'tailwind_classes', $tailwind_classes);
    $this->layoutTempstoreRepository->set($form_state->getFormObject()->getSectionStorage());
  }

  public function alterBlockForm(array &$form, FormStateInterface $form_state): void {
    $tailwind_classes = $form_state->getFormObject()->getCurrentComponent()->getThirdPartySetting('tailwindcss_utility', 'tailwind_classes');
    $form['settings']['tailwind_classes'] = $this->getClassesElement($tailwind_classes);
    $form['#submit'][] = [$this, 'submitBlockForm'];
  }

  public function submitBlockForm($form, FormStateInterface $form_state): void {
    $component = $form_state->getFormObject()->getCurrentComponent();
    $tailwind_classes = $form_state->getValue(['settings', 'tailwind_classes']);
    $component->setThirdPartySetting('tailwindcss_utility', 'tailwind_classes', $tailwind_classes);

    $this->layoutTempstoreRepository->set($form_state->getFormObject()->getSectionStorage());
  }

}
