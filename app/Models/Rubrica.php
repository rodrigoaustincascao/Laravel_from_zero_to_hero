<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubrica extends Model
{
    use HasFactory;

    public function tipo(){
        return $this->belongsTo(RubricaTipo::class);
    }

    public function calculos(){
        return $this->hasMany(Calculo::class);
    }
}
