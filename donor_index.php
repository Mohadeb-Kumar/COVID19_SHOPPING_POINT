
<?php
	include("dbconnection.inc.php");
	session_start();
	/*if(!isset($_SESSION["REG_CC_PHONE"]))
	{
		echo"<script>window.open('customer_login.php?mes=Access Denied..','_self');</script>";
		
	}	*/	
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
					include("donor_sidebar.inc.php");
				?>
			
			
			
					
			</div>
			
			
			
			<footer>
				<?php 
					include("admin/footer.inc.php");
				?>
			
			</footer>
			
			
		</div>
	
	</body>

</html>