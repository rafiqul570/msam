<?php
$url = 'http://localhost/msam/';
?>

<?php
$month = $_POST['month'];
$year = $_POST['year'];
include('../include/connect.php');
$con = connectBD();
$sql = "SELECT * FROM cash WHERE month= '$month'AND year= '$year'";
$result = mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($result);
$rowcount == 1;

$sql2 = "SELECT sum(incum) AS total_incum,sum(expense) AS total_expense FROM cash";
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
      <a class="nav-link" href="http://localhost/msam/">Home</a>
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
    <div class="col-md-0">
 
    </div>
    
    <div class="col-md-12">
 <a class="btn btn-success" href="view.php">GO BACK</a>
 

<table class="table">
	<tr>
	<h2 align="center">আয়-ব্যয় বিবরণী</h2>

	</tr>
</table>	

<table class="table table-bordered">

	<tr align="center">
   	  <th width="15%">তারিখ</th>
      <th width="45%">আয়-ব্যয়ের বিবরণ</th>
      <th width="20%">আয়</th>
      <th width="20%">ব্যয়</th>
   </tr>
<?php while($row = mysqli_fetch_assoc($result)) { ?>
    <tr align="center">
    <td><?php echo $row['date'];?></td>
    <td><?php echo $row['description'];?></td>
    <td><?php echo $row['incum'];?></td>
    <td><?php echo $row['expense'];?></td>
   </tr>
  <?php } ?>
  <td colspan="2" align="center">TOTAL</td>
  <td align="center"><?php echo $row1['total_incum'];?></td><br/>
  <td align="center"><?php echo $row1['total_expense'];?></td>
  </table>

 
      
   
   
  </div>
  </div>
  <div class="col-md-0">

  </div>
  </div>
</div>
</div>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?php echo $url;?>/assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="<?php echo $url;?>/assets/js/Popper.min.js"></script> 
    <script type="text/javascript" src="<?php echo $url;?>/assets/js/bootstrap.min.js"></script>  
    
  </body>
</html>
 

 