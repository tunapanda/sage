<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TaxonomySwagtrack extends Controller
{
    use Partials\Swagifacts;

    use Partials\Swagpath;

    public function child_tracks() {
        $term = get_queried_object();
        return get_terms(array( "taxonomy" => 'swagtrack', "parent" => $term->term_id ));
    }
}
