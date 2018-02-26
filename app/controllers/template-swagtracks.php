<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateSwagtracks extends Controller
{
  use Partials\Swagpath;

  function tracks() {
    return get_terms(array( "taxonomy" => 'swagtrack', "parent" => 0 ));
  }
}
