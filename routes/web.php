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

Route::get('/depertments/mechnical', 'PageController@mech');

Route::get('/depertments/mecha', 'PageController@mecha');

Route::get('/depertments/ec', 'PageController@ec');

Route::get('/depertments/ep', 'PageController@ep');

Route::get('/depertments/ceit', 'PageController@ceit');

Route::get('/depertments/che', 'PageController@che');

Route::get('/depertments/arch', 'PageController@arch');

Route::get('/depertments/ir', 'PageController@ir');

Route::get('/depertments/maths', 'PageController@maths');

Route::get('/depertments/eng', 'PageController@eng');

Route::get('/depertments/mechnical', 'PageController@myan');






