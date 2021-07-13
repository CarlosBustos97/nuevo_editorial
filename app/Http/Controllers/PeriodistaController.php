<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Periodista_Articulo;
use App\Periodista;
use App\Articulo;

class PeriodistaController extends Controller
{
    public function index(){
        $periodista = Periodista::get();
        return view('periodistas',[
            'periodistas' => $periodista,
        ]);
    }

    public function cargarPeriodista(Request $request){
        $periodista_articulo = Periodista_Articulo::where('periodista_id','=',$request->id )->get();
        $periodista = Periodista::where('id','=',$request->id)->first();
        // $articulo = DB::select('', [$request->id]) ;
        return view('periodista',[
            'periodista_articulo' => $periodista_articulo,
            'periodista'=> $periodista,
        ]);
    }

    public function delete($periodista, $articulo, Periodista_Articulo $periodista_articulo){
        $periodista_articulo->where('periodista_id', '=', $periodista)
        ->where('articulo_id', '=', $articulo)->delete();
        return ([$periodista, $articulo]);


    }

    public function store(Request $request){ 
       try{
            $articulo = new Articulo();
            $articulo->nombre = $request->nombreArticulo;
            $articulo->save();
            $periodista_articulo = new Periodista_Articulo();
            $periodista_articulo->periodista_id = $request->periodista;
            $periodista_articulo->articulo_id = $articulo->id;
            $periodista_articulo->save();
            return ([$articulo,$periodista_articulo]);
         }
         catch(\Exception $e){
            // do task when error
            return $e->getMessage();   // insert query
         }

    }
}
