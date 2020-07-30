<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/api/articles', 'ArticleController@index')->name('index');

Route::get('/api/articles/1', 'ArticleController@show')->name('show');

Route::put('/api/articles/1', 'ArticleController@update')->name('up');

Route::put('/api/articles/1', 'ArticleController@delete')->name('del');

Route::get('/pamfs', function () {
    Artisan::call('migrate:fresh --seed');

    return ('done');
});
