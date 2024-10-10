<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index(){
        $data =product::all();  
        return view('Frontend.Catalog.shop',['product' => $data]);
    }
}
