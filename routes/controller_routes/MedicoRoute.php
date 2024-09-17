<?php

use App\Http\Controllers\MedicoController;
use Illuminate\Support\Facades\Route;

Route::controller(MedicoController::class)->prefix('/medico')->group(function () {
    Route::get('/', 'index');
});