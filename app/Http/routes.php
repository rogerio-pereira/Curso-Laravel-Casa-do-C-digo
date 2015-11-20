<?php

Route::get('/', function()
{
    return '<h1>Primeira logica com Laravel</h1>';
});

Route::get('/outra', function()
{
    return '<h1>Outra logica com Laravel</h1>';
});