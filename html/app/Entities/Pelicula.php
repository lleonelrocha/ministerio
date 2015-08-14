<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 10/08/2015
 * Time: 01:40 PM
 */
namespace App\Entities;

class Pelicula extends Entity{

    protected $table = 'peliculas';
    protected $fillable = ['cod_pelicula', 'nombre', 'genero', 'descripcion', 'stock', 'disponibles', 'fecha', 'precio'];

}