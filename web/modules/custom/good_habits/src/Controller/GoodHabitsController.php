<?php

namespace Drupal\good_habits\Controller;

use Drupal\Core\Controller\ControllerBase;

class GoodHabitsController extends ControllerBase
{

    public function saveEntry()
    {
        $GoodHabitsService = \Drupal::service('good_habits.good_habits_service');
        $element = $GoodHabitsService->saveEntry();

        return $element;
    }

    public function content()
    {
        $renderable = ['#theme' => 'hello'];

        return $renderable;
    }
}
