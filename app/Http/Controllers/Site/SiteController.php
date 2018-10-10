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
        return 'Home do site';
    }

    public function contato()
    {
        return 'Contato Page';
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
