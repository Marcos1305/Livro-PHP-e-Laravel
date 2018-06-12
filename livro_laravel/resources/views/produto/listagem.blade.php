@extends('layout.principal')
    @section('conteudo')
        @if(empty($produtos))
                <div class="alert alert-danger">
                    Você não tem nenhum produto cadastro.
                </div>
        @else
        <h1>Listagem de Produtos</h1>    
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>Produto</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Detalhes</th>
            </thead>

            @foreach($produtos as $p)
            <tr class={{$p->quantidade <= 1 ? 'bg-danger' : ''}}>
                <td>{{$p->nome}}</td>
                <td>{{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td>{{$p->quantidade}}</td>
                <td> 
                    <a href="/produtos/mostra/{{$p->id}}">
                        Visualizar
                    </a>
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
    @stop