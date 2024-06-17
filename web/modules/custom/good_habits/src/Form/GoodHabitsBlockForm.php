<?php

namespace Drupal\good_habits\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class GoodHabitsBlockForm extends FormBase
{
    public function getFormId()
    {
        return 'good_habits_block_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['good_habit_name'] = array(
            '#type' => 'textfield',
            '#title' => $this->t('Nombre'),
            '#description' => $this->t('Nombra tu buena práctica'),
        );


        $form['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Enviar'),
        );

        return $form;
    }

    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        $good_habit_name = $form_state->get('good_habit_name');

        // The value cannot be empty.
        if (is_null($good_habit_name))
            $form_state->setErrorByName('good_habit_name', $this->t('This field cannot be empty.'));

        // The value must be numeric.
        if (is_numeric($good_habit_name))
            $form_state->setErrorByName('good_habit_name', $this->t('Please it can\'t be a number.'));
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        // $form_state->setRedirect('good_habits.sendfile', array(
        //     'good_habit_name' => $form_state->get('good_habit_name'),
        // ));

        $form_state->setRedirect(
            'good_habits.sendfile'
        );
    }
}
