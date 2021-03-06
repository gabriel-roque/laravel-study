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
        $title = 'Laravel 5.7';
        $xss = '<script>alert("Ataque XSS")</script>';

        $var = 123;
        $array = [1,2,3,4,5,6,7,8,9];
        $array2 = [];

        return view('site.home.index',
            compact('title', 'xss', 'var', 'array', 'array2'));
    }

    public function contato()
    {
        $title = 'Laravel 5.7';
        return view('site.contato.contato', compact('title'));
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
