<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use App\Revista;
use App\Revista_Articulo;

class ArticuloController extends Controller
{
    public function index(Request $request){
        $revista_articulo = Revista_Articulo::where('articulo_id','=',$request->id)->get();
        return view('articulo',[
            'revista_articulo' =>  $revista_articulo
            
        ]);
        // return $articulo;
    }
}
