<?php

namespace Drupal\hello_world\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'just' Block.
 *
 * @Block(
 *   id = "just_block",
 *   admin_label = @Translation("Just block"),
 *   category = @Translation("Just World"),
 * )
 */
class JustBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t('Bonjour'),
    ];
  }

   /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    $default_config = \Drupal::config('just.settings');
    return [
      'just_block_name' => $default_config->get('just.name'),
    ];
  }

}