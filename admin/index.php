
<?php
	include("dbconnection.inc.php");
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('login.php?mes=Access Denied..','_self');</script>";
		
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

					
					<div class="added_product_div">
					<!--<h3> Course-Wise Details</h3><br>-->
						<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?><br/>
					<table style="width: 802px; text-align:center;" border="1px">
					<caption>Current Orders List</caption>
						<tr>
							<th>NO</th>
							<th>CUSTOMER NAME</th>
							<th>TOTAL PRODUCTS</th>
							<th>ODER DATE</th>
							<th>View Details</th>
							
						</tr>
						<?php
						
							$sql="SELECT* FROM charge_order_customer_list";
							$res=$con->query($sql);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo"
									<tr>
										<td>{$i}</td>
										<td>{$r["ODR_NAME"]}</td>
										<td>{$r["TOTAL_ODR_PRODUCT"]} Pice(s)</td>
										<td>{$r["ODR_DATE"]}</td>
										<td><a href='charge_customer_details.php?cname={$r["REG_NAME"]} && cphone={$r["REG_PHONE"]}' class='btnRemove'>View</a></td>
										
									</tr>
									
									";
								}
							}
						
						
						
						?>
						
						</table><br/>
						
					</div>
					
					</div>
				
				
			
			<footer>
				<?php 
					include("footer.inc.php");
				?>
			
			</footer>
			
			
		</div>
	
	</body>

</html>