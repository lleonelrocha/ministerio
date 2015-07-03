<?php

Route::group(['prefix' => 'role'], function() {

    Route::get('/', [
          'as'=> 'role.index',
        'uses'=>'RolesController@index'
    ]);

    Route::get('create', [
          'as' => 'role.create',
        'uses' => 'RolesController@create'
    ]);

    Route::post('store', [
         'as'  => 'role.store',
        'uses' =>'RolesController@store'
    ]);

    Route::get('edit', [
        'as'   => 'role.edit',
        'uses' => 'RolesController@edit'
    ]);

    Route::post('update', [
        'as'   => 'role.update',
        'uses' => 'RolesController@update'

    ]);

});