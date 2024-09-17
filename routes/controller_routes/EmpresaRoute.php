<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

Route::controller(EmpresaController::class)->prefix('/empresa')->group(function () {
    Route::get('/', 'index');
});