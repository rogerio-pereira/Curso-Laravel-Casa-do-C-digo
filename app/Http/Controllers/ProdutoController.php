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
            $nome = Request::input('nome');
            $descricao = Request::input('descricao');
            $valor = Request::input('valor');
            $quantidade = Request::input('quantidade');

            DB::insert  (
                            'INSERT INTO produtos (nome, quantidade, valor, descricao) VALUES (?,?,?,?)',
                            array($nome, $quantidade, $valor, $descricao)
                        );

            ///return redirect('/produtos')->withInput(Request::only('nome'));

            //return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));

            return redirect()->route('produtosListagem');
        }

        public function listaJson()
        {
            $produtos = Produto::all();

            return response()->json($produtos);
        }
    }
?>