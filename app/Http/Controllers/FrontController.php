<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // status
        $products =Product::where('status','=',1)->get();
        
        return view('welcome',compact('products'));

    }
    public function test01()
    {
        // dd($request->all());
        return view('text');
    }
    public function fetchTest(Request $request)
    {
        dd($request->all());
    }
}
