<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodista_Articulo extends Model
{
    public function articulo(){
        // return $this->belongsTo(Revista_Articulo::class, 'foreign_key', 'other_key');
        return $this->belengsTo(Articulo::class);
         
    }
    public function periodista(){
        // return $this->belongsTo(Revista_Articulo::class, 'foreign_key', 'other_key');
        return $this->belengsTo(Periodista::class);
         
    }
}
