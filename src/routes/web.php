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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function() {
    return view('top');
});

Route::group(
    [
        'prefix' => 'posts',
        'as' => 'posts.',
        'where' => ['user_id' => '[0-9]+', 'post_id' => '[0-9]+']
    ],
    function () {
    Route::get('/', 'PostController@index')->name('index');
    Route::get('/create', 'PostController@create')->name('create');
    Route::get('/{post_id}', 'PostController@show')->name('show');
    Route::get('/{post_id}/edit', 'PostController@edit')->name('edit');
});