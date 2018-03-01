<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateMyAccount extends Controller
{
    public function current_user()
    {
      return wp_get_current_user();
    }

    public function current_swag_user() 
    {
        return \SwagUser::getCurrent();
    }

    public function completed_swagpaths() {
      $user = \SwagUser::getCurrent();
      $swagpaths = $user->getCompletedSwagpaths();
      $settings = get_option('open_badges_issuer');

      $badges = array();

      foreach ($swagpaths as $swagpath) {
          $badge_id = get_post_meta($swagpath->getPost()->ID, 'default_badge', true);
          $badge = get_post($badge_id);

          $images = rwmb_meta('badge_image', array("size" => "large"), $badge_id);
          $image_url = sizeof($images) > 0 ? $images[0] : $settings['default_badge_image'];

          $badges[] = array(
              "name" => $swagpath->getPost()->post_title,
              "description" => $badge->post_content,
              "image" => $image_url,
              "date_issued" => date('d/m/Y', strtotime($swagpath->completedStatement['timestamp'])),
              "path_permalink" => get_permalink($swagpath->getPost()->ID),
              "badge_permalink" => get_author_posts_url($user->getUser()->ID) . 'badge/' . $badge->post_name,
          );
      }
      return $badges;
    }
}
