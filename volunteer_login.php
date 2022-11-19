<?php
	include("dbconnection.inc.php");
	session_start();
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
			
			<div class="charge_customer_back_div">
			
			<br/>
				<div class="customer_log_div">
				<h2 class="charge_reg_h2">Volunteer Login</h2>
					<?php
				if(isset($_POST["login"]))
				{
					$sql="SELECT* FROM charge_customer_reg 
						  WHERE REG_PHONE='{$_POST["phone"]}' AND PASSWORD='{$_POST["pass"]}'";
						  
					$run=$con->query($sql);	//Storing row info according to SQL statement
					if($run->num_rows>0)	//Checking, is row founded more than zero?
					{
						$row=$run->fetch_assoc(); //Fetching row info as associative array
						$_SESSION["REG_CC_NAME"]=$row["REG_NAME"];	//Assigning desired row info to the "$_SESSION" global variable 
						$_SESSION["REG_CC_PHONE"]=$row["REG_PHONE"];
						
						echo "<script>
									window.open('charge_shop_now.php','_self'); //Open new window or linked page
							  </script>";
					}
					else
					{
						echo "<div class='error'>Invalid Phone No or Password</div>";
					}
					
				}
				if(isset($_GET["mes"]))
				{
					echo "<div class='error'>{$_GET["mes"]}</div>";
				}
				
			?>					
						
						
					<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					<input type="text" class="input3" name="phone" required placeholder="Phone No*"><br><br>
						
					<input type="password" id="password" class="input3" name="pass"  required placeholder="Password*" ><br><br>
					
					<input style="margin-left: 5px;" type="checkbox" id="toggle_password"/>
					<label style="font-size:13px; color:white;" for="toggle_password">Show Password</label>
					
					<script>
							const password = document.getElementById("password");
							const togglePassword = document.getElementById("toggle_password");
							togglePassword.addEventListener("click", toggleClicked);
							function toggleClicked() {
							if (this.checked) {
							password.type = "text";
							} else {
							password.type = "password";
							}
							}
							
					</script><br><br>

					<button type="submit" class="reg_btn" name="login">Login as Volunteer</button>
					</form>
					
					<br/>
					<label class="reg_lable">Don't have an account?<a href="volunteer_reg.php"> Registration Now</a></label><br>
					
					
					
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