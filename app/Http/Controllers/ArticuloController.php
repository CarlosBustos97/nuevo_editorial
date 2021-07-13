<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Articulo;
use App\Revista;
use App\Revista_Articulo;

class ArticuloController extends Controller
{
    public function cargarArticulo(Request $request){
        $revista_articulo = Revista_Articulo::where('articulo_id','=',$request->id)->get();
        $articulo = Articulo::where('id','=',$request->id)->first();
        $revista = DB::select(
            'select * from editorial.revistas 
            where id not in (SELECT revista_id FROM editorial.revista__articulos where articulo_id = ?)', [$request->id]);
        return view('articulo',[
            'revista_articulo' =>  $revista_articulo,
            'revista' => $revista,
            'articulo' => $articulo,
        
        ]);
        // return $articulo;
    }

    public function update(Request $request){
        
        //dd($request->articulo,$request->nombreArticulo, $request->idRevista);
        $articulo = Articulo::findOrFail($request->articulo);
        //dd($articulo);
        $articulo->nombre = $request->nombreArticulo;
        $articulo->save();
        $revista_articulo = new Revista_Articulo();
        $revista_articulo->revista_id = $request->idRevista;
        $revista_articulo->articulo_id = $request->articulo;
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
