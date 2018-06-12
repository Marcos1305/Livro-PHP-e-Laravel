@extends('layout.principal')
    @section('conteudo')

<h1>Editar Produto {{$p->nome}}</h1>
<form action="/produtos/update" method="POST">
    <input type="hidden" name="_token" value="{{{csrf_token()}}}">
    <input type="hidden" name="id" value="{{isset($p->id) ? $p->id : ''}}">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" value="{{isset($p->nome) ? $p->nome : ''}}" id="nome">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" value="{{isset($p->descricao) ? $p->descricao : ''}}" id="descricao">
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <input class="form-control" type="text" value="{{isset($p->valor) ? $p->valor : ''}}" name="valor" id="valor">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control" value="{{isset($p->quantidade) ? $p->quantidade : ''}}" name="quantidade" id="quantidade">
    </div>
    <button class="btn btn-primary btn-block"type="submit">Atualizar</button>  
</form>
@stop