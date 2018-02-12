<?php

namespace App;

use Sober\Controller\Controller;

class TemplateSwagtracks extends Controller
{
  function tracks() {
    return get_terms(array( "taxonomy" => 'swagtrack'));
  }
}
