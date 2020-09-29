 <?php
 session_start();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
} ?>


<?php
    $id= $_GET['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $roll = $_POST['roll'];
   	
    include('../include/connect.php');
    $con = connectBD();
    $sql = "UPDATE student SET name = '$name',class = '$class',section = '$section',roll ='$roll' WHERE id= $id";
    $result = mysqli_query($con,$sql); 
    header('Location:index.php');
   
 ?>