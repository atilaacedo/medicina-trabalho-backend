<?php

use App\Http\Controllers\ConsultaController;
use Illuminate\Support\Facades\Route;

Route::controller(ConsultaController::class)->prefix('/consulta')->group(function () {
    Route::get('/', 'index');
});