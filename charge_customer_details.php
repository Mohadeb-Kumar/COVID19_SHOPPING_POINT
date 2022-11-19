
<?php
	include("dbconnection.inc.php");
	session_start();
	if(!isset($_SESSION["REG_CC_PHONE"]))
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
				<h1 style="    margin-left: 495px;
    margin-top: -638px;" ><br>Customer Details & Location</h1>
				
				
				
				

					
			<div>
			
			<?php
				
				
				$_SESSION["cname"]=$_SESSION["REG_CC_NAME"];
				$_SESSION["cphone"]=$_SESSION["REG_CC_PHONE"];

			
			
			
			
			$sql="SELECT* FROM charge_customer_reg WHERE REG_NAME='{$_SESSION["cname"]}' && REG_PHONE='{$_SESSION["cphone"]}'";
				$res=$con->query($sql);

				if($res->num_rows>0)
				{
					$row=$res->fetch_assoc();
				}
				
				
				$sql2="SELECT* FROM charge_customer_order_location WHERE REG_NAME='{$_SESSION["cname"]}' && REG_PHONE='{$_SESSION["cphone"]}'";
				$res2=$con->query($sql2);

				if($res2->num_rows>0)
				{
					$row2=$res2->fetch_assoc();
				}
				
			?>
		
				<div class="rbox1">
					<br/>
						<table border="1px" class="desired_result1">
						<caption>Basic Details</caption>
							<tr class="table_row_style"><th>Name </th> <td style="font-weight:bold"><?php echo $row["REG_NAME"] ?> </td></tr>
							<tr class="table_row_style"><th>Pnone No</th> <td><?php echo $row["REG_PHONE"] ?> </td></tr>
							<tr><th>Address</th> <td><?php echo $row["ADDRESS"] ?>  </td></tr>
							
						</table>
				</div>
				
				
				<div class="rbox2">
					<br/>
						<table border="1px" class="desired_result2">
						<caption>Location Details</caption>
							<tr><th>Name </th> <td><?php echo $row2["ODR_NAME"] ?> </td></tr>
							<tr><th>Phone No </th> <td><?php echo $row2["ODR_PHONE"] ?> </td></tr>
							<tr><th>Division</th> <td><?php echo $row2["DIVISION"] ?> </td></tr>
							<tr><th>District</th> <td><?php echo $row2["DISTRICT"] ?>  </td></tr>
							<tr><th>Upozila</th> <td><?php echo $row2["UPOZILA"] ?>  </td></tr>
							<tr><th>Street Address</th> <td><?php echo $row2["STREET_ADDRESS"] ?>  </td></tr>
							<tr><th>Apartment</th> <td><?php echo $row2["APARTMENT"] ?>  </td></tr>
							<tr><th>Order Date</th> <td><?php echo $row2["ODR_DATE"] ?>  </td></tr>
							<tr><th>Order Time</th> <td><?php echo $row2["ODR_TIME"] ?>  </td></tr>
						</table>
				</div>
		</div>
					
					<div class="products_info_div">
					<!--<h3> Course-Wise Details</h3><br>-->
						<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?><br/>
					<table style="width: 802px; text-align:center;margin-left: 220px;
    margin-top: 212px;" border="1px">
					<caption>Products Order List</caption>
						<tr>
							<th>NO</th>
							<th>Product Name</th>
							<th>MRP (TK)</th>
							<th>Quantity</th>
							<th>Price</th>
							
						</tr>
						<?php
						
							$sql3="SELECT* FROM charge_customer_order
								  WHERE REG_NAME='{$_SESSION["cname"]}' && REG_PHONE='{$_SESSION["cphone"]}'";
							$res3=$con->query($sql3);
							if($res3->num_rows>0)
							{
								$i=0;
								while($row3=$res3->fetch_assoc())
								{
									$i++;
									echo"
									<tr>
										<td>{$i}</td>
										<td>{$row3["PRODUCT_NAME"]}</td>
										<td>{$row3["MRP"]} TK</td>
										<td>{$row3["QUANTITY"]} {$row3["UNIT"]}</td>
										<td>{$row3["MRP"]}</td>
										
										
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
					//include("footer.inc.php");
				?>
			
			</footer>
			
			
		</div>
	
	</body>

</html>