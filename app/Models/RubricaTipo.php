<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RubricaTipo extends Model
{
    use HasFactory;
    protected $table = 'rubricas_tipos';

    public function rubricas(){
        return $this->hasMany(Rubrica::class);
    }
}
