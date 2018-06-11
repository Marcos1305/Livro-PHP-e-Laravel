<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de estoque</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
        <h1>Listagem de Produtos</h1>    
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>Produto</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Quantidade</th>
            </thead>
            <?php foreach($produtos as $p) : ?>
            <tr>
                <td><?php echo $p->nome ?></td>
                <td><?php echo $p->valor?></td>
                <td><?php echo $p->descricao ?></td>
                <td><?php echo $p->quantidade?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>