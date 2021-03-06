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

Route::get('/', function () {
    return view('welcome');
});
/**
 * Группа маршрутов для панели администратора
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'] ], function () {
    // маршрут для жанров книг
    Route::resource('/genre', 'GenreController', ['as' => 'admin']);
});
/**
 * Группа маршрутов для авторизованного пользователя
 */
Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth'] ], function () {
    // маршрут для жанров книг
    Route::resource('/book', 'BookController', ['as' => 'user']);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
