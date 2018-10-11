<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

# para acessar tem ser autenticado

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

# especificar somente alguns

//    public function __construct()
//    {
//        $this->middleware('auth')
//            ->only(['contato', 'categoria']);
//    }

# exceto

//    public function __construct()
//    {
//
//        $this->middleware('auth')
//            ->except('index');
//
//    }

    public function index()
    {
        $teste = 123;
        $teste2 = 321;
        $teste3 = 231;


        //enviando dados para view
        # op 1
//        return view('teste', ['teste' => $teste]);
        # op2
        return view('site.home.index', compact('teste', 'teste2', 'teste3'));
    }

    public function contato()
    {
        return view('site.contato.contato');
    }

    public function categoria($id)
    {
        return "Listagem de Posts da categoria {$id}";
    }

    public function categoriaOps($id = 1)
    {
        return "Listagem de Posts da categoria {$id}";
    }





}
