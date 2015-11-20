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

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/', function()
{
    return '<h1>Primeira logica com Laravel</h1>';
});

Route::get('/outra', function()
{
    return '<h1>Outra logica com Laravel</h1>';
});

Route::get('/outra', function()
{
    return '<h1>Logica sobrescrita com Laravel</h1>';
});