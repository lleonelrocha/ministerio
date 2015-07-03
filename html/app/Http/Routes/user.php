<?php


Route::group(['prefix' => 'users', 'middleware' => 'is_admin', 'roles' => [1,3]], function() {

    Route::get('/', [
        'as'=> 'users.index',
        'uses'=>'UsersController@index'
    ]);

    Route::get('create', [
        'as'=>'users.create',
        'uses'=>'UsersController@create'
    ]);

    Route::post('store', [
        'as'  =>'users.store',
        'uses'=>'UsersController@store'
    ]);

    Route::get('edit/{id}', [
        'as'=>'users.edit',
        'uses'=>'UsersController@edit'
    ]);

    Route::put('edit/{id}', [
        'as' => 'users.update',
        'uses' => 'UsersController@update'
    ]);

    Route::get('show/{id}', [
        'as' => 'users.show',
        'uses' => 'UsersController@show'

    ]);

    Route::get('destroy/{id}', [
        'as'=> 'users.destroy',
        'uses' =>'UsersController@destroy'
    ]);

    Route::get('estade/{id}', [
        'as' => 'users.desactive',
        'uses' => 'UsersController@desactive'
    ]);

    Route::get('active/{id}', [
        'as' => 'users.active',
        'uses' => 'UsersController@active'

    ]);



});

