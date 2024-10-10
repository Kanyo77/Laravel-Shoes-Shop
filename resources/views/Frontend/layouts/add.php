
<tbody>

<tr class="text-center">
  <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
  
  <td class="image-prod"><div class="img" style="background-image:url(images/product-3.jpg);"></div></td>
  <?php 
$select_user = mysqli_query($conn, "SELECT * FROM `cart` WHERE id = '$id'") ;
if(mysqli_num_rows($select_user) > 0){
echo "Chao mung ".$id;
}
else {
echo "Chao mung khong tim thay ";
}
?>	
  <td class="product-name">
     <h3>Nike Free RN 2019 iD</h3>
     <p>Far far away, behind the word mountains, far from the countries</p>
  </td>
  
  <td class="price">$4.90</td>
  
  <td class="quantity">
     <div class="input-group mb-3">
       <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
    </div>
 </td>
  
  <td class="total">$4.90</td>
</tr><!-- END TR-->
  
    

</tbody>



<tbody>
   <?php 
     $select_user = mysqli_query($conn, "SELECT * FROM `cart` WHERE id = '$id'") ;
     $grand_total = 0;
     if(mysqli_num_rows($select_user) > 0){
        echo "Chao mung ".$id;
        while($fetch_cart = mysqli_fetch_assoc($select_user))
        {  
        ?>
        <tr class="text-center">
         <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
         
         <td class="image-prod"> <img src="public/Frontend/images/<?php echo $fetch_cart['image']?>" alt=""></td>
        
         <td class="product-name">
            <h3><?php echo $fetch_cart['name']?></h3>
            <p><?php echo $fetch_cart['category']?></p>
         </td>
         
         <td class="price"><?php echo $fetch_cart['price']?></td>
         
         <td class="quantity">
            <div class="input-group mb-3">
             <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
           </div>
        </td>
         
         <td class="total"><?php echo $fetch_cart['price']?></td>
        </tr><!-- END TR-->

      
      <?php
        }
      }
   
      ?>
      </tbody>


      