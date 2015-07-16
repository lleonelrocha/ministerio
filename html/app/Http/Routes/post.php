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

    Route::get('edit/{id}', [
       'as' => 'posts.edit',
        'uses' => 'PostsController@edit'

    ]);

});