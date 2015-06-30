<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 23/06/2015
 * Time: 11:16 AM
 */

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function() {

    Route::group(['middleware' => 'guest', 'is_admin' ], function() {

        Route::get('login', [
            'as' => 'auth.login',
            'uses' => 'AuthController@login'
        ]);

        Route::post('login', [
            'as' => 'auth.authenticate',
            'uses' => 'AuthController@authenticate'
        ]);

    });

    Route::get('logout', [
        'as' => 'auth.logout',
        'uses' => 'AuthController@logout',
        'middleware' => 'auth'
    ]);

});


