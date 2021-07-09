<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal_Revista extends Model
{
    public function sucursal(){
        // return $this->belongsTo(Revista_Articulo::class, 'foreign_key', 'other_key');
        return $this->belengsTo(Sucursal::class);
         
    }
    public function revista(){
        // return $this->belongsTo(Revista_Articulo::class, 'foreign_key', 'other_key');
        return $this->belengsTo(Revista::class);
         
    }
}
