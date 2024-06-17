<?php

namespace Drupal\good_habits\Service;

use Drupal\Component\Utility\Html;

class GoodHabitsService
{
    public function saveEntry()
    {
        $config = \Drupal::config('good_habits.settings');

        $page_title = $config->get('good_habits.page_title');
        $source_text = $config->get('good_habits.source_text');

        $element['#source_text'] = [];
        $element['#title'] = Html::escape($page_title);
        // $element['#theme'] = 'redlac';

        return $element;
    }
}
