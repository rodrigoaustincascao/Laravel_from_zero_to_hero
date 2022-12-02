<?php

namespace Database\Seeders;

use App\Models\FolhaTipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FolhaTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FolhaTipo::insert([
            [
                'nome'=> 'Normal'
            ],
            [
                'nome'=> 'Suplementar'
            ],
            [
                'nome'=> 'Natalina'
            ]
        ]);
    }
}
