<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\SiteContato as ModelsSiteContato;
use Exception;
use Illuminate\Http\Request;

class SiteContato extends Controller
{
    public function contato(){

        $motivo_contatos = MotivoContato::all();
        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function store_contato(Request $request){
    //    $contato->nome = $request->input('nome');
    //    $contato->email = $request->input('email');
    //    $contato->telefone = $request->input('telefone');
    //    $contato->motivo_contato = $request->input('motivo_contato');
    //    $contato->mensagem = $request->input('mensagem');

    //   try {
    //     $contato->save();
    //     echo true;
    //   } catch (Exception $e) {
    //     return $e->getMessage();
    //   }
       //print_r($contato->getAttributes());

        // $contato->create($request->all());

        //print_r($contato->getAttributes());

        $contato = new ModelsSiteContato();
        $request->validate([
            'nome' => 'required|min:3|max:120',
            'telefone' => 'required|min:5|max:150',
            'email' => 'required|min:5|max:120',
            'motivo_contato' => 'required|min:1|max:20',
            'mesangem' => 'required|min:2|max:150'
        ]);
    }

}
