<?php
/**
 * An example controller.
 */
namespace Drupal\mytest\Controller;

use Drupal\Core\Controller\ControllerBase;

class MyTestController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function hello() {
    return [
      '#markup' => $this->t('Content for the Hello World-page.'),
    ];
  }
}

