<?php
namespace App\Http\Controllers\Login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userid;
use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{
    public function index()
    {
        return view("Login.register");     
    
    }

    public function register(Request $request)
    {

     $data =  array(
        'id' => $request ->id,
        'password'=>$request->password
      
       );
       print_r($data);
       $result =DB::table('userid')->insert($data);

    }
}
