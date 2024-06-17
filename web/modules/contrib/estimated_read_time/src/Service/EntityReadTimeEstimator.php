<?php

namespace Drupal\estimated_read_time\Service;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Entity\FieldableEntityInterface;
use Drupal\Core\Render\RendererInterface;
use Drupal\Core\Theme\ThemeInitializationInterface;
use Drupal\Core\Theme\ThemeManagerInterface;
use Drupal\node\Entity\Node;

/**
 * Provides read time estimator for entities.
 */
class EntityReadTimeEstimator implements EntityReadTimeEstimatorInterface {

  /**
   * The config factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The read time service.
   *
   * @var \Drupal\estimated_read_time\Service\ReadTimeAdapterInterface
   */
  protected $readTime;

  /**
   * The renderer.
   *
   * @var \Drupal\Core\Render\RendererInterface
   */
  protected $renderer;

  /**
   * The theme initialization service.
   *
   * @var \Drupal\Core\Theme\ThemeInitializationInterface
   */
  protected $themeInitialization;

  /**
   * The theme manager.
   *
   * @var \Drupal\Core\Theme\ThemeManagerInterface
   */
  protected $themeManager;

  /**
   * Constructs an EntityReadTimeEstimator service object.
   */
  public function __construct(
    ConfigFactoryInterface $configFactory,
    EntityTypeManagerInterface $entityTypeManager,
    ReadTimeAdapterInterface $readTime,
    RendererInterface $renderer,
    ThemeInitializationInterface $themeInitialization,
    ThemeManagerInterface $themeManager
  ) {
    $this->configFactory = $configFactory;
    $this->entityTypeManager = $entityTypeManager;
    $this->readTime = $readTime;
    $this->renderer = $renderer;
    $this->themeInitialization = $themeInitialization;
    $this->themeManager = $themeManager;
  }

  /**
   * {@inheritdoc}
   */
  public function setEstimatedReadTime(FieldableEntityInterface $entity): void {

    $fieldDefinitions = $entity->getFieldDefinitions();

    if ($entity instanceof Node) {
      // Set in_preview to TRUE to prevent errors when rendering the links field
      // without a node ID.
      // In order to obtain the read time, the entity is rendered.
      // The Links field that is displayed by default on nodes will throw an
      // error if the node ID does not exist, which will occur for new nodes.
      // The node module prevents this error from occurring when previewing a
      // new node by setting the in_preview property and not building the links
      // if in_preview is set to TRUE.
      $inPreview = $entity->in_preview;
      $entity->in_preview = TRUE;
    }

    foreach ($fieldDefinitions as $field) {
      if ($field->getType() === 'estimated_read_time') {
        $name = $field->getName();
        $viewMode = $field->getSetting('view_mode');
        $wordsPerMinute = $field->getSetting('words_per_minute');

        // Save the active theme so that we can switch back to it later.
        $activeTheme = $this->themeManager->getActiveTheme();

        // Set the theme to the default, frontend theme so that the text used to
        // calculate the read time is generated from the frontend theme. The
        // admin theme will not be accurate.
        $defaultThemeName = $this->configFactory->get('system.theme')->get('default');
        $defaultTheme = $this->themeInitialization->getActiveThemeByName($defaultThemeName);
        $this->themeManager->setActiveTheme($defaultTheme);

        $viewBuilder = $this->entityTypeManager->getViewBuilder($entity->getEntityTypeId());
        $build = $viewBuilder->view($entity, $viewMode, $entity->language()->getId());
        $content = (string) $this->renderer->renderPlain($build);

        // Set the theme back to the original active theme.
        $this->themeManager->setActiveTheme($activeTheme);

        $estimation = $this->readTime->estimate($content, $wordsPerMinute);
        $entity->set($name, $estimation);
      }
    }

    if ($entity instanceof Node) {
      // Set the in_preview property back to it's initial value. This should
      // almost always be NULL.
      $entity->in_preview = $inPreview;
    }
  }

}
