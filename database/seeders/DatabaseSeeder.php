<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(FolhaTipoSeeder::class);
        $this->call(FolhaStatusSeeder::class);
        $this->call(RubricaTipoSeeder::class);
        $this->call(RubricaSeeder::class);
        $this->call(PessoaSeeder::class);
    }
}
