
<?php
	include("dbconnection.inc.php");
	session_start();
	if(!isset($_SESSION["REG_CC_PHONE"]))
	{
		echo"<script>window.open('customer_login.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		
		<title>Covid19 Shopping Point</title>
		<link rel="stylesheet" href="css/style.css"/>
		
	</head>

	<body class="back">
		<div>
			<header>
			
				<?php 
					include("topbar.inc.php");
				?>
				
			</header>
			<div style="height: 1000px; margin-top: 29px;">
			
					<div class="charge_customer_order_div2">
				<h2 class="location_h2">Address Information</h2>
					<?php
						if(isset($_POST["confirm_order_location"]))
						{
							 $sql="INSERT INTO charge_customer_order_location(REG_NAME, REG_PHONE, ODR_NAME, ODR_PHONE, DIVISION, DISTRICT, UPOZILA, STREET_ADDRESS, APARTMENT, ODR_TIME, ODR_DATE) 
							 VALUES (
							 '{$_SESSION["REG_CC_NAME"]}',
							 '{$_SESSION["REG_CC_PHONE"]}',
							 '{$_POST["name"]}',
							 '{$_POST["phone"]}',
							 '{$_POST["division"]}',
							 '{$_POST["district"]}',
							 '{$_POST["upozila"]}',
							 '{$_POST["st_road"]}',
							 '{$_POST["apartment"]}',CURTIME(), CURDATE())";
							 
							  $sql2="INSERT INTO charge_order_customer_list(REG_NAME, REG_PHONE, ODR_NAME, TOTAL_ODR_PRODUCT, PRICED, ODR_DATE) 
							 VALUES (
							 '{$_SESSION["REG_CC_NAME"]}',
							 '{$_SESSION["REG_CC_PHONE"]}',
							 '{$_POST["name"]}',
							 '{$_SESSION["TOTAL_ODR_PRODUCT"]}',
							 'NO',CURDATE())";
							 
							 
							 
							  $sql3="DELETE FROM removable_customer_Order
									 WHERE REG_NAME='{$_SESSION["REG_CC_NAME"]}' AND REG_PHONE= '{$_SESSION["REG_CC_PHONE"]}'";
							 
							 
							 
							if($con->query($sql)&&$con->query($sql2)&&$con->query($sql3))
							{
								echo "<div class='success'>Order Confirm Successfully..</div>";
							}
							else
							{
								echo "<div class='error'>Order Confirm Failed..</div>";
							}
		
						}
					
					
					?>					
						
						
					<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					<input type="text" class="input_location" name="name" placeholder="Full Name*" required><br><br>	
						
					<input type="text" class="input_location2" name="phone" required placeholder="Phone No*">
					
						
					<select name="division" required class="input_location_option">
				
					<option selected disabled value="">Division</option>
					<option value="Rajshahi">Rajshahi</option>
					
					</select><br></br>	
					
					
					
					<select name="district" required class="input_location_option">
				
					<option selected disabled value="">District</option>
					<option value="Bogura">Bogura</option>
					<option value="Rajshahi">Rajshahi</option>
					<option value="Sirajgonj">Sirajgonj</option>
					<option value="Pabna">Pabna</option>
					<option value="Chapainawabganj">Chapainawabganj</option>
					<option value="Joypurjat">Joypurjat</option>
					<option value="Naogaon">Naogaon</option>
					<option value="Natore">Natore</option>
					
					</select>
					<input type="text" class="input_location2" name="upozila" required placeholder="Upozila*"><br><br>	
						
					<input type="text" class="input_location" name="st_road" placeholder="Street Address*" required><br><br>	
					<input type="text" class="input_location" name="apartment" placeholder="Apartment/Block/House (optional)" required><br><br>	

					<button type="submit" class="confirme_order" name="confirm_order_location">Confirm Your Order</button>
					</form>
					<button type="submit" class="confirme_order" name="login"><a style="color:white"; href="charge_shop_now.php">Back to Order</a></button>
					
					
					
				</div>
					
		</div>
			
			
			
			<footer>
				<?php 
					include("admin/footer.inc.php");
				?>
			
			</footer>
			
			
		</div>
	
	</body>

</html>