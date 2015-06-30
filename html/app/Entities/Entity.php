<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 22/06/2015
 * Time: 12:51 PM
 */

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Entity extends Model {

    public static function getClass()
    {
        return get_class(new static);
    }
}