<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }


    public function product(){
        return view('product');
    }

    public function productDetail(){
        return view('product-details');
    }
    public function inquiry(){
        return view('inquiry');
    }
}
