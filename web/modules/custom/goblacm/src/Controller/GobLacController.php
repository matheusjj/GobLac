<?php

namespace Drupal\goblacm\Controller;

use Drupal\Core\Controller\ControllerBase;

class GobLacController extends ControllerBase
{
    public function hello_world()
    {
        $GobLacService = \Drupal::service('goblacm.goblacm_service');
        $results = $GobLacService->get_good_habits();

        return ['#theme' => 'goblac_hello'];
    }

    public function thanks_for_sharing()
    {
        $img_path = \Drupal::service('extension.path.resolver')->getPath('module', 'goblacm');

        return [
            "#theme"      => 'gb_thanks_for_sharing',
            '#main_msg'   => $this->t('¡Gracias por compartir!'),
            '#sub_msg'    => $this->t('Tu información será revisada antes de ser publicada'),
            '#directs_to' => '/',
            '#label'      => $this->t('Volver al inicio'),
            '#img_path'   => \Drupal::service('file_url_generator')->generateAbsoluteString($img_path) . '/images/thanks.png',
        ];
    }
}
