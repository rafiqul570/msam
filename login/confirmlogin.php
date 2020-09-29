<?php


$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);


include('../include/connect.php');
$con = connectBD();
$sql = "SELECT *FROM users WHERE email= '$email'AND password= '$password'";
$result = mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($result);

if ($rowcount == 1) {

session_start();
$_SESSION['login'] = true;
header('Location:index.php');

} else {

session_start();
$_SESSION['error'] = true;

header('Location:login.php?error= 1');

} 
