<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Input;
use Illuminate\Http\Response;

class PruebaController extends Controller{

    public function index()
    {
        return view('prueba.index');
    }

    public function store()
    {
        $resultado =Input::get('valorCaja1') + Input::get('valorCaja2');

        return Response::json( array(
            'resultado' => $resultado,
            'sms' => " Parametro AJAX y JSON",
            'datos' => $datos,
            'datos' => $date,

        ));
    }

    public function create()
    {
        return 'crear';
    }

    public function edit()
    {
        return 'editar';
    }
}