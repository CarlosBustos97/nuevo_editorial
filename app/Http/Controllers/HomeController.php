<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revista_Articulo;
use App\Articulo;

class HomeController extends Controller
{
    public function index(){
        // $articulo = Revista_Articulo::get();
        $articulo = Articulo::get();        
        return view('articulos',[
            'articulos' => $articulo,
            
        ]);
    }
}
