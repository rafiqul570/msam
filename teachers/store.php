
<?php

 	$image = uniqid().date('d_m_y_H_i_s').sha1(" ", "_", $_FILES['image']['name']);

	$fileName = '../uploads/'.$image;

	move_uploaded_file($_FILES['image']['tmp_name'], $fileName);

	$teacher = $_POST['teacher'];
	$father = $_POST['father'];	
	$posts = $_POST['posts'];
	$index_no = $_POST['index_no'];
	$birth = $_POST['birth'];
	$f_join = $_POST['f_join'];
	$s_code = $_POST['s_code'];
	$p_join = $_POST['p_join'];
	$mpo = $_POST['mpo'];
	$nid = $_POST['nid'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$s_year = $_POST['s_year'];
	$s_division = $_POST['s_division'];
	$s_board = $_POST['s_board'];
	$h_year = $_POST['h_year'];
	$h_division = $_POST['h_division'];
	$h_board = $_POST['h_board'];
	$b_year = $_POST['b_year'];
	$b_division = $_POST['b_division'];
	$b_board = $_POST['b_board'];
	$m_year = $_POST['m_year'];
	$m_division = $_POST['m_division'];
	$m_board = $_POST['m_board'];
	$con = mysqli_connect('localhost','root','','sms');
	$sql = "INSERT INTO teachers VALUES(NULL,'$teacher','$father','$posts','$index_no','$birth','$f_join','$s_code','$p_join','$mpo','$nid','$phone','$email','$s_year','$s_division','$s_board','$h_year','$h_division','$h_board','$b_year','$b_division','$b_board','$m_year','$m_division','$m_board','$image');";
	if(mysqli_query($con,$sql)) {
		
	header("Location:index.php? success= 1");
	} else {
		
	header("Location:create.php? error = 1");
	}
?>
