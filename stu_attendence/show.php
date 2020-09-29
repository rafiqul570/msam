
<?php
$url = 'http://localhost/msam/';
?>

<?php
    $class = $_POST['class'];
    $roll = $_POST['roll'];
    include('../include/connect.php');
    $con = connectBD();
    $sql = "SELECT * FROM attendence_records WHERE class= '$class' AND roll= '$roll'";
    $result = mysqli_query($con,$sql);
    $rowcount = mysqli_num_rows($result);

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
    <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
  </ul>
    
</nav> 

<!--------------//---------------------->
<div class="main-content">
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-2">
  <a class="btn btn-success" href="view.php">GO BACK</a>
    </div>
    
    <div class="col-md-10">
 

  <div style="border: 1px solid black;">
<table class="table table-bordered">
  <tr>
    <td><h2 align="center">STUDENT</h2></td>
  </tr>
</table>


    <table class="table table-bordered">
      
    <tr align="center">
    <th>Date</th> 
    <th width="150">NAME</th>
    <th>CLASS</th>
     <th>ROLL</th>
     <th>Attendence_status</th>

    </tr>
 
  <?php while($row = mysqli_fetch_assoc($result)) { ?>
  <tr> 
  <td align="center"><?php echo $row['date'];?></td>
   <td align="center"><?php echo $row['name'];?></td>
    <td align="center"><?php echo $row['class'];?></td>
   <td align="center"><?php echo $row['roll'];?></td>
   <td align="center"><?php echo $row['attendence_status'];?></td>
   </tr>  
  <?php } ?> 
</table>
</div>

<?php include('../include/footer.php') ?>

