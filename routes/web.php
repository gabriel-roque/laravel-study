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



# nomeando rota
Route::get('/nome/nome2/nome3', function (){
    return 'Rota Grande';
})->name('rota.nomeada');


# redirecionamento de rota
/* usar redicrection para um rota nomeada facilita na alteracao, pois busca pelo seu ID e nao pelo caminho*/

Route::get('/teste', function (){
   return redirect()->route('rota.nomeada');
});


# rota generica
Route::any('/any', function (){
   return 'any';
});

Route::match(['get', 'post'], '/match', function (){
    return 'Route match';
});

Route::post('/post', function (){
    return 'Route Post';
});

Route::get('/empresa', function (){
    return view('empresa');
});

Route::get('/', function () {
    return view('welcome');
});
