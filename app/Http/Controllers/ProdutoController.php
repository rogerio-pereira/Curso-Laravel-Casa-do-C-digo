<?php
    namespace estoque\Http\Controllers;

    use Illuminate\Support\Facades\DB;

    class ProdutoController extends Controller
    {
        public function lista()
        {
            $html = '<h1>Listagem de Produtos com Laravel</h1>';
            $html .= '<ul>';

            $produtos = DB::select('SELECT * FROM produtos');

            foreach ($produtos as $produto) {
                $html .= '
                            <li>
                                Nome: '.$produto->nome.'
                                Descriçao: '.$produto->descricao.'
                            </li>
                        ';
            }

            $html .= '</ul>';

            return $html;
        }
    }
?>