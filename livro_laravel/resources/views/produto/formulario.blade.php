@extends('layout.principal')
    @section('conteudo')
    @if($errors->all())
    <div class="alert alert-danger  ">
            <ul>
                @foreach($errors->all() as $error)
                        <li>{{$error}}</li>      
                @endforeach
            </ul>
        </div>
    @endif
<h1>Novo Produto</h1>
<form action="/produtos/adiciona/" method="POST">
    <input type="hidden" name="_token" value="{{{csrf_token()}}}">
    <input type="hidden" name="id">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input class="form-control" type="text" name="nome"  value="{{old('nome')}}" id="nome">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" value="{{old('descricao')}}" id="descricao">
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <input class="form-control" type="text"  name="valor" value="{{old('valor')}}" id="valor">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control" name="quantidade" value="{{old('quantidade')}}" id="quantidade">
    </div>
    <button class="btn btn-primary btn-block"type="submit">Adicionar</button>  
</form>
@stop