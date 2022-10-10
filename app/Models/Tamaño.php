<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamaño extends Model
{
    use HasFactory;

    protected $guarded = [];

    /* relaciones uno a muchos */

    public function plants(){
        return $this->hasMany('App\Models\Plant');
    }
}
