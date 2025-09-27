<?php

declare(strict_types=1);

namespace Op\Cms\Http\Controllers\Cms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends \Op\Cms\Http\Controllers\BaseController {

  protected const MODEL_CLASS = \Op\Cms\Models\Cms\User::class;
  protected const ROUTE_NAME = 'cms.users.';

  protected function titles(): array {
    return [
      'index' => 'Users Panel',
      'create' => 'Users Create Panel',
      'edit' => 'Users Edit Panel',
      'show' => 'Users Show Panel',
    ];
  }

  protected function indexPrepare(Request $request): array {
    return [
      //
    ];
  }

  protected function prepareFormFields($data = null): array {
    $currentRoute = Route::currentRouteName();
    return [
      //
    ];
  }

}