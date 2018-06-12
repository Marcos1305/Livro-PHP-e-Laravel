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
}
?>