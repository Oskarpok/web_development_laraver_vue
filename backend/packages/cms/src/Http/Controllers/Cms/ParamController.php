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
      'data' => self::MODEL_CLASS::filter($request, [
        'id', 'name', 'type', 'value', 'created_at', 'updated_at',
      ])->get()->append(['type_label', 'value']), 
      'labels' => [
        'Id', 'Name', 'Type', 'Value', 'Created at', 'Updated at',
      ],
      'filterable' => [
        'id' => true, 'name' => true, 'type' => true, 'value' => false, 
        'created_at' => true, 'updated_at' => true,
      ], 
      'destinations' => self::ROUTE_NAME,
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