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
#home page
Route::get('/home', "HomeController@index")->name('home');
#list all users
Route::get('/list-users', "HomeController@listUsers")->name('listUsers');
#display user locations on map
Route::get('/user-map/{user}', "HomeController@userMap")->name('user.map');
#location operations for specific user
Route::resource('users.locations', 'LocationController')->except(['show']);
