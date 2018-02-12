<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleSwagpath extends Controller
{
    use Partials\Swagifacts;

    function __construct() {
      if (!get_query_var('swagifact')) {
        $swagifacts = self::get_swagpath_swagifacts();
        set_query_var( 'swagifact', $swagifacts[0]->slug );
      }
    }

    public function current_swagifact() {
      $slug = get_query_var('swagifact');
      if (!$slug) {
          $swagifacts = self::get_swagpath_swagifacts();
          return $swagifacts[0]['slug'];
      }
      return $slug;

    }

    public function get_swagifacts() {
      return self::get_swagpath_swagifacts();
    }

    public static function do_swagifact($slug) {
      $swagifact = self::get_swagifact($slug);

      return do_shortcode( sprintf('[h5p id="%d"]', $swagifact['id']) );
    }
}
