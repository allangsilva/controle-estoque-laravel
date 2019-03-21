<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

use estoque\Produto;
use estoque\Http\Requests\ProdutosRequest;

class ProdutoController extends Controller{
    public function lista() {
        $produtos = Produto::all();
        
        if( view()->exists('produto/listagem') ){
            /** QUALQUER UMA DAS FORMAS ABAIXO FUNCIONA */
            //return view('listagem')->with('produtos', $produtos);
            //return view('listagem')->withṔrodutos($produtos);
            return view('produto/listagem', ['produtos' => $produtos]);
        }else{
            return 'Not found';
        }
    }

    public function mostra() {

        $id = Request::route('id', '0');

        $produto = Produto::find($id);

        if( empty($produto) ){
            return 'Produto ID ' . $id . ' não encontrado';
        }

        return view('produto/detalhes', ['p' => $produto ]);
    }

    public function novo() {
        return view('produto/formulario');
    }

    public function adiciona(ProdutosRequest $request) {

        //Cria um novo produto a partir dos parametros da requisicao
        Produto::create($request->all());
        
        return redirect()->
               action('ProdutoController@lista')->
               withInput(Request::only('nome'));
    }

    public function remove() {

        $id = Request::route('id', 0);
        if( $id == 0 ) {
            return redirect()   
                    ->action('ProdutoController@lista');
        }

        $produto = Produto::find($id);

        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function editar() {
        $id = Request::route('id', 0);

        $produto = Produto::find($id);

        if( $id == 0 || empty($produto) ) {
            return 'Produto não encontrado';
        }

        return view('produto/editar', ['p' => $produto]);

    }

    public function salvar() {

        $form = Request::all();
        
        $produto = Produto::find($form['id']);

        $produto->nome = $form['nome'];
        $produto->valor = $form['valor'];
        $produto->descricao = $form['descricao'];
        $produto->quantidade = $form['quantidade'];
        $produto->save();
        
        return redirect()->
               action('ProdutoController@lista');
    }
}

?>