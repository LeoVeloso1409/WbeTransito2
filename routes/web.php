<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebTransitoController;

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

Route::get('/', 'WebTransitoController@layout');
Route::get('/layout', 'WebTransitoController@layout');

Route::get('layout/index', [WebTransitoController::class, 'index']);
Route::get('layout/create', [WebTransitoController::class, 'edit']);
Route::post('/', [WebTransitoController::class, 'storeAit']);

//Route::get('/layout/show', 'WebTransitoController@show');

