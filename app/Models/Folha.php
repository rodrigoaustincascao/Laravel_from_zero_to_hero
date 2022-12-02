<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folha extends Model
{
    use HasFactory;

    public function tipo(){
        return $this->belongsTo(FolhaTipo::class);
    }
}
