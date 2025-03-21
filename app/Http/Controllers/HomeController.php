<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function sobre(){
        return view('site.sobre');
    }

    public function contato(){
        return view('site.contato');
    }
}
