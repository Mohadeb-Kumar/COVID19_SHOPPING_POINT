
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
			<div style="height: 1000px;">
			
			<?php 
					include("sidebar.inc.php");
				?>
			
			<div class="charge_customer_order_div">
				<h2 class="charge_reg_h2">Write Product</h2>
					<?php
						if(isset($_POST["add_product"]))
						{
							 $sql="INSERT INTO charge_customer_order(REG_NAME,REG_PHONE,PRODUCT_NAME,QUANTITY,UNIT) 
							 VALUES ('{$_SESSION["REG_CC_NAME"]}','{$_SESSION["REG_CC_PHONE"]}','{$_POST["product_name"]}','{$_POST["quantity"]}','{$_POST["unit"]}')";
							 
							 $sql2="INSERT INTO removable_customer_Order(REG_NAME,REG_PHONE,PRODUCT_NAME,QUANTITY,UNIT) 
							 VALUES ('{$_SESSION["REG_CC_NAME"]}','{$_SESSION["REG_CC_PHONE"]}','{$_POST["product_name"]}','{$_POST["quantity"]}','{$_POST["unit"]}')";
							 
							if($con->query($sql)&&$con->query($sql2))
							{
								echo "<div class='success'>Product Added Successfully..</div>";
							}
							else
							{
								echo "<div class='error'>Product Adding Failed..</div>";
							}
		
						}
					
					
					?>					
						
						
					<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					<input type="text" class="input4" name="product_name" placeholder="Product Name*" required><br><br>	
						
					<input type="text" class="input5" name="quantity" required placeholder="Quantity*">
					
						
					<select name="unit" required class="option_in">
				
					<option selected disabled value="">Unit</option>
					<option value="Kilogram(Kg)">Kilogram (Kg)</option>
					<option value="Gram(g)">Gram (G)</option>
					<option value="Litter(L)">Litter (L)</option>
					<option value="Pices(P)">Pices (P)</option>
					
					</select><br></br>	
						

					<button type="submit" class="add_product_btn" name="add_product">Add Product</button>
					</form>
					
					
					
					</div>
					
			 <div class="added_product_div">
						<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?><br/>
					<table style="width: 607px;" border="1px">
					<caption>Producs Order List</caption>
						<tr>
							<th>NO</th>
							<th>PRODUCT NAME</th>
							<th>QUANTITY</th>
							<th>REMOVE</th>
						</tr>
						<?php
						
							$sql="SELECT* FROM removable_customer_Order
								  WHERE REG_NAME='{$_SESSION['REG_CC_NAME']}' AND REG_PHONE='{$_SESSION['REG_CC_PHONE']}' ";
							$res=$con->query($sql);
							/*echo $res->num_rows;*/
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									$_SESSION["TOTAL_ODR_PRODUCT"]=$i;
									echo"
									<tr>
										<td>{$i}</td>
										<td>{$r["PRODUCT_NAME"]}</td>
										<td>{$r["QUANTITY"]} {$r["UNIT"]}</td>
										<td><a href='remove_cc_product.php?name={$r["REG_NAME"]} && phone={$r["REG_PHONE"]} && product_name={$r["PRODUCT_NAME"]} && quantity={$r["QUANTITY"]} && unit={$r["UNIT"]}' class='btnRemove'>Remove</a></td>
									</tr>
									
									";
								}
							}
						
						
						
						?>
						
						</table><br/>
						<button type="submit" class="confirme_order" name="login"><a style="color:white"; href="charge_add_location.php">Add Address Information</a></button>
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