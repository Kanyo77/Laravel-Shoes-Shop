<?php    

session_start();  
ob_start();
$conn=mysqli_connect("localhost","root","","perfumeshop");  
$msg="";  
if (isset($_POST['submit'])) {  
	 //echo "<pre>";  
	 //print_r($_POST);  
	 $id=mysqli_real_escape_string($conn,$_POST['id']);  
	 $password=mysqli_real_escape_string($conn,$_POST['password']);  
		$sql=mysqli_query($conn,"select * from userid where id='$id' && password='$password'");  
		$num=mysqli_num_rows($sql);  
	 if ($num>0) 
	 {  
		  //echo "found";  
		  //$row=mysqli_fetch_assoc($sql);  
		 // $_SESSION['sql']=$sql;  
		  //$_SESSION['password']=$row['password'];  
		//   //header("location:index.php"); 

		//$_SESSION['id']=$id;    
              
    //header('Location:membre.php'.$_GET['previouspage']);

		//header("location: http://unitop.vn"); 

            if($id =="admin" && $password="1" )
			{
				//return Redirect::to("http://unitop.vn");
				echo "admin";  
				//redirect_to("http://unitop.vn");
				//return redirect('http://unitop.vn');
				//header("Location:  header("location: adminpage.php");");
				//return view('Admin.admin');
				//header("Location: login.blade.php");
				//header('Location: http://127.0.0.1:8000/Login/login');
				// header("Location: https://example.com/myOtherPage.php");
                //     die();
				//return redirect()->action('${App\Http\Controllers\HomeController@index}', );
				header("Location: https://example.com/myOtherPage.php");
                    die();
			}
			else {
				echo "User"; 
				//header("Location: login.blade.php");
				//	header("location: http://unitop.vn"); 
			}



	 }else{  
		  //$msg="Please Enter Valid details !";  
		  echo "not found";
	 }  
}  
?>  
<!DOCTYPE html>  
<html>  
<head>  
	 <meta charset="utf-8">  
	 <meta name="viewport" content="width=device-width, initial-scale=1">  
	 <link rel="stylesheet" type="text/css" href="css/style.css">  
	 <title>Login Page</title>  
</head>  
<body>  
<div class="main">  
	 <div class="flex">  
		  <div class="content">  
			   <h2 class="title">Login</h2>  
			   <form method="post" action="hh">  
				@csrf
					<label for="username">Username</label>  
					<div class="box">  
						 <input type="text" name="id" placeholder="Username" class="form-control" required>  
					</div>  
					<label for="password">Password</label>  
					<div class="box">  
						 <input type="password" name="password" placeholder="Password" class="form-control" required>  
					</div>  
					<div class="btn-box">  
						 <input type="submit" name="submit" value="Login" class="btn submit-btn">  
					</div>  
					<div class="error">  
						 <?php echo $msg ?>  
					</div>  
			   </form>  
		  </div>  
	 </div>  
</div>  
</body>  
</html>  