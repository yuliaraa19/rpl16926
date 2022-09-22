<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\HomeController;

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

Route::resource('siswa', SiswaController::class);
Route::resource('templates', TemplateController::class);
Route::resource('template', HomeController::class);

//ini route yang bukan resource
Route::get('/blog/', [HomeController::class, 'blog']);
Route::get('/blog/about', [HomeController::class, 'about']);
Route::get('/blog/contact', [HomeController::class, 'contact']);        
//nama function hrs sama = class, 'ini'
//Route:method('url',[controller::function]);
Route::get('/siswa/', [SiswaController::class, 'siswa']);





