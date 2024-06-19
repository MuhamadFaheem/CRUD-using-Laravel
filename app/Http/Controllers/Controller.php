<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index(){
        return view('products.index'); 
    }

    public function create(){
        
        return view('products.create'); 
    }
}
