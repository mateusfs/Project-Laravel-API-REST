<?php

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

/*
  Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
  });
 */

Route::prefix('/v1')->group(function () {
   
    Route::get('/paises', 'PaisController@index');
    Route::get('/estados/{pais_id}', 'EstadoController@index');
    Route::get('/cidades/{estado_id}', 'CidadeController@index');

    route::group(['middleware' => 'AuthServiceToken'], function () {
        Route::post('/email/envio', 'EmailController@envio');
    });


    Route::put('/servico/auth', 'ServiceAuthController@auth');
});
