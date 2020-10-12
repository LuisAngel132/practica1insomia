<?php

namespace App\Http\Controllers\example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\productos;
use App\personas;
use App\comentarios;


class MyController extends Controller
{
    public function personas(Request $request)
    {
        
        $persona = new Personas;

        $persona->nombre = $request->nombre;
        $persona->save();
        
        return response()->json([$persona,],201);
  
     //return response()->json(["url"=>url("/api/hola/{$request->variable}"),"data"=>$data,"request"=>$variable],201);
    }
    public function personasvista()
    {

        $vpersona=personas::all();
        return response()->json([$vpersona,],201);
    }
    
    public function productosvista()
    {
        $vproducto=productos::all();
        return response()->json([$vproducto,],201);
    }
    public function comentariosvista()
    {
        $vcomentario=comentarios::all();
        return response()->json([$vcomentario,],201);
    }
    public function comentarios(Request $request)
    {
        
        $comentario = new comentarios;

        $comentario->comentario = $request->comentario;
        $comentario->persona = $request->persona;
        $comentario->producto = $request->producto;

        $comentario->save();
        
        return response()->json([$comentario,],201);
  
     //return response()->json(["url"=>url("/api/hola/{$request->variable}"),"data"=>$data,"request"=>$variable],201);
    }

    public function getComentariosPorPersona ($id)
    {
        $comentarios = Comentarios::where ('persona', $id) ->get();
        return response()
        ->json($comentarios);
    }
    public function comentariosvistaporproducto($producto)
    {
        $vcomentariopr=comentarios::where ('producto',$producto)->get();
        return response()->json([$vcomentariopr,],201);
    }
}


