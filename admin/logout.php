<?php
	include("dbconnection.inc.php");
	session_start();
	
	unset ($_SESSION['AID']);
	unset ($_SESSION['ANAME']);

	
	session_destroy();
	echo "<script>window.open('login.php', '_self'); </script>";


?>