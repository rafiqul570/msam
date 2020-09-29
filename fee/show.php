
<?php
$url = 'http://localhost/msam/';
?>

<?php
$class = $_POST['class'];
$roll = $_POST['roll'];
include('../include/connect.php');
$con = connectBD();
$sql = "SELECT * FROM fees WHERE class= '$class'AND roll= '$roll'";
$result = mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($result);

if ($rowcount == 1);

$sql2 = "SELECT sum(taka) AS total_taka FROM fees";
$result2 = mysqli_query($con,$sql2);
$row1 = $result2->fetch_assoc();

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
    
    <div class="col-md-8">
 

  
<table align="center">
  <tr>
    <td><h2 align="center">বেতন/ফিস আদায়</h2></td>
  </tr>
</table><br>


    <table class="table table-bordered">
      
    <tr align="center"> 
    <th width="150">তারিখ</th>
    <th>বেতন/ফিস আদায়ের বিবরণ</th>
    <th colspan="2">টাকা</th>
    </tr>
 
  <?php while($row = mysqli_fetch_assoc($result)) { ?>
  <tr> 
   <td align="center"><?php echo $row['date'];?></td>
   <td align="center"><?php echo $row['des'];?></td>
   <td align="center" colspan="2"><?php echo $row['taka'];?></td>
   </tr>  
  <?php } ?>
  <td align="center" colspan="2">Total</td>
   <td align="center" colspan="2"><?php echo $row1['total_taka'];?></td><br/> 
</table>




<?php include('../include/footer.php') ?>


 