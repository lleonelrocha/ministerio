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

    Route::get('edit', [
        'as'    => 'prueba.edit',
        'uses'  => 'PruebaController@edit'
    ]);

});