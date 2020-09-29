 <?php
 session_start();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
} ?>


<?php
    $id= $_GET['id'];
    $date = $_POST['date'];
    $subject = $_POST['subject'];	
    include('../include/connect.php');
    $con = connectBD();
    $sql = "UPDATE uploads SET date = '$date',subject = '$subject' WHERE id= $id";
    $result = mysqli_query($con,$sql); 
    header('Location:index.php');
   
 ?>