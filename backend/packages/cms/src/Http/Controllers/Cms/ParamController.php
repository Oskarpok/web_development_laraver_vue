<?php

declare(strict_types=1);

namespace Op\Cms\Http\Controllers\Cms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Op\Cms\View\FormFields\Buttons\ButtonsTypeController;

class ParamController extends \Op\Cms\Http\Controllers\BaseController {

  protected const MODEL_CLASS = \Op\Cms\Models\Cms\Param::class;
  protected const ROUTE_NAME = 'cms.params.';

  protected function titles(): array {
    return [
      'index' => 'Parameters Panel',
      'create' => 'Parameters Create Panel',
      'edit' => 'Parameters Edit Panel',
      'show' => 'Parameters Show Panel',
    ];
  }

  protected function indexPrepare(Request $request): array {
    return [
      'buttons' => [
        new ButtonsTypeController([
          'type' => 'anchore',
          'route' => self::ROUTE_NAME . 'create',
          'label' => 'Dodaj parametr',
          'icone' => 'fa-solid fa-plus',
        ]),
      ],
    ];
  }

  protected function prepareFormFields($data = null): array {
    $currentRoute = Route::currentRouteName();
    return [
      //
    ];
  }

}