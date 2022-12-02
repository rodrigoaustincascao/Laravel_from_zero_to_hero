<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolhaStatus extends Model
{
    use HasFactory;

    protected $table = 'folhas_status';

    public function folhas(){
        return $this->hasMany(Folha::class);
    }
}
