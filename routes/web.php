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
 //perdoruesit
Auth::routes();

//user needs to be logged in routes
Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/user', 'UserController');

    Route::get('/logout', 'Auth\LoginController@logout');
});
