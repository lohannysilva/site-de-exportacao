<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);


     
    }
}
