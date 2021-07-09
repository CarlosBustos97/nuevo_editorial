<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revista_Articulo;

class RevistaController extends Controller
{
    public function index(Request $request){
        return $request->id;
        // $articulo = Revista_Articulo::get();
        // return view('home',[
        //     'articulos' => $request,
            
        // ]);
    }
}
