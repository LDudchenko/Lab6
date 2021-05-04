<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\typeofproduct;

class ProductController extends Controller
{
    public function allData($id){
        $typeofproduct = new typeofproduct();
        return view('products',['data'=>$typeofproduct->find($id)->products]);
    }
}
