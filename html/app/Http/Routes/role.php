<?php

    Route::group(['prefix' => 'role', 'middleware'=>'is_admin', 'roles'=> [3]], function(){

        Route::get('/', [
            'as'   => 'role.index',
            'uses' => 'RolesController@index'
        ]);


});

