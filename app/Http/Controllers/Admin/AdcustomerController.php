<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class AdcustomerController extends Controller
{
    public function index()
    {
        $data = cart::all();
        return view('Admin.customer',['cart' => $data]);     
    } 
}
