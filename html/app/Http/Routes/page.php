<?php
Route::group(['prefix' => 'page' ] , function(){

    Route::get('/', [
        'as'   => 'page.index',
        'uses' => 'PagesController@index'
    ]);

    Route::get('create', [
        'as' => 'page.create',
        'uses' => 'PagesController@create'
    ]);

    Route::get('edit', [
        'as' => 'page.edit',
        'uses' => 'PagesController@edit'
    ]);

    Route::get('store/{id}', [
        'as' => 'page.store',
        'uses' => 'PagesController@store'
    ]);

    Route::get('update/{id}', [
        'as' => 'page.update',
        'uses'=> 'PagesController@update'
    ]);

});