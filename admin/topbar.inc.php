<div class="topbar">
<div class="logo">
	<img style="width:145px; height:60px;" src="imgs/project_logo.jpg"/>
</div>
<div>
	<ul class="list">
	<?php
			if(isset($_SESSION['AID'])){  
				
				echo "<h3 class='wlc_text'>"."Welcome "."{$_SESSION["ANAME"]}"."                "."</h3>";
				echo '<li><a href="#">Settings</a></li>
					  <li><a href="logout.php">Logout</a></li>';
					  
			}
			
			else{
				echo '';
			}
	?>
		
	</ul>
	
</div>	
	
</div>