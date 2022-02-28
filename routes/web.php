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

Route::resource('/', WebTransitoController::class);
Route::get('/listar', [WebTransitoController::class, 'listar']);
/*
Route::get('/', 'WebTransitoController@layout');
Route::get('/layout', 'WebTransitoController@layout');

Route::get('layout/index', [WebTransitoController::class, 'index']);
Route::get('layout/create', [WebTransitoController::class, 'create']);
Route::post('/layout', [WebTransitoController::class, 'store']);
Route::get('layout/edit', [WebTransitoController::class, 'edit']);
Route::post('/layout', [WebTransitoController::class, 'update']);


//Route::get('/layout/show', 'WebTransitoController@show');

