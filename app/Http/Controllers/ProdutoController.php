<?php
    namespace estoque\Http\Controllers;

    use Illuminate\Support\Facades\DB;

    class ProdutoController extends Controller
    {
        public function lista()
        {
            $produtos = DB::select('SELECT * FROM produtos');

            //return view('listagem')->with('produtos', $produtos);

            return view('listagem')->withProdutos($produtos);

            //return view('listagem', ['produtos' => $produtos]);

            //$data = ['produtos' => $produtos];
            //return view('listagem', $data);

            ///$data = [];
            //$data['produtos'] = $produtos;
            //return view('listagem', $data);            
        }
    }
?>