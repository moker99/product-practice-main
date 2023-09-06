<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
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
