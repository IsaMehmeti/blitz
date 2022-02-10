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

Auth::routes(['register' => false]);

//user needs to be logged in routes
Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/user', 'UserController');

     //lead-file-storage
    Route::group(['prefix' => 'lead/'], function () {
        Route::get('/', 'LeadController@index');
        Route::get('/create', 'LeadController@create')->name('create.lead');;
        Route::post('/store', 'LeadController@store')->name('store.lead');
    });

    //customers
    Route::get('/customers', 'CustomerController@index')->name('customer.index');
    Route::get('/customers/{id}', 'CustomerController@show')->name('customer.show');


    //transmissions
    Route::get('/transmissions', 'TransmissionController@index')->name('transmission.index');
    Route::get('/transmissions/download/{id}', 'LeadController@download')->name('transmission.download');
    Route::delete('/transmissions/delete', 'TransmissionController@download')->name('transmission.destroy');
    Route::get('/transmissions/{id}', 'TransmissionController@show')->name('transmission.show');


    Route::get('/logout', 'Auth\LoginController@logout');
});
