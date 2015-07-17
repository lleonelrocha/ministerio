<?php

    Route::group(['prefix' => 'profile', 'middleware'=>'is_admin', 'roles'=> [1,3] ], function(){

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

        Route::get('destroy/{id}', [
           'as' => 'profile.destroy',
            'uses' => 'ProfilesController@destroy'

        ]);

        Route::get('edit/{id}', [
            'as' => 'profile.edit',
            'uses' => 'ProfilesController@edit'
        ]);

        Route::put('update/{id}', [
           'as' => 'profile.update',
            'uses' => 'ProfilesController@update'

        ]);


        Route::get('profile_role', [
           'as' => 'profile.profile_role',
            'uses' => 'ProfilesController@profile_role'

        ]);

    });

