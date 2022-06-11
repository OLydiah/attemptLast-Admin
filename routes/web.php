<?php

use App\Http\Controllers\Backend\genSettingsController;
use App\Http\Controllers\Backend\reportsController;
use App\Http\Controllers\Backend\posController;
use App\Http\Controllers\Backend\uadminController;
use App\Http\Controllers\Backend\blogPostController;
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
Route::resource('cart', posController::class);
Route::resource('uadmin', uadminController::class);
Route::resource('blogs', blogPostController::class);


Route::get('/blogs', [\App\Http\Controllers\blogPostController::class, 'index']);
Route::get('/blog/{blogpost}', [\App\Http\Controllers\blogPostController::class, 'show']);
Route::get('/blog/create/post', [\App\Http\Controllers\blogPostController::class, 'create']); //show create post form
Route::post('/blog/create/post', [\App\Http\Controllers\blogPostController::class, 'store']); //save craeted post to db
Route::get('/blog/{blogpost}/edit', [\App\Http\Controllers\blogPostController::class, 'edit']); //show edit post form
Route::put('/blog/{blogpost}/edit', [\App\Http\Controllers\blogPostController::class, 'update']); //commit edited post to db
Route::delete('/blog/{blogpost}', [\App\Http\Controllers\blogPostController::class, 'destroy']); //del post from db