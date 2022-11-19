<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='covid19_shopping_point';

$con=mysqli_connect($hostname, $username, $password) or die('Database Connection Error!!');

mysqli_select_db($con, $dbname);

?>