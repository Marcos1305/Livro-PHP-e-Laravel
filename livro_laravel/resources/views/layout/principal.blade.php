<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Estoque</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="/produtos" class="navbar-brand">
                        Estoque Larevel
                    </a>
                    <button class="btn btn-info">
                        <a href="{{action('ProdutoController@lista')}}">Listagem</a>
                    </button>
                    <button class="btn btn-success">
                        <a href="{{action('ProdutoController@novo')}}">Novo Produto</a>
                    </button>

                </div>
            </div>
        </nav>
        @yield('conteudo')
        <footer class="footer">
            <p>Livro de Laravel da Casa do Código.</p>
        </footer>
    </div>
</body>
</html>