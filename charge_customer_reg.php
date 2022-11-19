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
			
			<div class="charge_customer_back_div">
			
			<br/>
				<div class="charge_customer_reg_div">
				<h2 class="charge_reg_h2">Charge Customer Registration</h2>
					<?php
						if(isset($_POST["registration"]))
						{
							 $sql="INSERT INTO charge_customer_reg(REG_NAME,REG_PHONE,ADDRESS,PASSWORD) 
							 VALUES ('{$_POST["name"]}','{$_POST["phone"]}','{$_POST["address"]}','{$_POST["pass"]}')";
							if($con->query($sql))
							{
								echo "<div class='success'>Registration Success..</div>";
							}
							else
							{
								echo "<div class='error'>Registration Failed..</div>";
							}
		
						}
					
					
					?>					
						
						
					<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					
					<input type="text" class="input3" name="name" placeholder="Full Nme*" required><br><br>	
						
					<input type="text" class="input3" name="phone" required placeholder="Phone No*"><br><br>

					<input type="text" class="input3" name="address" required placeholder="Address (Upozila, District)*"><br><br>	
						
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

					<button type="submit" class="reg_btn" name="registration">Registation as Charge Customer</button>
					</form>
					
					<br/>
					<label class="reg_lable">Have already an account?<a href="customer_login.php"> Login here</a></label><br>
					
					<label class="reg_lable"> Do you want apply for Relief?<a href="relief_reg.php"> Click here</a></label><br>
					
					
					
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