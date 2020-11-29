<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KomenController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', [HomeController::class, 'showAdmin']);

Route::get('beranda', [HomeController::class, 'showBeranda']);







Route::get('layout', [HomeClientController::class, 'showLayout']);
Route::get('about', [HomeClientController::class, 'showAbout']);
Route::get('komen2', [HomeClientController::class, 'showKomen']);
Route::get('kontak', [HomeClientController::class, 'showKontak']);
Route::get('artikel2', [HomeClientController::class, 'showArtikel']);
Route::get('login2', [HomeClientController::class, 'showLogin2']);


	Route::post('artikel/filter', [ArtikelController::class, 'filter']);
	Route::post('komen/filter', [KomenController::class, 'filter']);
	Route::post('user/filter', [UserController::class, 'filter']);
	Route::resource('artikel', ArtikelController::class);
	Route::resource('komen', KomenController::class);
	Route::resource('user', UserController::class);


Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
	
