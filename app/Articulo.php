<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    public function revistas_articulos(){
        // return $this->belongsTo(Revista_Articulo::class, 'foreign_key', 'other_key');
        return $this->hasMany(Revista_Articulo::class);
         
    }
    public function periodistas_articulos(){
        // return $this->belongsTo(Revista_Articulo::class, 'foreign_key', 'other_key');
        return $this->hasMany(Periodista_Articulo::class);
         
    }
}
