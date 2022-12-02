<?php

namespace Database\Seeders;

use App\Models\RubricaTipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RubricaTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RubricaTipo::insert([
            [
                'sigla' => 'V',
                'nome' => 'Vencimento'
            ],
            [
                'sigla' => 'D',
                'nome' => 'Desconto'
            ]
        ]);
    }
}
