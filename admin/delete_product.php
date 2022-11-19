<?php
	include("dbconnection.inc.php");
	session_start();
	$sql="DELETE FROM products WHERE PID='{$_GET["pid"]}'";
	$con->query($sql);

	echo "<script>window.open('add_product.php?mes=Product Deleted','_self');</script>";



?>