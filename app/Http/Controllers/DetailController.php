<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class DetailController extends Controller
{
    //
    public function index($id){
        $product_detail = Producto::where('id',$id)->first();
        return view('detail', compact('product_detail'));
    }
}
