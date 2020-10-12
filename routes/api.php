<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\example\MyController;
use App\Http\Controllers\example\controlador;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('persona','example\MyController@personas')
->where (['nombre'=>'[a-z A-Z]+']);
Route::get('vpersona','example\MyController@personasvista')
->where (['nombre'=>'[a-z A-Z]+']);
Route::post('producto','example\controlador@producto');
Route::get('vproducto','example\MyController@productosvista')
->where (['nombre'=>'[a-z A-Z]+']);
Route::post('comentarios','example\MyController@comentarios');
Route::get('vcomentarios','example\MyController@comentariosvista');

Route::get('personas/{id}/vcomentariosp','example\MyController@getComentariosPorPersona');
Route::get('productos/{producto}/vcomentariospr','example\MyController@comentariosvistaporproducto');
