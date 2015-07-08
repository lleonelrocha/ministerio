<?php

Route::group(['prefix' => 'profile_role', 'middleware'=>'is_admin', 'roles'=> [3]], function(){

    Route::get('/', [
        'as'   => 'profile_role.index',
        'uses' => 'ProfilesRolesController@index'
    ]);

    Route::get('create', [
        'as'   => 'profile_role.create',
        'uses' => 'ProfilesRolesController@create'
    ]);

    Route::post('store', [
        'as'   => 'profile_role.store',
        'uses' => 'ProfilesRolesController@store'
    ]);


    Route::get('edit', [
        'as'   => 'profile_role.edit',
        'uses' => 'ProfilesRolesController@edit'
    ]);


    Route::post('update', [
        'as'   => 'profile_role.update',
        'uses' => 'ProfilesRolesController@update'
    ]);




});
