<?php

namespace Drupal\sanskriti_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;

/**
 *
 */
class AdminController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Admin Controller!'),
    );
  }

  /**
   *
   */
  public function getAdminDashboard() {
    return array(
      '#type' => 'markup',
      '#markup' => '',
    );
  }
  
  
}
