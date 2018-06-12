<?php 

namespace estoque\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = DB::select('select * from produtos');
        $data = ['produtos' => $produtos];
        return view('produto.listagem', $data);
    }
    public function mostra($id)
    {

        $resposta = DB::select('SELECT * FROM produtos WHERE id = ?', [$id]);
        if(empty($resposta)){
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $resposta[0]);
    }
    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona()
    {
        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');
        // DB::insert('INSERT INTO produtos(nome,quantidade,valor,descricao) VALUES(?,?,?,?)', [$nome, $quantidade, $valor, $descricao]);
        DB::table('produtos')->insert(
            [
                'nome' => $nome,
                'valor' =>$valor,
                'descricao' =>$descricao,
                'quantidade' =>$quantidade
            ]
        );
        return redirect('ProdutoController@lista')->withInput(Request::only('nome'));
    }

    public function listaJson()
    {
        $produtos = DB::select('select * from produtos');
        return response()->download($produtos);
    }
}
?>