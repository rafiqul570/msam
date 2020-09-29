<?php
	session_start();
	if (! isset($_SESSION['login'])){
	header ('Location:login.php');
} ?> 


<?php 
	$name = $_POST['name'];
	$class = $_POST['class'];
	$roll = $_POST['roll'];	
	$gpa = $_POST['gpa'];
	include('../include/connect.php');
	$con = connectBD();
	$sql = "INSERT INTO results VALUES(NULL,'$name','$class','$roll','$gpa');";
	if(mysqli_query($con,$sql));
?>