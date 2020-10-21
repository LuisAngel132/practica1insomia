<?php

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

Route::post('persona','example\MyController@personas');
Route::get('vpersona','example\MyController@personasvista');
Route::post('producto','example\controlador@producto');
Route::get('vproducto','example\MyController@productosvista');
Route::post('comentarios','example\MyController@comentarios');
Route::get('vcomentarios','example\MyController@comentariosvista');
Route::get('personas/{id}/vcomentariosp','example\MyController@getComentariosPorPersona')
->where (['id'=>'[0-9]+']);
Route::get('productos/{producto}/vcomentariospr','example\MyController@comentariosvistaporproducto')
->where (['producto'=>'[0-9]+']);

Route ::put ('apersona/{idpersona}','example\MyController@actualizar');
Route ::delete ('eproducto/{idproducto}','example\MyController@eliminarproducto')
->where (['idproducto'=>'[0-9]+']);
Route ::put ('aproducto/{idproducto}','example\MyController@actualizarproducto')
->where (['idproducto'=>'[0-9]+']);
Route ::get ('vprcomentario/{idproducto?}','example\MyController@vercomentariosporproducto')
->where (['idproducto'=>'[0-9]+']);
Route ::get ('vpcomentario/{idproducto?}','example\MyController@vercomentariosporproducto')
->where (['idproducto'=>'[0-9]+']);
Route ::delete ('epersona/{idpersona}','example\MyController@eliminarpersona')
->where (['idproducto'=>'[0-9]+']);
Route ::delete ('ecomentario/{idpersona}','example\MyController@eliminarcomentarios')
->where (['idpersona'=>'[0-9]+']);
Route ::put ('acomentario/{idpersona}','example\MyController@actualizarcomentariosporpersona')
->where (['idpersona'=>'[0-9]+']);

