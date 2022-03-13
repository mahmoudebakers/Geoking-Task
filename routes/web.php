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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/list-users', [App\Http\Controllers\HomeController::class, 'listUsers'])->name('listUsers');
Route::get('/user-map/{user}', "HomeController@userMap")->name('user.map');

Route::resource('users.locations', 'LocationController')->except(['show']);

// Route::get('/user-locations/{user}', [App\Http\Controllers\HomeController::class, 'userLocations'])->name('userLocations');
// Route::get('/user-locations/{user}', [App\Http\Controllers\HomeController::class, 'userLocations'])->name('userLocations');
// Route::get('/create-user-locations/{user}', [App\Http\Controllers\HomeController::class, 'userLocations'])->name('userLocations');
