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

Route::get('/', 'PageController@index');

Route::get('/depertments', 'PageController@depertments');

Route::get('/about', 'PageController@about');

Route::get('/research', 'PageController@research');

Route::get('/depertments/civil', 'PageController@civil');

Route::get('/depertments/mechnical', 'PageController@mechnical');