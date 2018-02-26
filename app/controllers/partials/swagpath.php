<?php

namespace App\Controllers\Partials;

trait Swagpath
{
  public function current_user_attempted_swag() {
    $user = \SwagUser::getCurrent();
    return $user->getAttemptedSwagpaths();
  }

  public function current_user_completed_swag() {
    $user = \SwagUser::getCurrent();
    return $user->getCompletedSwagpaths();
  }

  public static function path_status($path) {
    $user = \SwagUser::getCurrent();
    $path = \SwagPath::getById($path->ID);

    if ($path->isCompletedByCurrentUser($user)) {
        return 'completed';
    }

    if ($path->isCurrentUserPrepared($user)) {
        return 'unlocked';
    }

    return 'locked';
  }
}
