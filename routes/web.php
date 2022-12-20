<?php

use App\Http\Controllers\DemandeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssistanciaController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::resource('demande', DemandeController::class)->middleware('auth');

Route::resource('admin', AdminController::class)->middleware('auth');
Route::resource('assistancia', AssistanciaController::class)->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/rejet{id}', [App\Http\Controllers\HomeController::class, 'rejet']);
Route::post('/motif{id}', [App\Http\Controllers\HomeController::class, 'motif']);
Route::get('/alouer{id}', [App\Http\Controllers\HomeController::class, 'alouer']);
Route::get('/valider{id}', [App\Http\Controllers\HomeController::class, 'valider']);

Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/private', [App\Http\Controllers\Controller::class, 'traites']);

});

