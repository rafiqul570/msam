
<?php

 	$image = uniqid().date('d_m_y_H_i_s').sha1(" ", "_", $_FILES['image']['name']);

	$fileName = '../uploads/'.$image;

	move_uploaded_file($_FILES['image']['tmp_name'], $fileName);

	$institution = $_POST['institution'];
	$teacher = $_POST['teacher'];
	$father = $_POST['father'];	
	$index_no = $_POST['index_no'];
	$con = mysqli_connect('localhost','root','','sms');
	$sql = "INSERT INTO teachers VALUES(NULL,'$institution','$teacher','$father','$index_no','$image');";
	if(mysqli_query($con,$sql)) {
		
	header("Location:index.php? success= 1");
	} else {
		
	header("Location:create.php? error = 1");
	}
?>