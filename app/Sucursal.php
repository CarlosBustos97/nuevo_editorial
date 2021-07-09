<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    public function empleados(){
        return $this->hasMany(Empleado::class);
    }
    public function sucursales_revistas(){
        // return $this->belongsTo(Revista_Articulo::class, 'foreign_key', 'other_key');
        return $this->hasMany(Sucursal_Revista::class);         
    }
}
