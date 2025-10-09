<?php

declare(strict_types=1);

namespace Op\Cms\Http\Controllers\Cms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Op\Cms\View\FormFields\Buttons\ButtonsTypeController;

class UserController extends \Op\Cms\Http\Controllers\BaseController {

  protected const MODEL_CLASS = \Op\Cms\Models\Cms\User::class;
  protected const MODULE_NAME = 'users';

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
      'data' => self::MODEL_CLASS::filter($request, [
        'id', 'first_name', 'sur_name', 'phone', 'email', 'type', 'is_active',
        'email_verified_at', 'created_at', 'updated_at',
      ])->get()->append(['is_active_label', 'type_label']), 
      'labels' => [
        'Id', 'First name', 'Sur name', 'Phone', 'Email', 'Type', 'Active',
        'Verified at', 'Created at', 'Updated at',
      ],
      'filterable' => [
        'id' => true, 'first_name' => true, 'sur_name' => true, 'phone' => true, 
        'email' => true, 'type' => true, 'is_active' => true,
        'email_verified_at' => true, 'created_at' => true, 'updated_at' => true,
      ], 
      'destinations' => 'cms.' . self::MODULE_NAME . '.',
      'buttons' => [
        new ButtonsTypeController([
          'type' => 'anchore',
          'route' => 'cms.' . self::MODULE_NAME . '.create',
          'label' => 'Dodaj urzytkownika',
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