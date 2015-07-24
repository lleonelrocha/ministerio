<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PruebaController extends Controller{

    public function index()
    {

        
        return view('prueba.index');

    }


}