<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Producto;

class ProductoController extends Controller
{
    //
    public function product(){
        $products = Producto::all();
        return view('home', compact('products'));
    }
}
