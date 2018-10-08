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


# grupos de rotas
# uso o prefix para economizar na escrita do codigo
Route::group(['prefix' => 'painel'], function (){

    Route::get('/', function (){
        return 'Dashboard';
    });

    Route::get('/grupo1', function (){
        return 'Grupo 1';
    });

    Route::get('/grupo2', function (){
        return 'Grupo 2';
    });

});


# somente pessoas autenticadas podem acessar MIDDLEWARE


Route::middleware(['prefix' => 'painel2'], function (){

    Route::get('/', function (){
        return 'Dashboard';
    });

    Route::get('/grupo1', function (){
        return 'Grupo 1';
    });

    Route::get('/grupo2', function (){
        return 'Grupo 2';
    });

});












# nao e necessario passagem de parametro, opcional

Route::get('/categoria2/{idCat?}', function ($idCat = null){
    return "Post da categoria $idCat";
});

# rotas com passagem de parametro
Route::get('/categoria/{idCat}', function ($idCat){
    return "Posts da categoria $idCat";
});







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
