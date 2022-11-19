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
			
			<div class="relief_back_div">
			
			<br/>
				<div class="relief_form_div">
				<h2 class="location_h2">Application Form</h2>
					<?php
			

						if(isset($_POST["submit"]))
						{
							$target="admin/applicant_img/";
							$target_file=$target.basename($_FILES["cvcimg"]["name"]);
							if(move_uploaded_file($_FILES['cvcimg']['tmp_name'],$target_file))
							{
								$sql="INSERT INTO applications
								     (NAME,GENDER,FATHER,MOTHER,PHONE,FMEMBER,DIVISON,DISTRICT,UPOZILA,
								      SREET,APARTMENT,CHAIRPHONE,CVCIMAGE,NEIPHONE1,NEIPHONE2,NEIPHONE3) VALUES(
								'{$_POST["name"]}',
								'{$_POST["gender"]}',
								'{$_POST["father"]}',
								'{$_POST["mother"]}',
								'{$_POST["phone"]}',
								'{$_POST["fmember"]}',
								'{$_POST["division"]}',
								'{$_POST["district"]}',
								'{$_POST["upozila"]}',
								'{$_POST["street"]}',
								'{$_POST["apartment"]}',
								'{$_POST["chairphone"]}',
								'{$target_file}',
								'{$_POST["nphone1"]}',
								'{$_POST["nphone2"]}',
								'{$_POST["nphone3"]}')";
								
								if($con->query($sql)){
									echo "<div class='success'>Successfully Added....</div>";
								}
								else{
									echo "<div class='error'>Addition Failed....</div>";
								}
							}
							
						}			

					?>					
						
						
					<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>"> 
					<label class="lable_left">Basic Information:</label><br/>
					
					<input type="text" class="relief_input1" name="name" placeholder="Applicant Full Name*" required>
					
					<select name="gender" required class="relief_input_option">
				
					<option selected disabled value="">Select Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
					
					</select><br/><br/>
						
					<input type="text" class="relief_input3" name="father" required placeholder="Name of Father*">
					
					<input type="text" class="relief_input3" name="mother" required placeholder="Name of Mother*"><br/><br/>
					<input type="text" class="relief_input3" name="phone" required placeholder="Phone No*">
					<input type="number" class="relief_input2" name="fmember" required placeholder="Number of Family Members*"><br/><br/>
					
					<label class="lable_left">Address Information:</label><br/>
						
					<select name="division" required class="relief_input_option">
				
					<option selected disabled value="">Division</option>
					<option value="Rajshahi">Rajshahi</option>
					
					</select>
					
					
					
					<select name="district" required class="relief_input_option">
				
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
					<input type="text" class="relief_input2" name="upozila" required placeholder="Upozila*"><br><br>	
						
					<input type="text" class="relief_input3" name="street" placeholder="Street Address*" required>
					<input type="text" class="relief_input3" name="apartment" placeholder="Apartment/Block/House (optional)" required><br><br>
					
					<label class="lable_left">Additional Information:</label><br/>
					
					
					<input type="text" class="relief_input2" name="chairphone" required placeholder="Chirman Phone No*">
					
					<label class="required">Chairman Verified Copy:</label>
					<input type="file"  class="input3x" required name="cvcimg"><br><br>
					
					<input type="text" class="relief_input2" name="nphone1" required placeholder="Neighbour Phone No1*">
					
					<input type="text" class="relief_input2" name="nphone2" required placeholder="Neighbour Phone No2*">
					
					<input type="text" class="relief_input2" name="nphone3" required placeholder="Neighbour Phone No3*"><br/><br/>
					
					
					
					<label class="required">NID Font Image:</label>
					<input type="file"  class="input3x">
					
					<label class="required">NID Back Image:</label>
					<input type="file"  class="input3x"><br><br><br/><br/>
					
					

					<button style="margin-left:147px;" type="submit" class="confirme_order" name="submit">Submit Your Application</button>
					</form>
					
					
					
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