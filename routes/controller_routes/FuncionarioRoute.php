<?php

use App\Http\Controllers\FuncionarioController;
use Illuminate\Support\Facades\Route;

Route::controller(FuncionarioController::class)->prefix('/funcionario')->group(function () {
    Route::get('/', 'index');
});