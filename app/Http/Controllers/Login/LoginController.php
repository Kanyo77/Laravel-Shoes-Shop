<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\userid;
use Illuminate\Support\Facades\Hash;
use Input;
use Validator;
use Redirect;
use Session;
class LoginController extends Controller
{
 
    public function index()
    {
        return view("Login.login");
    }
    public function index1()
    {
        return view("Login.login1");
    }
  
     function checklogin(Request $request)
     {

       
        $arr = [
            'id' => $request->id,
            'password' => $request->password,
        ];


        //if (Auth::guard('userid')->attempt($arr))
        if ($request->id == 'admin' || $request->password =='password')
         {
            
            dd('đăng nhập admin thành công');
            //..code tùy chọn
            //đăng nhập thành công thì hiển thị thông báo đăng nhập thành công
        } 
      
        else {

            dd('tài khoản và mật khẩu chưa chính xác');
            //...code tùy chọn
            //đăng nhập thất bại hiển thị đăng nhập thất bại
        }

        }

        public function authenticate(Request $request)
        { 
            
            $arr = [
                'id' => $request->id,
                'password' => $request->password,
            ];
           

            if (Auth::guard('userid')->attempt($arr))
            //if (Auth::check($arr))
            //if (Auth::attempt(['id' => $id, 'password' => $password, 'password'])) 
                // The user is active, not suspended, and exists.
            
             {
                
                dd('đăng nhập thành công');
                //..code tùy chọn
                //đăng nhập thành công thì hiển thị thông báo đăng nhập thành công
            } else {
    
                dd('tài khoản và mật khẩu chưa chính xác');
                //...code tùy chọn
                //đăng nhập thất bại hiển thị đăng nhập thất bại
            }

        }
        function checklogin1(Request $request)
        {
     
            $arr = [
                'id' => $request->id,
                'password' => $request->password,
            ];
            $userid =Userid::where('id','=', $request->id,);
            if($userid)
            {
                if(Hash::check( $request->password,$userid->password))
                {
                    dd('đăng nhập thành công');
                }
                else {
    
                    dd('mật khẩu chưa chính xác');
                    //...code tùy chọn
                    //đăng nhập thất bại hiển thị đăng nhập thất bại
                }
            }
            else {
    
                dd('tài khoản và mật khẩu chưa chính xác');
                //...code tùy chọn
                //đăng nhập thất bại hiển thị đăng nhập thất bại
            }

           }
           
    
}
