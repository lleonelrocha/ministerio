<?php namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class HomeController extends Controller {

    //public $vista ;
    //public $data;

    public function __construct(){
        //$this->vista = 'home';

    }

	public function index()
    {
     return view('home');
    }

    /*public function view()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();

        // return 'hokla';
    }
    */

    public function view ()
    {
        return 'view';
    }
}
