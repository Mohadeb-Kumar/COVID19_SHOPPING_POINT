<?php
	include("dbconnection.inc.php");
	session_start();
	$sql="DELETE FROM charge_customer_order 
	WHERE REG_NAME='{$_GET["name"]}' AND REG_PHONE='{$_GET["phone"]}' AND PRODUCT_NAME='{$_GET["product_name"]}' AND QUANTITY='{$_GET["quantity"]}' AND UNIT='{$_GET["unit"]}'";
	
	$sql2="DELETE FROM removable_customer_order 
	WHERE REG_NAME='{$_GET["name"]}' AND REG_PHONE='{$_GET["phone"]}' AND PRODUCT_NAME='{$_GET["product_name"]}' AND QUANTITY='{$_GET["quantity"]}' AND UNIT='{$_GET["unit"]}'";
	
	if($con->query($sql)&&$con->query($sql2)){
		echo "<script>window.open('charge_shop_now.php?mes=Product Removed','_self');</script>";
	}

	



?>