<?php
namespace App\Http\Controllers;



class PagesController extends Controller {

    public function index()
    {
        return 'index';
    }

    public function create()
    {
        return 'crate';
    }

    public function store($id)
    {
        return 'store: '.$id;
    }


    public function edit()
    {
        return 'edit';
    }

    public function update($id)
    {
        return 'update: '.$id;
    }

}