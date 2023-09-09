<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutallController extends Controller
{
    public function index() 
    {
        return view('checkout.cardshop');
    }
    public function delivery() 
    {
        return view('checkout.delivery');
    }
    public function payment()
    {
        return view('checkout.payment');
    }
    public function complete()
    {
        return view('checkout.complete');
    }
}
