@extends('principal')

@section('conteudo')
    <h1>Detalhes do Produto: <?= $produto->nome ?></h1>

    <ul>
        <li>
            <strong>Valor:</strong> <?= $produto->valor ?>
        </li>
        <li>
            <strong>Descriçao:</strong> <?= $produto->descricao ?>
        </li>
        <li>
            <strong>Quantidade em Estoque</strong> <?= $produto->quantidade ?>
        </li>
    </ul>
@stop