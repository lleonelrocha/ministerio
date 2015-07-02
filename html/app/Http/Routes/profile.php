<?php

    Route::group(['prefix' => 'profile', 'middleware'=>'is_admin', 'roles'=> [3] ], function(){

        Route::get('/', [
            'as' => 'profile.index',
            'uses' => 'ProfilesController@index'
        ]);

    });

