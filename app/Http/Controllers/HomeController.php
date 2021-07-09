<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revista_Articulo;

class HomeController extends Controller
{
    public function index(){
        $articulo = Revista_Articulo::get();        
        return view('home',[
            'articulos' => $articulo,
            
        ]);
    }
}
