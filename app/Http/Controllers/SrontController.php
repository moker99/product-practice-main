<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SrontController extends Controller
{
    public function test01()
    {
        dd('asd');
        // dd($request->all());
        return view('text');
    }
    public function fetchTest(Request $request)
    {
        dd($request->all());
    }
}
