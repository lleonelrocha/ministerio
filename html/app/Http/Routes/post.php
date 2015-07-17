<?php

Route::group(['prefix' => 'posts', 'middleware'=>'is_admin','roles'=> [2]], function() {

    Route::get('/', [
        'as'=> 'posts.index',
        'uses'=>'PostsController@index'
    ]);


    Route::get('create', [
        'as'=>'posts.create',
        'uses'=>'PostsController@create'
    ]);

    Route::post('store', [
        'as' => 'posts.store',
        'uses' => 'PostsController@store'

    ]);

    Route::get('edit/{id}', [
        'as' => 'posts.edit',
        'uses' => 'PostsController@edit'

    ]);

    Route::post('update/{id}', [
        'as'=> 'posts.update',
        'uses' => 'PostsController@update'

    ]);

    Route::get('destroy/{id}', [
       'as' => 'posts.destroy',
        'uses' => 'PostsController@destroy'

    ]);


});