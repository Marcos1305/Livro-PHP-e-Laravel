<?php 

namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;
use Illuminate\Support\Facades\Validator;
use estoque\Http\Requests\ProdutosRequest;   


class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['novo', 'remove', 'edit', 'update']]);
    }
    public function lista()
    {
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }
    public function mostra($id)
    {
        $resposta = Produto::find($id); 
        if(empty($resposta)){
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $resposta);
    }
    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona(ProdutosRequest $request)
    {   
        Produto::create($request->all());
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function listaJson()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }
    public function remove($id)
    {
        $produto = Produto::find($id)->delete();
        return redirect()->action('ProdutoController@lista');
    }
    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produto.update')->with('p', $produto);
    }
    public function update()
    {
        $id = Request::input('id');
        $produto = Produto::find($id);
        $produto->nome = Request::input('nome');
        $produto->descricao = Request::input('descricao');
        $produto->valor = Request::input('valor');
        $produto->quantidade = Request::input('quantidade');
        $produto->save();
        return redirect()->action('ProdutoController@lista');
    }
}
?>