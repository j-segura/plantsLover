<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $guarded = [];

    /* relacion uno a muchos (inversa) */

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    public function tamaño(){
        return $this->belongsTo('App\Models\Tamaño');
    }
}
