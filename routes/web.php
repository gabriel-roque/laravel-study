<?php


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




# nao e necessario passagem de parametro, opcional

Route::get('/cat/{idCat?}', function ($idCat = null){
    return "Post da categoria $idCat";
});

# rotas com passagem de parametro
Route::get('/cat/{idCat}', function ($idCat){
    return "Posts da categoria $idCat";
});





# nomeando rota
Route::get('/nome/nome2/nome3', function (){
    return 'Rota Grande';
})->name('rota.nomeada');


# redirecionamento de rota
/* usar redicrection para um rota nomeada facilita na alteracao,
 pois busca pelo seu ID e nao pelo caminho*/

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







/*

usando CONTROLLERS
> tudo depois do @ e uma metodo do meu controller
> sempre quando for trabalhar com nameSpace tem que apontar o caminho
> ou usar um grupo de rotas apontando o name namespace

*/

Route::group(['namespace' => 'Site'], function (){


    Route::get('/', 'SiteController@index');

    Route::get('/contato', 'SiteController@contato');

    Route::get('/categoria/{id}', 'SiteController@categoria');

    Route::get('/categoria2/{id?}', 'SiteController@categoriaOps');

});

Route::get('/painel', 'Painel\PainelController@painel');


# php artisan make:controller pasta\\NomeDoController
# cria direto dentro do namespace

# usando CONTROLLERS ROSOURCES
# php artisan make:controller pasta\\NomeDoController --resource

Route::get('/painel/produtos/tests','Painel\ProdutoController@tests');
Route::resource('/painel/produtos', 'Painel\ProdutoController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
