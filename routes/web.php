<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('/package', App\Http\Controllers\ProductController::class);
Route::resource('/address', App\Http\Controllers\AddressController::class);
Route::resource('/album', App\Http\Controllers\AlbumController::class);
Route::resource('/photo', App\Http\Controllers\PhotoController::class);
Route::resource('/about', App\Http\Controllers\AboutController::class);
