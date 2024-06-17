<?php

namespace Drupal\good_habits\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class GoodHabitsForm extends ConfigFormBase
{
    public function getFormId()
    {
        return 'good_habits_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        // Form constructor.
        $form = parent::buildForm($form, $form_state);
        // Default settings.
        $config = $this->config('good_habits.settings');

        // Page title field
        $form['page_title'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Nombre'),
            '#default_value' => $config->get('good_habits.page_title'),
            '#description' => $this->t('Nombra tu buena práctica'),
        ];
        // Source text field
        $form['source_text'] = [
            '#type' => 'textarea',
            '#title' => $this->t('Source text for lorem ipsum generation:'),
            '#default_value' => $config->get('good_habits.source_text'),
            '#description' => $this->t('Write one sentence per line. Those sentences will be used to generate random text.'),
        ];

        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        if ($form_state->getValue('page_title') == NULL) {
            $form_state->setErrorByName('page_title', $this->t('Please enter a valid Page title.'));
        }
        if ($form_state->getValue('source_text') == NULL) {
            $form_state->setErrorByName('source_text', $this->t('Please enter at least one line of text for your generator.'));
        }
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $config = $this->config('good_habits.settings');
        $config->set('good_habits.source_text', $form_state->getValue('source_text'));
        $config->set('good_habits.page_title', $form_state->getValue('page_title'));
        $config->save();

        return parent::submitForm($form, $form_state);
    }

    protected function getEditableConfigNames()
    {
        return [
            'good_habits.settings',
        ];
    }
}
