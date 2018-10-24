<?php

namespace App\Http\Controllers\Painel;

use App\Http\Requests\Painel\ProductFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;

//php artisan make:controller TesteController --resource (criar com recurso)

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

// construtor para todos as funcoes funcionarem com esse DI
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }





    public function index()
    {
        $title = 'Lista de Produtos';
        $products = $this->product->all();
//        $products = $this->product->paginate(3); // paginacao TODO tem que implementar menu na view
        return view('painel.products.index', compact('products', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Produto';
        $categorys = ['eletronicos', 'moveis', 'limpeza', 'banho'];
        return view('painel.products.create', compact('title', 'categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request)
    {
        // Recupera tudo no formulario
//        dd($request->all());

        // Recupera campos especificos
//        dd($request->only('name', 'number'));

        // Recupera todos os dados exeto
//        dd($request->except('_token', 'active'));

        // Recupera um campo individual
//        dd($request->input('name'));


        // Mensagens personalizadas
//        $mensagens = [
//            'name.required' => 'O campo nome e obrigatorio',
//            'number.numeric' => 'Apenas numeros',
//            'number.required' => 'O campo de numero e obrigatorio',
//            'category.required' => 'O campo de categoria e obrigatorio',
//            'description.min' => 'A descricao deve ter no min 3 caracteres',
//        ];

        // VALIDACAO (regra de validacao fica em MODEL ou no FORM REQUEST)
//        $this->validate($request, $this->product->rules, $mensagens);


        // armazena em um variavel todos os dados
        $dataForm = $request->all();

        $dataForm['active'] = ( !isset($dataForm['active']) ) ? 0 : 1;

        // insiro no banco de dados
        $insert = $this->product->create($dataForm);


        // realiza o redirection
        if ($insert)
            return redirect()->route('produtos.index');
        else
            return redirect()->route('produtos.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->product->find($id);
        $title = "View do produto";
        return view('painel.products.show', compact('product', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Recupera os dados do regristo
        $product = $this->product->find($id);

        $title = "Editar produto";
        $categorys = ['eletronicos', 'moveis', 'limpeza', 'banho'];
        return view('painel.products.edit', compact('title', 'categorys', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, $id) // recebe somente form por PUT ou PATH
    {                      /* DI de ja do meu form request
                             com minhas regras de validacao*/


        $dataform = $request->all();

        $item = $this->product->find($id);

        $dataForm['active'] = ( !isset($dataForm['active']) ) ? 0 : 1;

        $update = $item->update($dataform);

        if ($update)
            return redirect()->route('produtos.index');
        else
            return redirect()->route('produtos.edit', $id)->with(['erros' => 'Falha ao editar']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) // recebe no metodo DELETE
    {

        $product = $this->product->find($id);

        $delete = $product->delete();

        if ($delete)
            return redirect()->route('produtos.index');

    }

    public function tests()
    {
//        METODO CREATE ME OBRIGA A DIZER QUAIS CAMPOS PODEM SER INSERIDOS ATRAS DA MINHA MODEL

        //INSERIR DADOS

//        $insert = $this->product->create([
//            'name' => 'Nome do produto',
//            'number' => 1564,
//            'active' => false,
//            'category' => 'eletronicos',
//            'description' => 'Descricao do produto',
//        ]);
//
//        if ($insert)
//            return 'Inserido com sucesso';
//        else
//            return 'Falha ao inserir';


        // UPDATE DADOS

//        $prod = $this->product->find(5);
//        $prod->update([
//            'name' => 'Update do nome',
//            'number' => 1255,
//            'description' => 'Update desc',
//        ]);

        // UPDATE com WHERE

//        $prod = $this->product->where('number', 878);
//        $prod->update([
//            'name' => 'Update do nome',
//            'number' => 1255,
//            'description' => 'Update desc',
//        ]);

        // DELETE

//        $prod = $this->product->find(4);
//        $delete = $prod->delete();
//        $prod = $this->product->destroy(2);

        // DELETE com WHERE

        $prod = $this->product->where('number', 454)->delete();

        // debugar
        // dd($prod);




    }
}
