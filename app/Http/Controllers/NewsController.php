<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function listar(){

        $title = 'News';

        return view('news.index', compact('title'));

    }
}
