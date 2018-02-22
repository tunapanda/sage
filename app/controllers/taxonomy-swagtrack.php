<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TaxonomySwagtrack extends Controller
{
    use Partials\Swagifacts;

    public function child_tracks() {
        $term = get_queried_object();
        return get_terms(array( "taxonomy" => 'swagtrack', "parent" => $term->term_id ));
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
