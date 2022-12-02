<?php

namespace Database\Seeders;

use App\Models\Rubrica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RubricaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rubrica::insert([
            [   
                'tipo_id' => 1,
                'codigo' => 6090,
                'nome' => 'Vencimento Básico'
            ],
            [
                'tipo_id' => 1,
                'codigo' => 1020,
                'nome' => 'Auxílio Creche'
            ],
            [
                'tipo_id' => 2,
                'codigo' => 9080,
                'nome' => 'IRRF'
            ],
        ]);
    }
}
