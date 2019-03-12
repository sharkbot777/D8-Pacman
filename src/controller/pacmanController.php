<?php
/**
 * Created by PhpStorm.
 * User: sharkbot
 * Date: 2/26/19
 * Time: 12:21 PM
 */

namespace Drupal\pacman\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines pacman class
 */
class pacmanController extends ControllerBase {

  /**
   * display the markup.
   * @return array
   *  Return markup array
   */

  public function content() {
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
