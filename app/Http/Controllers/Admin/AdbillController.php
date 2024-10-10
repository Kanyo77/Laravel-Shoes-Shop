<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bill;
class AdbillController extends Controller
{
    public function index()
    {
        $data = bill::all();
        
        return view('Admin.bill',['product' => $data]);          
    } 
    
}
