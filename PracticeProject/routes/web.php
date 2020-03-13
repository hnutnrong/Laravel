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


//Route::get('showname/{name}','HelloController@showHello');
//Route::get('showproduct/{product}','HelloController@resultProduct');


// Route::get('/create',function(){
//     return view('create');
// });

Route::resource('user','UsersController');

Route::resource('user/pdfreport','UsersController');