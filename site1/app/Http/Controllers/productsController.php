<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class productsController extends Controller
{
    


    function index(){

        //logic to find products
        $list = [];

        return view('products')->with('list', $list);
    }
}
