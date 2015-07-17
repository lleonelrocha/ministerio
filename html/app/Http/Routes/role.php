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

    Route::get('edit/{id}', [
        'as'   => 'role.edit',
        'uses' => 'RolesController@edit'
    ]);

    Route::get('destroy/{id}',[
       'as' => 'role.destroy',
        'uses' => 'RolesController@destroy'

    ]);

    Route::post('update/{id}', [
        'as'   => 'role.update',
        'uses' => 'RolesController@update'

    ]);

});