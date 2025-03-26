<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('site.index', ['title' => 'Home Page']);
    }

    public function sobre(){
        return view('site.sobre');
    }



    public function store_contato()
    {
        dd($_POST);
    }
}
