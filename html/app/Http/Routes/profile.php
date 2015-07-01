<?php

    Route::group(['prefix' => 'profile' ], function(){

        Route::get('/', [
            'as' => 'profile.index',
            'uses' => 'ProfilesController@index'
        ]);



    });

