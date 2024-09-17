<?php

use App\Http\Controllers\AtestadoController;
use Illuminate\Support\Facades\Route;

Route::controller(AtestadoController::class)->prefix('/atestado')->group(function () {
    Route::get('/', 'index');
});