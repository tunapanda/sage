<?php

namespace App\Controllers\Partials;

trait Swagifacts
{
  public static function get_swagpath_swagifacts($path = false) {
    global $post;
    if (!$path) $path = $post; 

    $swagifact_ids = rwmb_meta( 'swagifact', $path );

    return array_map("self::get_swagifact", $swagifact_ids);
    }

  public static function get_swagifact($slug) {
    $swagifact = explode(':', $slug);
    if ($swagifact[0] === 'h5p') {
      return self::get_h5p($swagifact[1]);
    }
    return self::get_h5p($swagifact);
  }

  static function get_h5p($slug) {
    global $wpdb;
    $q = $wpdb->prepare(
        "SELECT  id, title, slug " .
        "FROM    {$wpdb->prefix}h5p_contents " .
        "WHERE   slug=%s",
        $slug
    );

    $path = \Swagpath::getCurrent();
    $swag = \SwagPostItem::create('h5p', $slug);
    $swag->setSwagPost($path);

    $row = $wpdb->get_row($q, ARRAY_A);
    $row['is_completed'] = $swag->isCompleted(\SwagUser::getCurrent());

    return $row;
  }

  static function get_swagifact_permalink($slug, $swagpath) {
    return get_post_permalink($swagpath) . $slug . '/';
  }
}