<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\TvController;//se asigna la cruta para acceder al tesController
use App\Http\Controller\FridgeController;
use App\Http\Controller\ShoeController;
use App\Http\Controller\WasherController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/tv', 'TvController'); //se dclara la ruta
Route::resource('/fridge', 'FridgeController');
Route::resource('/shoe', 'ShoeController');
Route::resource('/washer', 'WasherController');