@extends('layout.principal')
    @section('conteudo')

<h1>Novo Produto</h1>
<form action="/produtos/adiciona" method="POST">
    <input type="hidden" name="_token" value="{{{csrf_token()}}}">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" type="text" name="nome" id="nome">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <input class="form-control" type="text" name="valor" id="valor">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control" name="quantidade" id="quantidade">
    </div>
    <button class="btn btn-primary btn-block"type="submit">Enviar</button>  
</form>
@stop