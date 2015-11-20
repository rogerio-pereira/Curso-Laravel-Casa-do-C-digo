@extends('layout.principal')

@section('conteudo')
    @if(empty($produtos))
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado.
        </div>
    @else
        <h1>Listagem de Produtos</h1>

        <table class='table table-striped table-bordered table-hover'>
            @foreach ($produtos as $produto)
                <tr class='{{ $produto->quantidade <= 1 ? 'danger' : ''}}'>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->valor}}</td>
                    <td>{{$produto->descricao}}</td>
                    <td>{{$produto->quantidade}}</td>
                    <td>
                        <a href="produtos/mostra/{{$produto->id}}">
                            Visualizar
                        </a>
                    </td>
                    <td>
                        <a href="produtos/edita/{{$produto->id}}">
                            Editar
                        </a>
                    </td>
                    <td>
                        <a href="produtos/remove/{{$produto->id}}">
                            Remover
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>

        <h4>
            <span class='label label-danger pull-right'>
                Um ou menos itens no estoque
            </span>
        </h4>

        @if(old('nome'))
            <div class='alert alert-success'>
                <strong>Sucesso!</strong> O produto {{old('nome')}} foi salvo com sucesso
            </div>
        @endif
    @endif
@stop