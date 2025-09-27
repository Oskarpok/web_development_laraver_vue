<?php

declare(strict_types=1);

namespace Op\Cms\Http\Controllers;

/**
 * Basic controller providing common logic for CMS controllers
 * Allows child controllers to define a model class and Op\Cms
 * handle basic CRUD operations
 */
abstract class BaseController extends \Illuminate\Routing\Controller {
  
  use \Op\Cms\Traits\DefaultController;

}