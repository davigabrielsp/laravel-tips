<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome ='Admin 1';
        $fornecedor->site  = 'www.admin1.com.br';
        $fornecedor->uf = 'sp';
        $fornecedor->email = 'admin1@gmail.com';
        $fornecedor->save();

        // metodo create da model
        Fornecedor::create([
            'nome' =>  'Admin 2',
            'site' => 'www.admin2.com.br',
            'uf' => 'SP',
            'email' => 'admin2@gmail.com'
        ]);

        // Insert
        DB::table('fornecedores')->insert([
            'nome' =>  'Admin 3',
            'site' => 'www.admin3.com.br',
            'uf' => 'MG',
            'email' => 'admin3@gmail.com'
        ]);
    }
}
