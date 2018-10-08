<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

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

}
