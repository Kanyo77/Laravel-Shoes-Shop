<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\bill;
use Illuminate\Support\Facades\DB;
use DateTime;
use Carbon\Carbon;
class CartController extends Controller
{
    public function index(){
        // $_SESSION['userid'];
        // echo $_SESSION;
        // return view("Frontend.Catalog.cart");

        $data = cart::all();
        return view('Frontend.Catalog.cart',['cart' => $data]);
    }
    public function delete($id_cart)
    { 
      $product = cart::find($id_cart)->delete();
     
     return redirect()->route('cart')->with('message','xoa thanh cong');

     
    }
    public function checkout(Request $request)
    { 
      
      $bill = new bill;
      $bill->price= $request->input('price');
      echo $bill;
     
      

    }

}
