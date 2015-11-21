<?php
    namespace estoque\Http\Controllers;

    use estoque\Produto;
    use Request;
    use estoque\Http\Request\ProdutosRequest;
    use Validator;

    class ProdutoController extends Controller
    {
        public function lista()
        {
            $produtos = Produto::all();

            return view('produto.listagem')->with('produtos', $produtos);
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
            $validator = Validator::make(
                                            ['nome' => Request::input('nome')],
                                            ['nome' => 'required|min:5']
                                        );

            if($validator->fails())
                return redirect()->action('ProdutoController@novo');

            Produto::create(Request::all());

            return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
        }

        public function listaJson()
        {
            $produtos = Produto::all();

            return response()->json($produtos);
        }

        public function remove($id)
        {
            $produto = Produto::find($id);
            $produto->delete();

            return redirect()->action('ProdutoController@lista');
        }

        public function edita($id)
        {
            $produto = Produto::find($id);

            if(empty($produto))
                return "Esse produto nao existe";
            
            return view('produto.edita')->with('produto', $produto);
        }

        public function altera($id)
        {
            $produto = Produto::find($id);
            
            $produto->nome = Request::input('nome');
            $produto->descricao = Request::input('descricao');
            $produto->valor = Request::input('valor');
            $produto->quantidade = Request::input('quantidade');

            $produto->save();

            return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
        }
    }
?>