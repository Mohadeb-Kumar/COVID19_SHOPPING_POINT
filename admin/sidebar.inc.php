<div class="sidebar"><br/>
<h3 class="h3_text">Dashbord</h3><br><hr><br> <!--hr used for horizontal line-->

<ul class="sideber_li">

	<?php
		if(isset($_SESSION['AID'])){
			
			echo '
				  <li style="background:#b9b7b7;" class="li">---Charge Section---</li>
				  <li class="li"><a href="index.php">Current Orders</a></li>
				  <li class="li"><a href="add_product.php">Add Product</a></li>
				  <li class="li"><a href="delivery_status.php">Delivery Status</a></li>

				  <li style="background:#b9b7b7;" class="li">---Relief Section---</li>
				  <li class="li"><a href="applications.php">Applications</a></li>
				  <li class="li"><a href="#">Granted Applications</a></li>

				  <li class="li"><a href="#">Relief Orders</a></li>
				  <li class="li"><a href="#">Delivery Status</a></li>';
		}
	
	
	?>

</ul>
</div>