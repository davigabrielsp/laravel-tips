<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MotivoContato;
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
        //SiteContato::factory()->count(100)->create();
        //MotivoContatoSeeder::factory()->count()->create();
        $this->call(MotivoContatoSeeder::class);
    }
}
