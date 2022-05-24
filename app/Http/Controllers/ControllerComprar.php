<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerComprar extends Controller
{
    //
    function index(){
        return response()->view('/comprar') 
        ->header("Refresh", "5;url=/"); 
    }
}
