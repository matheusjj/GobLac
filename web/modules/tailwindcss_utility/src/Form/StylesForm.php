<?php

declare(strict_types=1);

namespace Drupal\tailwindcss_utility\form;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\AppendCommand;
use Drupal\Core\Ajax\FocusFirstCommand;
use Drupal\Core\Ajax\ReplaceCommand;
use Drupal\Core\Database\Query\Merge;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\tailwindcss_utility\RuleStorage;
use Symfony\Component\DependencyInjection\ContainerInterface;

final class StylesForm extends FormBase {

  private const WRAPPER_ID = 'tailwind-css-rules-wrapper';
  private const EMPTY_RULE = [
    'rule' => '',
    'atrule' => '',
  ];

  /**
   * Tailwind rule storage service.
   *
   * @see https://www.drupal.org/project/drupal/issues/3110266
   * @phpstan-ignore-next-line
   */
  protected RuleStorage $ruleStorage;

  public function __construct(RuleStorage $rule_storage) {
    $this->ruleStorage = $rule_storage;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): StylesForm {
    return new static(
      $container->get('tailwindcss_utility.rule_storage'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId(): string {
    return 'tailwindcss_utility_styles_form';
  }

  /**
   * Helper function to get the current operation.
   */
  private function getOp(FormStateInterface $form_state): string {
    $op = '';
    $trigger = $form_state->getTriggeringElement();
    if ($trigger !== NULL) {
      $op = $trigger['#parents'][0];
    }
    return $op;
  }

  /**
   * {@inheridoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {

    $form['class'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Class'),
      '#description' => $this->t('Enter class name, if the class exists its rules will be editable.'),
      '#autocomplete_route_name' => 'tailwindcss_utility.class_autocomplete',
      '#autocomplete_route_parameters' => [
        'include_core' => TRUE,
      ],
      '#ajax' => [
        'callback' => [$this, 'ajax'],
      ],
      '#required' => TRUE,
    ];

    $form['wrapper'] = [
      '#type' => 'container',
      '#attributes' => [
        'id' => self::WRAPPER_ID,
      ],
    ];
    $form['wrapper']['rules'] = [
      '#tree' => TRUE,
    ];

    $class = $form_state->getValue('class', '');
    $previous_class = $form_state->get('class');
    if ($previous_class === NULL) {
      $previous_class = '';
    }
    if ($class !== $previous_class) {
      $rules = $this->ruleStorage->getSingleClassRules($class);
      if ($rules !== NULL) {
        $form_state->set('existing_rule', TRUE);
      }
      else {
        $form_state->set('existing_rule', NULL);
      }
      $form_state->set('class', $class);
    }
    else {
      $rules = $form_state->getValue('rules');
    }
    if ($rules === NULL) {
      $rules = [
        0 => self::EMPTY_RULE,
      ];
    }

    foreach ($rules as $delta => $rule) {
      $form['wrapper']['rules'][$delta] = [
        '#type' => 'fieldset',
      ];
      $form['wrapper']['rules'][$delta]['rule'] = [
        '#type' => 'textarea',
        '#title' => $this->t('Rule'),
        '#rows' => 3,
        '#default_value' => $rule['rule'],
      ];
      $form['wrapper']['rules'][$delta]['atrule'] = [
        '#type' => 'textarea',
        '#title' => $this->t('At - rule'),
        '#rows' => 3,
        '#default_value' => \array_key_exists('atrule', $rule) ? $rule['atrule'] : '',
      ];
    }

    $form['wrapper']['actions'] = ['#type' => 'actions'];
    $form['wrapper']['actions']['add_rule'] = [
      '#type' => 'submit',
      '#ajax' => [
        'callback' => [$this, 'ajax'],
      ],
      '#value' => $this->t('Add rule'),
    ];
    $form['wrapper']['actions']['save'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    ];
    if ($form_state->get('existing_rule') === TRUE) {
      $form['wrapper']['actions']['delete'] = [
        '#type' => 'submit',
        '#value' => $this->t('Delete / Revert to default'),
      ];
    }

    return $form;
  }

  /**
   * AJAX callback.
   */
  public function ajax(array $form, FormStateInterface $form_state): AjaxResponse {
    $op = $this->getOp($form_state);

    if ($op !== 'add_rule') {
      foreach ($form['wrapper']['rules'] as $delta => $element) {
        if (!\is_array($element) || !\array_key_exists('rule', $element)) {
          continue;
        }
        $form['wrapper']['rules'][$delta]['rule']['#value'] = $element['rule']['#default_value'];
        $form['wrapper']['rules'][$delta]['atrule']['#value'] = $element['atrule']['#default_value'];
      }
    }

    // Without custom handling below, the class element always got focus
    // after changing its value.
    $response = new AjaxResponse();
    $response->addCommand(new ReplaceCommand('#' . self::WRAPPER_ID, $form['wrapper']));
    if ($op !== 'add_rule') {
      $response->addCommand(new FocusFirstCommand('#' . self::WRAPPER_ID));
    }
    $response->addCommand(new AppendCommand('#' . self::WRAPPER_ID, [
      '#type' => 'status_messages',
    ]));
    return $response;
  }

  /**
   * {@inheridoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $op = $this->getOp($form_state);
    $class = $form_state->getValue('class');
    if ($op === 'save') {
      $rules = $rules = $form_state->getValue('rules');
      $result = $this->ruleStorage->addRule($class, $rules);
      if ($result === Merge::STATUS_INSERT) {
        $this->messenger()->addStatus($this->t('New rule for "@class" class added.', [
          '@class' => $class,
        ]));
      }
      elseif ($result === Merge::STATUS_UPDATE) {
        $this->messenger()->addStatus($this->t('Rule for "@class" class updated.', [
          '@class' => $class,
        ]));
      }
    }

    elseif ($op === 'delete') {
      $result = $this->ruleStorage->deleteRule($class);
      if ($result) {
        $this->messenger()->addStatus($this->t('Rule for "@class" class deleted.', [
          '@class' => $class,
        ]));
      }
    }

    elseif ($op === 'add_rule') {
      $rules = $form_state->getValue('rules');
      $rules[] = self::EMPTY_RULE;
      $form_state->setValue('rules', $rules);
      $form_state->setRebuild();
    }

  }

}
