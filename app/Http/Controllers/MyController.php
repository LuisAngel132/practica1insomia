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
    public function actualizar( Request $request,$idpersona){
        $persona = personas::find($idpersona);
       
$persona->nombre=$request->nombre;

$persona->save();
return response()->json([$persona,],201);
}
public function actualizarproducto( Request $request,$idproducto){
    $producto = productos::find($idproducto);
   
$producto->nombre_del_producto=$request->producto;

$producto->save();
return response()->json([$producto,],201);
}
public function eliminarproducto( $idproducto){
    $producto = productos::find($idproducto);
    $producto->delete();
    return response()->json(["fue eliminado"],201);

}
public function eliminarpersona( $idpersona){
    $persona = personas::find($idpersona);

    $persona->delete();
    return response()->json(["fue eliminado"],201);

}
public function eliminarcomentarios( $idpersona){
    $persona = comentarios::where ('persona',$idpersona);
if($persona)
{   $persona->delete();
    return response()->json(["fue eliminado el comentario",$idpersona],201);

}
else {
    
        return response()->json(["no existe el id"],201);

}
   
}
public function vercomentariosporproducto($idproducto=null)
{
if ($idproducto){
    $persona = comentarios::where ('persona',$idproducto)->get();
        return response()->json([$persona,],201);
}
else {
    $persona = comentarios::all();
    return response()->json([$persona,],201);    
}

    
}
public function vercomentariosporpersona($idpersona=null)
{
if ($idproducto){
    $persona = comentarios::where ('persona',$idpersona)->get();
        return response()->json([$persona,],201);
}
else {
    $persona = comentarios::all();
    return response()->json([$persona,],201);    
}

    
}
public function actualizarcomentariosporpersona(Request $request,$idpersona)
{

    $comentario = personas :: find($idpersona);
    $comentario = new comentarios;

    $comentario->comentario = $request->comentario;
    $comentario->save();
    return response()->json([$comentario,],201);    

    

}
}
