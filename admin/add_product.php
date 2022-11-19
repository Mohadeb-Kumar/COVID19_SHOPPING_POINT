
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
					<div class="add_marks_div1"> <!--add_student left div-->
					
					<?php
			

						if(isset($_POST["submit"]))
						{
							$target="product_img/";
							$target_file=$target.basename($_FILES["pimage"]["name"]);
							if(move_uploaded_file($_FILES['pimage']['tmp_name'],$target_file))
							{
								$sql="INSERT INTO products(PNAME,PIMAGE,PPRICE) VALUES(
								'{$_POST["pname"]}',
								'{$target_file}',
								'{$_POST["pprice"]}')";
								
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
	
				
					<input type="text" name="pname"" class="product_name_input" required placeholder="Full Poduct Name*">
					
					
					<input type="number" class="product_price_input" name="pprice" required placeholder="Product Price*">
					
					
					<input style="margin-left:10px;" type="file" required name="pimage"><br/><br/><br/><br/>
					
					<button type="submit" class="add_marks_btn" name="submit">Submit</button>
					</form>
					
					
										<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?><br/><br/>
					
				</div><br/><br/><br/><br/><br/>
					<!--<h3> Course-Wise Details</h3><br>-->
						
					<table style="width: 802px; text-align:center;  margin-top: 100px;" border="1px">

					<caption>Products List</caption>
						<tr>
							<th>NO</th>
							<th>PRODUCT NAME</th>
							<th>IMAGE</th>
							<th>M.R.P(TK)</th>
							<th>UPDATE</th>
							<th>DELETE</th>
							
						</tr>
						<?php
						
							$sql="SELECT* FROM products";
							$res=$con->query($sql);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									echo"
									<tr>
										<td>{$r["PID"]}</td>
										<td>{$r["PNAME"]}</td>
										<td style='text-align:center;'><img src='{$r["PIMAGE"]}' height='70' width='70' alt='upload Pending'></td>
										<td>{$r["PPRICE"]}TK/Unit</td>
										<td><a href='#' class='btnUpdate'>Update</a></td>
										<td><a href='delete_product.php?pid={$r["PID"]}' class='btnRemove'>Delete</a></td>
										
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