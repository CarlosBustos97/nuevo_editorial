<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Revista;
use App\Revista_Articulo;

class RevistaController extends Controller
{
    public function index(){
        //$articulo = Revista_Articulo::get();
        $revistas = Revista::get();        
        return view('revistas',[
            'revistas' => $revistas,            
        ]);
    }
    public function cargarRevista(Request $request){
        $revista_articulo = Revista_Articulo::where('revista_id','=',$request->id)->get();
        $revista = Revista::where('id','=',$request->id)->first();
        $articulos = DB::select(
            'select * from editorial.articulos 
            where id not in (SELECT articulo_id FROM editorial.revista__articulos where revista_id = ?)', [$request->id]);
        return view('revista',[
            'revista_articulo' =>  $revista_articulo,
            'articulos' => $articulos,
            'revista' => $revista
        
        ]);
        // return $articulo;
    }

    public function update(Request $request){
        
        //dd($request->revista,$request->nombreRevista, $request->idArticulo);
        $revista = Revista::findOrFail($request->revista);
        //dd($articulo);
        $revista->titulo = $request->nombreRevista;
        $revista->save();
        $revista_articulo = new Revista_Articulo();
        $revista_articulo->revista_id = $request->revista;
        $revista_articulo->articulo_id = $request->idArticulo;
        $revista_articulo->save();
        return back();
    }

    public function delete($articulo = null, $revista = null, Revista_Articulo $revista_articulo){
        $revista_articulo->where('articulo_id', '=', $articulo)->where('revista_id', '=', $revista)->delete();
        // return ([
        //     'articulo' => $articulo,
        //     'revista' => $revista,
        // ]);
        return 'si';
    }

}
