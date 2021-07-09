<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revista_Articulo extends Model
{
    public function articulo(){
        // return $this->belongsTo(Revista_Articulo::class, 'foreign_key', 'other_key');
        return $this->belongsTo(Articulo::class);
         
    }
    public function revista(){
        // return $this->belongsTo(Revista_Articulo::class, 'foreign_key', 'other_key');
        return $this->belongsTo(Revista::class);
         
    }
}
