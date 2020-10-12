<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function inserccion(Request $nombre)
    {
        $persona=new personas;
        $persona->nombre = $nombre->nombre;
        $persona->save();
        return response()->json([$persona,],201);
  
     //return response()->json(["url"=>url("/api/hola/{$request->variable}"),"data"=>$data,"request"=>$variable],201);
    }
  
}
