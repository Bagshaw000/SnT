<?php

// require_once("../settings/core.php");
 require_once("../controllers/cart_controller.php");
// require_once("../controllers/user_controller.php");
// require_once("../controllers/book_controller.php");
require_once("../functions/function_store.php");





?>


<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Flat Cart Widget  Responsive Widget Template | Home :: w3layouts</title>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<link href="signup/css/cart.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Cart Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--google fonts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- <script src="js/jquery-1.11.0.min.js"></script> -->
<script src="signup/js/cart.js"></script>

<!-- 

<script>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.cake-top').fadeOut('slow', function(c){
	  		$('.cake-top').remove();
		});
	});	  
});
</script>

<script>$(document).ready(function(c) {
	$('.close-btm').on('click', function(c){
		$('.cake-bottom').fadeOut('slow', function(c){
	  		$('.cake-bottom').remove();
		});
	});	  
});
</script> -->
</head>
<body>
<!-- <div class="logo">
	<h3>Checkout Page</h3>
</div> -->
<div class="header-bottom-right">

					<!-- <script src="../js/auth.js"></script> -->
					<?php
                    session_start();
	

					// echo get_cart_by_ip_ctrl(get_user_ip());
					// if (is_user_signed_in()) {
					// 	$data=get_cart_total_price_ctrl($_SESSION["user_id"]);
					// 	$item_data= get_every_item_price_ctrl($_SESSION["user_id"]);
					
				?>

					<div class="clearfix"> </div>
				</div>
<div class="cart" >
   <div class="cart-top" >
   	  <div class="cart-experience">
   	  	 <h4>Cart Page</h4>
   	  </div>
   	  <div class="cart-login">
   	  	 <div class="cart-login-img">
   	  	 	<!-- <img src="images/loggin_man.png"> -->
   	  	 </div>
   	  	 <div class="cart-login-text">
   	  	 	
   	  	 </div> 	
   	  	  <!-- <div class="lang_list">
				<select tabindex="4" class="dropdown">
					<option value="" class="label" value="">This is looking great</option>
					<option value="1">Many variations</option>
					<option value="2">Ipsum is simply</option>
					<option value="3">Nemo enim ipsam</option>
				</select>
			 </div>  	  -->
   	  	 <div class="clear"> </div>
   	  </div>
   	 <div class="clear"> </div>
   </div>
   <div class="cart-bottom">
   	 <div class="table">
   	 	<table style="margin-right:auto; margin-left:auto">
   	 		<tbody style="text-align:center">
   	 	      <tr  class="main-heading" style="border:0px" >	  	      	
		 			<th><b>Name</b></th>
		 			<th class="long-txt"><b>Product Description</b></th>
		 			<th><b>Quantity</b></th>
		 			<th><b>Price</b></th>
		 			<th><b>Total</b></th> 	
                  			 	
   	 	     </tr>
			 <?php
       
            $total = select_total_price_ctr($_SESSION['uid']);
            $item_data=select_prod_cart_ctr($_SESSION['uid']);
    
			 foreach($item_data as $item){
			 ?>
   	 	     <tr class="cake-top" style="border:0px">
   	 	     	<td class="cakes">	 	     	  
   	 	     		<div class="product-img">
   	 	     			<h3><?php echo $item['p_name']?></h3>
   	 	     		</div>
   	 	        </td>
   	 	        <td class="cake-text">
   	 	     		<div class="product-text">
   	 	     			<h3><?php
                          echo($item["p_desc"]); ?></h3>
   	 	     			
   	 	     		</div>
 	     	    </td>
 	     	    <td class="quantity"> 	 	     	 
   	 	     	  <div class="product-right">
   	 	     	  	 <input min="1" type="number" id="quantity" name="quantity" value="<?php echo($item["qty"]) ?>" class="form-control input-small">				  
   	 	     	  </div>
   	 	     	</td>
   	 	     	<td class="price">
   	 	     		<h4><?php 
                     echo("GHC"); echo($item["p_price"]); ?></h4>	 	     		
   	 	     	</td>
   	 	     	<td class="top-remove">
   	 	     		<h4><?php echo("GHC"); echo($item["p_price"] * $item["qty"]); ?></h4>
                         <div class="close">
						<button type="button" class="update" onclick="updateCart('<?php echo $item['p_id']?>')">Update</button>
						&nbsp;
						<button type="button" class="remove" onclick="removeCart('<?php echo $item['p_id']?>')">Remove</button>
                   </div>
                   
   	 	     	</td>
  	 	     	
   	 	     </tr>
             

			 <?php }?>
`
   	 	   </tbody>
   	 	</table>
   	 </div>
   	 <div class="vocher">
   	 	
   	 	<div class="dis-total">
   	 		<h1>Total GHC <?php 
              echo $total["SUM(product.p_price * cart.qty)"] ?></h1>
   	 		<div class="tot-btn">
   	 			<a class="shop" href="index.php">Back to Shop</a>
   	 			<a class="check" href="checkout.php">Continue to Checkout</a>
   	 		</div>
   	 	</div>
   	   <div class="clear"> </div>
   	 </div>
   </div>
</div>
<?php 	
// } else {
// 				header('Location: index.php');	
// 					}
				
					?>
<div class="copy-right">
			<!-- <p>© 2016 Flat Cart Widget. All rights reserved | Template by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p> -->
</div>

</body>
</html>
