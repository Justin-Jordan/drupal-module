<?php
namespace Drupal\just\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class JustController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function hello() {
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Hello, World!'),
      ];
  
  }

}