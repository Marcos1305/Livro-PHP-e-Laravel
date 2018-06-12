@extends('layout.principal')
    @section('conteudo')
   <h1>Detalhes do produto: {{$p->nome}}</h1>
        <button class="btn btn-success">
            <a href="{{action('ProdutoController@lista')}}">
            <i class="fas fa-long-arrow-alt-left"></i> Voltar a Lista</a>
        </button>
       
        <ul>
            <li>
                <b>Valor:</b> R$ {{$p->valor}}
            </li>
            <li>
                <b>Descrição</b> {{$p->descricao}}
            </li>
            <li>
                <b>Quantidade em estoque:</b> {{$p->quantidade}}
            </li>
        </ul>
    @stop