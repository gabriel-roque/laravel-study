<?php

namespace App\Http\Controllers\Painel;

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
        return view('painel.products.index', compact('products', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
