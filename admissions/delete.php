<?php
 session_start();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
} ?>


<?php 
$id = $_GET['id'];
include('../include/connect.php');
$con = connectBD();
$sql = "DELETE FROM admissions WHERE id= $id";
if(mysqli_query($con,$sql)) {
header ('Location:index.php');

} else {

	echo "NOT DELETED";
}
