<?php

namespace App\Http\Controllers;

use App\Models\Typeofproduct;
use Illuminate\Http\Request;

class TypeOfProductsController extends Controller
{

    public function allData(){
        $typeofproduct = new Typeofproduct();
        return view('typeOfProducts',['data'=>$typeofproduct->all()]);
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
}
