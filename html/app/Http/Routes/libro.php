<?php
Route::group([ 'prefix'=>'libro' ], function(){

    Route::get('/', [
        'as'   => 'libro.index',
        'uses' => 'LibrosController@index'

    ]);

    Route::get('prueba', [
        'as' => 'libro.prueba',
        'uses' => 'LibrosController@prueba'
    ]);

});