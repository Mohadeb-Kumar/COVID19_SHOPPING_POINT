<?php
	include("dbconnection.inc.php");
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
			
			<div class="banner_div">
			
				<div class="charge_order_btn">
					<a href="customer_login.php">Charge Shop Now</a>
				</div>
				
				<div class="relief__order_btn">
					<a href="relief_reg.php">Relief Shop Now</a>
				</div>
			
			</div>
			
			<br/>
			<br/>
			<br/>
			<br/>
			<br/>
			
			<table style="width: 1180px; text-align:center;  margin-top: 100px; margin:0 auto;background:#dff0ff;" border="1px">

					<caption>Products List and Price</caption>
						<tr>
							<th>NO</th>
							<th>PRODUCT NAME</th>
							<th>IMAGE</th>
							<th>M.R.P(TK)</th>
						</tr>
						<?php
						
							$sql="SELECT* FROM products";
							$res=$con->query($sql);
							if($res->num_rows>0)
							{
								while($r=$res->fetch_assoc())
								{
									echo"
									<tr>
										<td>{$r["PID"]}</td>
										<td>{$r["PNAME"]}</td>
										<td style='text-align:center;'><img src='{$r["PIMAGE"]}' height='100' width='150' alt='upload Pending'></td>
										<td>{$r["PPRICE"]}TK/Unit</td>
										
										
									</tr>
									
									";
								}
							}
						
						
						
						?>
						
						</table><br/>
			
			
			

				<footer>
				<?php 
					include("admin/footer.inc.php");
				?>
			
			</footer>
			
			
			
		</div>
	
	</body>

</html>