<?php

Route::group(['prefix' => 'prueba' ], function() {

    Route::get('/', [
        'as'   => 'prueba.index',
        'uses' => 'PruebaController@index'
    ]);

    Route::post('store', [
        'as'   => 'prueba.store',
        'uses' => 'PruebaController@store'
    ]);

    Route::get('create', [
        'as'   => 'prueba.create',
        'uses' => 'PruebaController@create'
    ]);

    Route::post('edit', [
        'as'    => 'prueba.edit',
        'uses'  => 'PruebaController@edit'
    ]);

    Route::get('usuario', [
        'as'   => 'prueba.usuario',
        'uses' => 'PruebaController@usuario'
    ]);

    Route::get('pelicula', [
        'as'   => 'prueba.pelicula',
        'uses' => 'PruebaController@peliculas'
    ]);

    Route::get('hora', [
        'as' => 'prueba.hora',
        'uses' => 'PruebaController@hora'

    ]);
    Route::get('traerPelicula/{id}', [
        'as' => 'prueba.traerPelicula',
        'uses' => 'PruebaController@traerPelicula'

    ]);



});