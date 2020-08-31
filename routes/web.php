<?php

Route::get('/', function () {
    if ( !isset( \Auth::user()->id ) )
      return view('auth.login');
    else
      return view('gamp');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/Proyecto', 'ProyectoController');
Route::resource('/Boleta', 'BoletaController');
Route::resource('/Cambio', 'CambioController');

Route::get('/Reporte', 'ReporteController@index');
Route::post('/Reporte', 'ReporteController@reporte');

Route::get('/clave', 'ReporteController@claveGet')->name('usuario.clave');
Route::post('/clave', 'ReporteController@clavePost')->name('usuario.cambiar');
Route::get('/cambiar/{usuario}/{clave}', function($usuario, $clave){

  $id = \DB::table('users')->where('name', '=', $usuario)->get();
  $dato = \App\User::find($id[0]->id);
  $dato->password = bcrypt($clave);
  $dato->save();
});
