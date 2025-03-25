<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contato = new SiteContato();
        $contato->nome = 'admin';
        $contato->telefone = '1111111';
        $contato->email = 'a@teste.com';
        $contato->motivo_contato = '1';
        $contato->mensagem = '123';
        $contato->save();

    }
}
