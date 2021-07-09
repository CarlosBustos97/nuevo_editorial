<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revista extends Model
{
    public function tipos(){
        return $this->hasMany(Tipo::class);
    }
    public function revistas_articulos(){
        // return $this->belongsTo(Revista_Articulo::class, 'foreign_key', 'other_key');
        return $this->hasMany(Revista_Articulo::class);
         
    }
    public function sucursales_revistas(){
        // return $this->belongsTo(Revista_Articulo::class, 'foreign_key', 'other_key');
        return $this->hasMany(Sucursal_Revista::class);
         
    }
}
