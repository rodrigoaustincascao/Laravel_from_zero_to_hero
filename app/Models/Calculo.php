<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculo extends Model
{
    use HasFactory;

    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }

    public function folha(){
        return $this->belongsTo(Folha::class);
    }

    public function rubrica(){
        return $this->belongsTo(Rubrica::class);
    }
}
