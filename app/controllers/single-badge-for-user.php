<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleBadgeForUser extends Controller
{
  public function json_url() {
    return '/wp-json/swag/v1/badge/assertion/' . get_query_var('issuee') . '/badge/' . get_query_var('badge');
  }

  public function badge_issuee($slug = null) {
    if (!$slug) {
      $slug = get_query_var('issuee');
    }
    return get_user_by('slug', $slug);
  }

  public function image_url() {
    $settings = get_option('open_badges_issuer');

    $images = rwmb_meta('badge_image', array("size" => "large"));

    return sizeof($images) > 0 ? $images[0] : $settings['default_badge_image'];
  }

  public function assertion_statement($slug = null) {
    global $post;

    if (!$slug) {
      $slug = get_query_var('issuee');
    }

    $swag_user = \SwagUser::getById($this->badge_issuee($slug)->ID);
    $completed = $swag_user->getCompletedSwagpaths();

    $path = array_filter($completed, function($path) use ($post) {
      $badge_id = get_post_meta($path->getPost()->ID, 'default_badge', true);
      $badge = get_post($badge_id);
      return $badge->post_name === $post->post_name;
    })[0];

    return $path->completedStatement;
  }
}
