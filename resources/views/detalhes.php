<html>
    <head>
        <link href="/css/app.css" rel="stylesheet">
        <title>Controle de estoque</title>
    </head>
    <body>
        <div class="container">
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
        </div>
    </body>
</html>