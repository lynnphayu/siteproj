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

Route::get('/departments', 'PageController@departments');

Route::get('/about', 'PageController@about');

Route::get('/research', 'PageController@research');

Route::get('/academic', 'PageController@academic');

Route::get('/departments/civil', 'PageController@civil');

Route::get('/departments/mech', 'PageController@mech');

Route::get('/departments/mecha', 'PageController@mecha');

Route::get('/departments/ec', 'PageController@ec');

Route::get('/departments/ep', 'PageController@ep');

Route::get('/departments/ceit', 'PageController@ceit');

Route::get('/departments/che', 'PageController@che');

Route::get('/departments/archi', 'PageController@archi');

Route::get('/departments/ir', 'PageController@ir');

Route::get('/departments/maths', 'PageController@maths');

Route::get('/departments/eng', 'PageController@eng');

Route::get('/departments/myan', 'PageController@myan');








