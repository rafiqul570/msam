 <?php
 session_start();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
} ?>


<?php
    $id= $_GET['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $roll = $_POST['roll'];
    $gpa = $_POST['gpa'];
   	
    include('../include/connect.php');
    $con = connectBD();
    $sql = "UPDATE teachers SET name = '$name',class = '$class',roll = '$roll',gpa ='$gpa' WHERE id= $id";
    $result = mysqli_query($con,$sql); 
    header('Location:index.php');
   
 ?>