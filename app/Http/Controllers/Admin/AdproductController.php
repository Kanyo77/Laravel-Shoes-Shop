<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
class AdproductController extends Controller
{
    public function index()
    {
        $data = product::all();
        return view('Admin.product',['product' => $data]);    
    } 

    public function delete($id)
    { 
      $product = product::find($id)->delete();
     
     return redirect()->route('product');

    }

    public function indexregister()
    { 
        return view('Admin.register');
    }
    
    public function store(Request $request)
    {
      
      $product = new product;

      $product->id=$request ->input('id');
      $product->category=$request ->input('category');
      $product->name=$request->input('name');
      $product->price=$request->input('price');
     
      if($request->hasfile('image'))
      {
          $file = $request->file('image');
          $extenstion = $file->getClientOriginalExtension();
          $filename = time().'.'.$extenstion;
          $file->move('public/Frontend/images/', $filename);
          $product->image = $filename;
      }
      $product->save();
      
      return redirect()->route('product');
    }

public function store1(Request $request,$id)
    {
      $product = product::find($id);
      $product->id=$request['category'];
      $product->name=$request['name'];
      $product->price=$request['price'];

     if(isset($request->image))
     {
     $img_temp = pathinfo($request->image->getClientOriginalName());
     $request->image->storeAs('public/Frontend/images/',$img_temp['image']);
     $product->image =$img_temp['image'];
     }
     $product->save();
    }

    public function register(Request $request)
    {
      $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);
       $data =  array(
        'id' => $request ->id,
        'category' => $request ->category,
        'name' => $request ->name,
        'price' => $request ->price,
         'image' => $request ->image
      
       );
       print_r($data);
       $result =DB::table('product')->insert($data);
       }

     

       public function edit($id)
       {
        $product = product::find($id);
      //$data = product::all();
  
        return view('Admin.edit1',compact('product')); 
      
    
       }
     

      public function upload(Request $request,$id)
      {
        $request->validate([
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
      ]);

      $product = product::find($id);
      $product->category=$request ->input('category');
      $product->name=$request->input('name');
      $product->price=$request->input('price');
     
      if($request->hasfile('image'))
      {
          $file = $request->file('image');
          $extenstion = $file->getClientOriginalExtension();
          $filename = time().'.'.$extenstion;
          $file->move('public/Frontend/images/', $filename);
          $product->image = $filename;
      }
      $product->save();
      }
     

    
}
