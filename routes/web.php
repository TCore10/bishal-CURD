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
//Route::get('/hello', 'PageController@index')->name('hello');
Route::resource('posts','PostController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/js1', 'HomeController@jsGeneration')->name('js1');
Route::post('/save', [
    'as'   => 'save',
    'uses' => 'HomeController@storeDomain',
]);