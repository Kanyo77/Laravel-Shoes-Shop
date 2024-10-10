<?php   

// session_start();  
$conn=mysqli_connect("localhost","root","","perfumeshop");  

if(isset( $_SESSION['id'])){

  $id=$_SESSION['id'];
  $query1 = "SELECT * FROM cart where id='$id'";
echo "Chao mung ".$id;

}

else{
    echo " Khong tim thay";
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Perfume Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{url('Frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('Frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{url('Frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('Frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('Frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{url('Frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{url('Frontend/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{url('Frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('Frontend/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{url('Frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('Frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{url('Frontend/css/style.css')}}">
  </head>
  <body class="goto-here">
		
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{url('/home')}}">Perfume Shop</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{url('/home')}}" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="{{url('/Catalog/shop')}}">Shop</a>

				  <?php 
				  if(isset( $_SESSION['id'])){
				?>
				<a class="dropdown-item" href="{{url('/Catalog/cart')}}">Cart</a>
				<?php
				  }
				  else
				  {
					
					?>
						<a class="dropdown-item" href="">Hãy đăng nhập để vào giỏ hàng</a>
					
					<?php
				  }
				?>
                
				
				<a class="dropdown-item" href="{{url('/Catalog/checkout')}}">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About</a></li>
	          {{-- <li class="nav-item"><a href="{{url('/accout')}}" class="nav-link">Accout</a></li> --}}
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
				<div class="dropdown-menu" aria-labelledby="dropdown04">
					<a class="dropdown-item" href="{{url('/Login/login')}}">Login</a>
					<a class="dropdown-item" href="{{url('/Login/register')}}">Register</a>
				  <a class="dropdown-item" href="{{url('/Login/logout')}}">Logout</a>
				  {{-- <a class="dropdown-item" href="{{url('/Catalog/checkout')}}">Checkout</a> --}}
				</div>
			  </li>
	          <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
			  <?php 
				  if(isset( $_SESSION['id'])){
				?>
	          <li class="nav-item cta cta-colored"><a href="{{url('/Catalog/cart')}}" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
			  <?php
			}
			else
			{
			  
			  ?>
				   <li class="nav-item cta cta-colored"><a href="{{url('/Login/login')}}" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
			  
			  <?php
			}
		  ?>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  