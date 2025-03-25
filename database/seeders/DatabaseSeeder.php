<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SiteContato;
use Database\Factories\SiteContatoFactory;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //    $this->call(FornecedorSeeder::class);
    //    $this->call(SiteContatoSeeder::class);

        SiteContato::factory()->count(100)->create();
    }
}
