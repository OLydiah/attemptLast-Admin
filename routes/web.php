<?php

use App\Http\Controllers\Backend\genSettingsController;
use App\Http\Controllers\Backend\reportsController;
use App\Http\Controllers\Backend\posController;
use App\Http\Controllers\Backend\uadminController;
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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('general', genSettingsController::class);
Route::resource('reports', reportsController::class);
Route::resource('posale', posController::class);
Route::resource('uadmin', uadminController::class);