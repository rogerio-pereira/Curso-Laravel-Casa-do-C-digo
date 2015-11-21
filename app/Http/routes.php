<?php

//Nome do Contrlador@Metodo
Route::get  (
                '/produtos', 
                [
                    'as' => 'produtosListagem',
                    'uses' => 'ProdutoController@lista'
                ]
            );
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+'); //Se quisesse deixa o paramatro opcional coloca ? {id?}
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::get('/produtos/json', 'ProdutoController@listaJson');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/produtos/edita/{id}', 'ProdutoController@edita');
Route::post('/produtos/altera/{id}', 'ProdutoController@altera');

Route::get('/home', 'HomeController@index');
Route::controllers  ([
                        'auth' => 'Auth\AuthController',
                        'password' => 'Auth\PasswordController',
                    ]);

Route::get('/login', 'LoginController@login');