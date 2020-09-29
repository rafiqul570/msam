<?php 
$id = $_GET['id'];
include('../include/connect.php');
$con = connectBD();
$sql = "DELETE FROM uploads WHERE id= $id";
if(mysqli_query($con,$sql)) {
header ('Location:index.php');

} else {

	echo "NOT DELETED";
}
