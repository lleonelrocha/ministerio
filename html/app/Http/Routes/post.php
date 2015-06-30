<?php

Route::group(['prefix' => 'posts'], function() {

    Route::get('/', [
        'as'=> 'posts.index',
        'uses'=>'PostsController@index'
    ]);


    Route::get('create', [
        'as'=>'posts.create',
        'uses'=>'PostsController@create'
    ]);

    Route::get('edit', [
       'as' => 'posts.edit',
        'uses' => 'PostsController@edit'

    ]);

});