<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    function getproductos(){
        $products = Product::all();
        return view('/home', compact('products'));   
    }
}
