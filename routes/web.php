<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebTransitoController;
use App\Http\Controllers\UserController;


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
Route::get('/webtransito', [WebTransitoController::class, 'login']);
Route::get('/webtransito/login', [WebTransitoController::class, 'login']);
Route::get('/webtransito/index', [WebTransitoController::class, 'index']);
Route::post('/webtransito/store',  [WebTransitoController::class, 'store']);
Route::post('/webtransito/main',  [WebTransitoController::class, 'main']);
Route::get('/webtransito/edit/{id}',  [WebTransitoController::class, 'edit']);
Route::post('/webtransito/update/{id}',  [WebTransitoController::class, 'update']);

Route::get('/webtransito/createuser', [UserController::class, 'createUser']);
Route::post('/webtransito/store', [UserController::class, 'storeUser']);


/*
Route::get('/', 'WebTransitoController@layout');
Route::get('/layout', 'WebTransitoController@layout');

Route::get('layout/index', [WebTransitoController::class, 'index']);
Route::get('layout/create', [WebTransitoController::class, 'create']);
Route::post('/layout', [WebTransitoController::class, 'store']);
Route::get('layout/edit', [WebTransitoController::class, 'edit']);
Route::post('/layout', [WebTransitoController::class, 'update']);


//Route::get('/layout/show', 'WebTransitoController@show');

