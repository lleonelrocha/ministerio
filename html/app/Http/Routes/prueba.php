<?php

Route::group(['prefix' => 'prueba' ], function() {

    Route::get('/', [
        'as' => 'prueba.index',
        'uses' => 'PruebaController@index'
    ]);

    /*Route::get('ajax', function()
    {
        return View::make('index');
    });
    */
});