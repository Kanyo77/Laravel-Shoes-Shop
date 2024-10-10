@extends('Frontend.layouts.main')
@section('main-container')

/*
<?php   

session_start();  
$conn=mysqli_connect("localhost","root","","Shoesshop");  
$id=$_SESSION['id'];
$query1 = "SELECT * FROM donhang where makhachhang='$id'";
if(isset( $_SESSION['id'])){



echo "Chao mung ".$id;

}

else{
    echo " Khong tim thay";
  }
?>

    <div class="hero-wrap hero-bread" style="background-image: {{url('Frontend/images/bg_6.jpg')}};">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Wishlist</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
				
								<th>Sản phẩm</th>
								<th>Sản phẩm</th>
						        <th>Giá</th>
						        <th>Số lượng</th>
						        <th>Tổng Giá</th>
						      </tr>
						    </thead>					
								<tbody>
								   <?php 
									 $select_user = mysqli_query($conn, "SELECT * FROM `donhang` WHERE makhachhang= '$id'") ;
									 $grand_total = 0;
									 if(mysqli_num_rows($select_user) > 0){
										
										while($fetch_cart = mysqli_fetch_assoc($select_user))
										{  
											$id_cart=$fetch_cart['madonhang'];
										?>
										<tr class="text-center">
										 <td class="product-remove"><a href="<?php echo base_url('delete-to-cart/'.$SP['makhachhang']);?>"><span class="ion-ios-close"></span></a></td>
										 
										 <td >
											<?php echo $fetch_cart['madonhang']?>

										 </td>
										 <td class="image-prod"> <img src=<?="public/Frontend/images/".$SP['hienthi'] ?> class="img-fluid" alt="Colorlib Template"></td>
										
										 <td class="product-name">
											<h3><?php echo $fetch_cart['tensanpham']?></h3>
											<p><?php echo $fetch_cart['mathuonghieu']?></p>
										 </td>
										 
										 <td class="price"><?php echo $fetch_cart['dongia']?></td>
										 
										 <td class="quantity">
											<div class="input-group mb-3">
											 <input type="text" name="quantity" class="quantity form-control input-number" value="<?php echo $fetch_cart['soluong'];?> " max="100">
										   </div>
										</td>
			
										 <td class="total"><?php echo $sub_total = ($fetch_cart['dongia'] * $fetch_cart['soluong']); ?></td>
										</tr><!-- END TR-->
									  </tbody>
									  <?php  
									  // VONG LAP CART O DAY
								  }
								}						 
								?>
							
							
						
							  
							  </tbody>

						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-start">
    			<div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
						<form method="POST" action="" enctype="multipart/form-data">
							@csrf
						<?php
 $grand_total += $sub_total;
 $Thue = $sub_total* 0.001;
 $Tong = $Thue +  $grand_total;
                         ?>
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>
								<?php echo  $grand_total?>
						
								
							</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>
							
								<?php echo  $Thue ?>
							</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>00.00</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span><?php echo  $Tong?></span>
    					</p>
    				</div>
					{{-- <input type="hidden" value="grand_total" name="grand_total"> --}}
					<input type="hidden" value="Thue" name="Thue ">
					<input type="hidden" value="grand_total" name="grand_total">
					<input type="hidden" value="Tong" name="Tong">
    				{{-- <p class="text-center"><a href="{{route('cart.checkout',$fetch_cart['id_cart'])}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p> --}}
					<p class="text-center"> <button type="submit" class="btn btn-primary py-3 px-4">Proceed to Checkout</button></p>
    			</div> 
				
			

			</form>
    		</div>
			</div>
		</section>
		

    
  
		
  

  
    
	