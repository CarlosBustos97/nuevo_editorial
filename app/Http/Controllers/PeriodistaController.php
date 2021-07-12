<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Periodista_Articulo;
use App\Periodista;

class PeriodistaController extends Controller
{
    public function index(){
        $periodista_articulo = Periodista_Articulo::get();
        $periodista = Periodista::get();
        return view('periodistas',[
            'periodistas' => $periodista,
        ]);
    }
}
