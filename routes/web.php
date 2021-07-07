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


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class,'index'])->name('dashbaord');
Route::resource('/package', App\Http\Controllers\ProductController::class);
Route::resource('/address', App\Http\Controllers\AddressController::class);
Route::resource('/album', App\Http\Controllers\AlbumController::class);
Route::resource('/photo', App\Http\Controllers\PhotoController::class);
Route::resource('/about', App\Http\Controllers\AboutController::class);
Route::resource('/destination', App\Http\Controllers\DestinationController::class);



Route::get('/aboutus', function (){
    $about=\App\Models\About::all()->first();
    return view('about')->with('about',$about);
});

Route::get('/contactus', function (){
    $address=\App\Models\Address::all()->first();
    return view('contactus')->with('address',$address);
});

Route::get('/ourgallery', function (){
    $photos=\App\Models\Photo::OrderBy('id','desc')->paginate(10);
    $albums=\App\Models\Album::all();
    return view('gallery')->with(['albums'=>$albums,'photos'=>$photos]);
});




Route::get('/newapp', function (){
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh');
    \Illuminate\Support\Facades\Artisan::call('db:seed');
    echo 'initialized';
});


Route::get('/restart-server',function (){

    $exitCode = Artisan::call('route:clear');

    echo  $exitCode;
    $exitCode1 = Artisan::call('view:clear');

    echo  $exitCode1;
    $exitCode2 = Artisan::call('config:clear');

    echo  $exitCode2;
    $exitCode3 = Artisan::call('cache:clear');

    echo  $exitCode3;
});
