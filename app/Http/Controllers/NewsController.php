<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function listar(){

        $title = 'News';

        return view('news.index', compact('title'));

    }

    public function switch(){

        $title = 'Opcoes | SWITCH';

        return view('news.opcoes', compact('title'));

    }

    public function opcoes($op){

        $title = 'Resultado | SWITCH';

        return view('news.resultado', compact('title', 'op'));

    }

}
