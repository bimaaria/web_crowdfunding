<?php

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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function(){
    Route::get('/route1', 'AdminController@admin');
    Route::get('/route2', 'AdminController@admin');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/route-1', function () {
    return 'masuk ke route 1';
})->middleware(['auth', 'email_verified']);

Route::get('/route-2', function () {
    return 'masuk ke route 2';
})->middleware(['auth', 'email_verified', 'admin']);
