<?php

    Route::group(['prefix' => 'profile', 'middleware'=>'is_admin', 'roles'=> [3]], function(){

        Route::get('/', [
            'as'   => 'profile.index',
            'uses' => 'ProfilesController@index'
        ]);

        Route::post('profile', [
            'as'   => 'profile.store',
            'uses' => 'ProfilesController@store'
        ]);

        Route::get('create', [
           'as' => 'profile.create',
            'uses' => 'ProfilesController@create'

        ]);

        Route::get('edit', [
           'as' => 'profile.edit',
            'uses' => 'ProfilesController@edit'

        ]);

        Route::get('update', [
        'as' => 'profile.edit',
            'uses' => 'ProfilesController@update'

        ]);

    });

