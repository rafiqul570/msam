
<?php
$url = 'http://localhost/msam/';
?>

<?php
 session_start();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
}?>

<?php

include('../include/connect.php');
$con = connectBD();
$sql = "SELECT * from fees";
$result = mysqli_query($con,$sql);
?>

<!-------------------//------------------>
<?php
$url = 'http://localhost/msam/';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="<?php echo $url;?>/assets/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="<?php echo $url;?>/assets/css/style.css">
    <title>MAM</title>
  </head>
  
  <body>
    <nav class="navbar navbar-expand-md bg-light navbar-praimary">
  <!-- Brand -->

  <a class="navbar-brand" href="#"></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../index.html">Home</a>
    </li>
    <!-----------/dropdown/----------------->
  <div class="dropdown">
  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
   Student 
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="../admissions/index.php">Admission</a>
    <a class="dropdown-item" href="#">Attendance</a>
    <a class="dropdown-item" href="../results/index.php">Result</a>
    <a class="dropdown-item" href="#">Fee</a>
   </div>
   </div>
    
     <li class="nav-item">
      <a class="nav-link" href="../teachers/index.php">Teacher</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../notice/index.php">Notice</a>
    </li>
     </ul>
  <!--------/navbar-nav ml-auto/----------->
    
    <ul class="navbar-nav ml-auto">
     <li class="nav-item" >
      <a class="nav-link" href="login/registration.php"></a>
    </li>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="login/login.php"></a>
    </li>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="../index.html">Logout</a>
    </li>
    </ul>
    
</nav> 

<?php if(isset($_GET['success'])) {?>
    <div class="alert alert-success">
    <strong>Success !</strong> Added successfully.
    </div>
<?php } ?>

<!--------------//---------------------->
<div class="main-content">
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-0">
      
    </div>
    
    <div class="col-md-12">
      
<a class="btn btn-success" href="create.php">+Add Fees</a>

 
<h2 align="center">বেতন ও ফিস আদায়ের রশিদ</h2>

 
   <table>
     <tr>
     
      </tr> 
      </table>

      <table class="table table-bordered">
      <tr align="center">
      <th width="120">নাম :</th>
      <th>শ্রেনী :</th>
      <th>রোল :</th>
      <th>শাখা/বিভাগ :</th>
      <th width="115">তারিখ</th>
      <th>বেতন ও ফিস আদায়ের বিবরণ</th>
      <th width="200">টাকা</th>
      <th>action</th>
      </tr>

      <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <tr align="center">

      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['class'];?></td>
      <td><?php echo $row['roll'];?></td>
      <td><?php echo $row['section'];?></td>
      <td><?php echo $row['date'];?></td>
      <td><?php echo $row['des'];?></td>
      <td><?php echo $row['taka'];?></td>
      
      <td>

      <a class="btn btn-info" href="edit.php?id=<?php echo $row ['id']; ?>">Edit</a>
      <a class="btn btn-danger" onclick="return confirm('Are you sure ?')" href="delete.php?id=<?php echo $row ['id']; ?>">Delete</a>
    </td>
    </tr>
    <?php } ?>
    </table>
 
 
 <?php include('../include/footer.php') ?>

