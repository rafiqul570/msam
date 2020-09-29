<?php
	session_start();
	if (! isset($_SESSION['login'])){
	header ('Location:login.php');
} ?> 


<?php

 	//$image = uniqid().date('d_m_y_H_i_s').$_FILES['image']['name'];

 	$image = uniqid().date('d_m_y_H_i_s').sha1(" ", "_", $_FILES['image']['name']);

	$fileName = '../uploads/'.$image;

	move_uploaded_file($_FILES['image']['tmp_name'], $fileName);

	$institution = $_POST['institution'];
	$name = $_POST['name'];
	$father = $_POST['father'];	
	$class = $_POST['class'];
	$roll = $_POST['roll'];
	$con = mysqli_connect('localhost','root','','sms');
	$sql = "INSERT INTO admissions VALUES(NULL,'$institution','$name','$father','$class','$roll','$image');";
	if(mysqli_query($con,$sql)) {
		
	header("Location:index.php? success= 1");
	} else {
		
	header("Location:create.php? error = 1");
	}
?>