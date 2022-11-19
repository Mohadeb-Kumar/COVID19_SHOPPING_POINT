
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
					<caption>Current Applications</caption>
						<tr>
							<th>NO</th>
							<th>NAME OF APPLICANT</th>
							<th>Gender</th>
							<th>DISTRICT</th>
							<th>FAMILY MEMBERS</th>
							<th>PHONE NO</th>
							<th>View Details</th>
							
						</tr>
						<?php
						
							$sql="SELECT* FROM applications";
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
										<td>{$r["NAME"]}</td>
										<td>{$r["GENDER"]}</td>
										<td>{$r["DISTRICT"]}</td>
										<td>{$r["FMEMBER"]}</td>
										<td>{$r["PHONE"]}</td>
										<td><a href='#?cname={aphone={$r["PHONE"]}' class='btnRemove'>View</a></td>
										
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