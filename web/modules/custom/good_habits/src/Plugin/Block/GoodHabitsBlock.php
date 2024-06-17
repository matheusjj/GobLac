<?php

namespace Drupal\good_habits\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a Lorem ipsum block with which you can generate dummy text anywhere
 *
 * @Block(
 *   id = "loremipsum_block",
 *   admin_label = @Translation("Lorem ipsum block"),
 *   category = @Translation("Forms")
 * )
 */
class GoodHabitsBlock extends BlockBase
{
    public function build()
    {
        return \Drupal::formBuilder()->getForm('Drupal\good_habits\Form\GoodHabitsBlockForm');
    }

    protected function blockAccess(AccountInterface $account)
    {
        return AccessResult::allowed();
    }

    public function blockForm($form, FormStateInterface $form_state)
    {
        $form = parent::blockForm($form, $form_state);
        $config = $this->getConfiguration();

        return $form;
    }

    public function blockSubmit($form, FormStateInterface $form_state)
    {
        $this->setConfigurationValue(
            'good_habits_block_settings',
            $form_state->getValue('good_habits_block_settings')
        );
    }
}
