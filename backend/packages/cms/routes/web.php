<?php

use Illuminate\Support\Facades\Route;
use Op\Cms\Http\Controllers\Cms\ParamController;
use Op\Cms\Http\Controllers\Cms\UserController;

Route::prefix('cms')->name('cms.')->group(function () {
  Route::resource('params', ParamController::class);
  Route::resource('users', UserController::class);
});
