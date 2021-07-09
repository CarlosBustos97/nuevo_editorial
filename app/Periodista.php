<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodista extends Model
{
    public function periodistas_articulos(){
        // return $this->belongsTo(Revista_Articulo::class, 'foreign_key', 'other_key');
        return $this->hasMany(Periodista_Articulo::class);
         
    }
}
