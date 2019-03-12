<?php

namespace Drupal\pacman\Plugin\Block;

use Drupal\Core\Block\BlockBase;
Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Component\Utility\Xss;

/**
 * Provides a 'pacmanBlock' block.
 *
 * @Block(
 *  id = "pacman_block",
 *  admin_label = @Translation("Pacman block"),
 * )
 */
class pacmanBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['pacman'] = [
      '#theme'=> 'pacman',
      '#attached' => [
        'library' => [
          'pacman/jquery',
          'pacman/jquery-mobile',
          'pacman/jquery-buzz',
          'pacman/tools',
          'pacman/game',
          'pacman/board',
          'pacman/paths',
          'pacman/bubbles',
          'pacman/fruits',
          'pacman/pacman',
          'pacman/ghosts',
          'pacman/home',
          'pacman/sound',
          'pacman/pacmain',
        ],
      ],
    ];
    return $build;
  }

}
