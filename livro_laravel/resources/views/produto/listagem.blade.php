@extends('layout.principal')
    @section('conteudo')
        @if(empty($produtos))
                <div class="alert alert-danger">
                    Você não tem nenhum produto cadastro.
                </div>
        @else
        <h1>Listagem de Produtos</h1>    
        <table  class="table table-striped table-bordered table-hover">
            <thead>
                <th>Produto</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Ações</th>

            </thead>

            @foreach($produtos as $p)
            <tr class={{$p->quantidade <= 1 ? 'bg-danger' : ''}}>
                <td>{{$p->nome}}</td>
                <td>{{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td>{{$p->quantidade}}</td>
                <td> 
                    <button>
                    <a href="{{action('ProdutoController@mostra', $p->id)}}">
                        <i class="fas fa-eye"></i>
                    Detalhes
                    </a>
                    </button>
                    <button>
                    <a href="{{action('ProdutoController@edit', $p->id)}}">
                        <i class="fas fa-trash"></i>
                    Editar
                    </a>
                    </button>
                    <button>
                    <a href="{{action('ProdutoController@remove', $p->id)}}">
                        <i class="fas fa-trash"></i>
                    Remover
                    </a>
                    </button>
                </td>
            </tr>
            @endforeach
        </table>
        @endif
        <h4>
            <span class="badge badge-danger float-right">
                Um ou menos itens no estoque
            </span>
        </h4>
        @if(old('nome'))
        <div class="alert alert-success">
            O produto {{old('nome')}} foi adicionado com <strong>sucesso!<strong>.
        </div>  
        @endif
    @stop