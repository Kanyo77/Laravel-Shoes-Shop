
<?php   
session_start();  
$conn=mysqli_connect("localhost","root","","perfumeshop");  
$msg="";  
if (isset($_POST['submit'])) {   
	 $id=mysqli_real_escape_string($conn,$_POST['id']);  
	 $password=mysqli_real_escape_string($conn,$_POST['password']);  
	 $sql=mysqli_query($conn,"select * from userid where id='$id' && password='$password'");  
	 $sql1=mysqli_query($conn,"select * from userid where id='$id' ");  
	 $num=mysqli_num_rows($sql);  
	 if ($num>0) 
	 {  
		  
		$_SESSION['id']=$id;
			if($id =="admin" && $password="1" )
			{

				header("Location: http://localhost:89/CI4/public/Log/admin");
                    die();
			}
			else {
				
				header("Location: http://localhost:89/CI4/public/home");
                    die();
			}
	 }else{  

		  echo "Tài khoản mật khẩu không chính xác";
	 }  
}  
?>  

<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{url('Login/css/style.css')}}">

	</head>
	<body class="img js-fullheight" style="background-image: url(Login/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #10</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>


				  @if ($errors->any())
				  <div class="bg-red-200 p-3">
					<ul>
						@foreach($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
				  </div>
				  @endif
		      	<form method="post"   action=""        class="signin-form">
					@csrf
                    
		      		<div class="form-group">
		      			<input  type="text" name="id"  class="form-control" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input   name="password" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="submit" value="Login" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>
    
	<script src="{{url('Login/js/jquery.min.js')}}"></script>
  <script src="{{url('Login/js/popper.js')}}"></script>
  <script src="{{url('Login/js/bootstrap.min.js')}}"></script>
  <script src="{{url('Login/js/main.js')}}"></script>

	</body>
</html>

