<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolhaTipo extends Model
{
    use HasFactory;
    protected $table = 'folhas_tipos';

    public function folhas(){
        return $this->hasMany(Folha::class);
    }
}
