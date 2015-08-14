<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{

    //protected $vista;
   // protected $data;

    use DispatchesCommands, ValidatesRequests;

  /*  public function Index()
    {
        return view($this->vista)->with($this->data);
    }

    public function Create()
    {
        return view($this->vista)->with($this->data);
    }
*/
}


