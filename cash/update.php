 <?php
 session_start();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
} ?>


<?php
    $id= $_GET['id'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $description = $_POST['description'];
   	$dabite = $_POST['dabite'];
    $cradite = $_POST['cradite'];

    include('../include/connect.php');
    $con = connectBD();
    $sql = "UPDATE cash SET date = '$date',month = '$month',year = '$year',description ='$description',dabite = '$dabite', cradite = '$cradite' WHERE id= $id";
    $result = mysqli_query($con,$sql); 
    header('Location:index.php');
   
 ?>