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

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');

Route::post('/person/verificar', 'PersonController@verificar')->name('person.verificar');

Route::get('/user/{dni}','UserController@create1')->name('user.create1');

Route::resource('bedroom', 'BedroomController');

