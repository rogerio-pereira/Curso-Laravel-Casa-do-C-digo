<html>
    <head>
        <link href="/css/app.css" rel="stylesheet">
        <title>Controle de Estoque</title>
    </head>
    <body>
        <h1>Listagem de Produtos</h1>
        <div class='container'>
            <table class='table table-striped table-bordered table-hover'>
                <?php foreach ($produtos as $produto) : ?>
                    <tr>
                        <td><?= $produto->nome ?></td>
                        <td><?= $produto->valor ?></td>
                        <td><?= $produto->descricao ?></td>
                        <td><?= $produto->quantidade ?></td>
                        <td>
                            <a href="produtos/mostra?id=<?= $produto->id ?>">
                                <span class="glyphicon glyphicon-search"></span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </body>
</html>