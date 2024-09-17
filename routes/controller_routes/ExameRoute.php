<?php

use App\Http\Controllers\ExameController;
use Illuminate\Support\Facades\Route;

Route::controller(ExameController::class)->prefix('/exame')->group(function () {
    Route::get('/', 'index');
});