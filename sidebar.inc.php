<div class="sidebar"><br/>
<h3 class="h3_text">Dashbord</h3><br><hr><br> <!--hr used for horizontal line-->

<ul class="sideber_li">

	<?php
		if(isset($_SESSION['REG_CC_PHONE'])){
			
			echo '
				  <li class="li"><a href="charge_shop_now.php">Order Now</a></li>
				  <li class="li"><a href="charge_customer_details.php">My Order</a></li>
				  <li class="li"><a href="#">Products Price</a></li>

				  <li class="li"><a href="index.php">Logout</a></li>';
		}
	
	
	?>

</ul>
</div>