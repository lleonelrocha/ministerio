<?php

Route::group(['prefix' => 'profile_role'], function() {

    Route::get('/', [
        'as'=> 'profile_role.index',
        'uses'=>'ProfilesRolesController@index'
    ]);

    Route::get('create', [
        'as' => 'profile_role.create',
        'uses' => 'ProfilesRolesController@create'
    ]);


    Route::get('edit', [
        'as'   => 'profile_role.edit',
        'uses' => 'ProfilesRolesController@edit'
    ]);


});