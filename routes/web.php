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

Route::post('/post', function (){
    return 'Route Post';
});

Route::get('/empresa', function (){
    return view('empresa');
});

Route::get('/', function () {
    return view('welcome');
});
