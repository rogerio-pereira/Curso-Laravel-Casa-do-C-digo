<?php
    namespace estoque\Http\Controllers;

    use Illuminate\Support\Facades\DB;
    use estoque\Produto;
    use Request;

    class ProdutoController extends Controller
    {
        public function lista()
        {
            $produtos = Produto::all();

            return view('produto.listagem')->withProdutos($produtos);
        }

        public function mostra($id)
        {
            $produto = Produto::find($id);

            if(empty($produto))
                return "Esse produto nao existe";
            
            return view('produto.detalhes')->with('produto', $produto);
        }

        public function novo()
        {
            return view('produto.formulario');
        }

        public function adiciona()
        {
            Produto::create(Request::all());

            return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
        }

        public function listaJson()
        {
            $produtos = Produto::all();

            return response()->json($produtos);
        }
    }
?>