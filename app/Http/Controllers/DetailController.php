<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class DetailController extends Controller
{
    //
    public function product_detail($id){
        $product_detail = Producto::where('id', '=', $id);

        return view('detail', compact('product_detail'));
    }
}
