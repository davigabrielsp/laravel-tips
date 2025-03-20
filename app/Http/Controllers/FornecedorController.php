<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['id' => 0, 'nome' => 'admin', 'categoria' => null],
            1 => ['id' => 1, 'nome' => 'admin'],
            2 => ['id' => 2, 'nome' => 'admin'],
            3 => ['id' => 3, 'nome' => 'admin'],
            4 => ['id' => 4, 'nome' => 'admin'],
            5 => ['id' => 5, 'nome' => 'admin'],
            6 => ['id' => 6, 'nome' => 'admin'],
            7 => ['id' => 7, 'nome' => 'admin'],
            8 => ['id' => 8, 'nome' => 'admin'],
            9 => ['id' => 9, 'nome' => 'admin'],
            10 => ['id' => 10, 'nome' => 'admin'],

        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
