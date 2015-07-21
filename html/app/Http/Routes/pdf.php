<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 23/06/2015
 * Time: 11:31 AM
 */

Route::get('pdf', [
    'middleware' => 'est',
    'as' => 'pdf.view',
    'uses' => 'HomeController@view'
]);