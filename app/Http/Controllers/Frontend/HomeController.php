<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Facade;

class HomeController extends Controller
{
  
  public function index()
  {

    $data = product::all();
    // return view("Frontend.index",compact("product"));
    // return view('search',compact('search'));
    return view('Frontend.index', ['product' => $data]);
 
    // return view('Frontend.index' );
  }
  public function addToCart1(Request $request,$id)
  {
     cart::all();
    $product = cart::find($id);
              if(isset($product) >0)
             {
                        
             $product['quantity']+=1;
             $product->save();
          }
  }

  public function addToCart(Request $request,$id)
  {
 
          
    // cart::all();
    // $product = cart::find($id);
    //           if(isset($product) >0)
    //          {
    //         echo "san pham da co";
    //         // echo  $product;
    //         // $product['quantity']+=1;
    //         // $product->save();
    //             //  $name=$product['id'];
    //             //  echo $name;
    //       }
    //       else
    //        {
    //         $product = product::find($id);

    //         echo "chua tim san pham";
    //         // $name=$product['id'];

    //         // product::all();

    // $cart = Product::find($id);
    // $shoppingCart[$id] = [

    //   'id_cart' => $request ->id_cart,
    //   'id' => "NV2",
    //   'category' => $request ->category,
    //   'name' => $request ->name,
    //   'price' => $request ->price,
    //   'quantity'=>"1"
    // ];
    // $cart = $request->input('quantity');
    // put('cart', $cart);
    // echo $shoppingCart;
// echo array($shoppingCart);

    // $data =  array($du['category']
    //   'id' => $request ->id,
    //   'name' => $request ->name,
    //   'email' => $request ->email,
    //   'password' => $request ->password,
    //  );
    //  $result =DB::table('cart')->insert($data);
    // //       }


    // $book = cart::findOrFail($id);
    // $cart = session()->get('cart', $id);
    //             echo $cart;

    // cart::all();
    // $product = cart::find($id);
    //           if(isset($product) >0)
    //          {
    //         echo "san pham da co";
    //         // echo  $product;
    //         // $product['quantity']+=1;
    //         // $product->save();
    //              $name=$product['id'];
    //              echo $name;
    //       }
    //       else
    //        {
    //         echo "chua tim san pham";
    //       }


    // $product = product::findOrFail($id);
    // $cart = session()->get('cart', []);

    //     $cart[$id] = [
    //       "id_cart"=>'2',
    //         "id" =>"NV2",
    //         "category" => $product->category,
    //         "name" => $product->name,
    //         "price" => $product->price,
    //         "name" => $product->name,
    //         "quantity" =>1,  
           
    //     ];
    
    // dd(Session::get('cart'));
    // Session::save();
    // session()->put('cart', $cart);
    
    
    
    
    
     $product = product::findOrFail($id);
    //  $product = cart::find($id);
              if(isset($product) >1)
             {
              $product['quantity']=+1;
              $product->save();
            echo "san pham da co";
            
                dd ($product);
          }
          else
           {
            $product = product::findOrFail($id);

            $cart= [
                        // "id_cart"=>$product['id_cart']=2
                        "id_cart"=>$product['id_cart'],
                          "id" =>"NV3",
                          "category" => $product->category,
                          "name" => $product->name,
                          "price" => $product->price,
                          "name" => $product->name,
                          "quantity" =>1,  
                         "image"=>$product->image
                      ];
                      $result =DB::table('cart')->insert($cart);
               dd ($cart);
           }
           


}


}