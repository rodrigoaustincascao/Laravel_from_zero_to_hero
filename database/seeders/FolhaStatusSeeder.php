<?php

namespace Database\Seeders;

use App\Models\FolhaStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FolhaStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FolhaStatus::insert([
            [
                'nome'=> 'Aberta'
            ],
            [
                'nome'=> 'Calculada'
            ],
            [
                'nome'=> 'Fechada'
            ]
        ]);
    }
}
