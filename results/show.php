
<?php
$url = 'http://localhost/msam/';
?>

<?php
$class = $_POST['class'];
$roll = $_POST['roll'];
include('../include/connect.php');
$con = connectBD();
$sql = "SELECT * FROM results WHERE class= '$class'AND roll= '$roll'";
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
    
    <div class="col-md-6">
     <?php if($rowcount == 1){

} else{

  echo " warning ! wrong Roll number or Class name .please try again.";
} ?>
 
<?php while($row = mysqli_fetch_assoc($result)) { ?>
<table class="table table-bordered table-success">
	<tr>
		<td><h2 align="center">Find Your Result</h2></td>
	</tr>
</table>	
<table class="table table-bordered">
	<tr>
   	<td width="100">Name</td>
   	<td align="center"><?php echo $row['name'];?></td>
   </tr>
   	<tr>
   	<td>Class</td>
   	<td align="center"><?php echo $row['class'];?></td>
   </tr>
  <tr>		
   <td>Roll</td>
   <td align="center"><?php echo $row['roll'];?></td>
   </tr>
   <tr>
   	<td>GPA</td>
   	<td align="center"><?php echo $row['gpa'];?></td>
   </tr>	
   
</table>
 <?php } ?>

<?php include('../include/footer.php') ?>

