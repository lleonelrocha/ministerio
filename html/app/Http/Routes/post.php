<?php

Route::group(['prefix' => 'posts', 'middleware'=> 'est', 'is_admin','roles'=> [2] ], function() {

    Route::get('/', [
        'as'  => 'posts.index',
        'uses'=>'PostsController@index'
    ]);


    Route::get('create', [
        'as'  =>'posts.create',
        'uses'=>'PostsController@create'
    ]);

    Route::post('store', [
        'as'   => 'posts.store',
        'uses' => 'PostsController@store'
    ]);

    Route::get('edit/{id}', [
        'as'   => 'posts.edit',
        'uses' => 'PostsController@edit'
    ]);

    Route::post('update/{id}', [
        'as'   => 'posts.update',
        'uses' => 'PostsController@update'

    ]);

    Route::get('destroy/{id}', [
        'as'    => 'posts.destroy',
        'uses' => 'PostsController@destroy'
    ]);

    Route::get('probar/{id}', [
        'as'  =>'posts.probar',
        'uses'=> 'PostsController@probar'
    ]);

    Route::get('view/{id}', [
        'as'   => 'posts.view',
        'uses' => 'PostsController@view'
    ]);

    Route::post('comentarioStore', [
        'as'   => 'posts.comentarioStore',
        'uses' => 'PostsController@comentarioStore'
    ]);

    Route::get('usuario',[
        'as'   => 'posts.usuario',
        'uses' => 'PostsController@usuario'
    ]);

    Route::post('usuario',[
        'as'   => 'posts.usuarioUpdate',
        'uses' => 'PostsController@usuarioUpdate'
    ]);

    Route::get('desactivar', [
        'as'   => 'posts.desactivar',
        'uses' => 'PostsController@desactivar'
    ]);

    Route::get('amigos', [
        'as'   => 'posts.amigos',
        'uses' => 'PostsController@amigos'
    ]);

    Route::get('buscar', [
        'as'   => 'posts.buscar',
        'uses' => 'PostsController@buscar'
    ]);

});