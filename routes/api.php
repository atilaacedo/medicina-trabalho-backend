<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

$folder = 'controller_routes';
$sufix = 'Route.php';

include $folder . '/Empresa' . $sufix;
include $folder . '/Funcionario' . $sufix;
include $folder . '/Medico' . $sufix;
include $folder . '/Consulta' . $sufix;
include $folder . '/Atestado' . $sufix;
include $folder . '/Exame' . $sufix;