<?php
 session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


//---------------------------------//
if ($password!= $confirm_password) {
$_SESSION['error'] = "password and confirm_password didn't match";
header('Location:registration.php');
}

//--------------------------------//

include('../include/connect.php');
$con = connectBD();
$sql1 = "SELECT *FROM users WHERE email='$email'";
$result = mysqli_query($con,$sql1);
$rowcount = mysqli_num_rows($result);
if ($rowcount == 1) {
$_SESSION['error_msg'] = "Account already exist Please login";
header('Location:registration.php');
//--------------------------------------//
}else{
$image = uniqid().date('d_m_y_H_i_s').sha1(" ", "_", $_FILES['image']['name']);

	$fileName = '../uploads/'.$image;

	move_uploaded_file($_FILES['image']['tmp_name'], $fileName);

$password = sha1($password);

$sql = "INSERT INTO users VALUES(NULL,'$name','$email','$password','$image')";
if (mysqli_query($con,$sql)) {
$_SESSION['reg_msg'] = "Registration successfully. Please login";
header('Location:login.php');
}

}

?>





