<?php
 session_start();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
}?>

<?php
include('../include/connect.php');
$con = connectBD();
$sql = "SELECT *FROM cash";
$result = mysqli_query($con,$sql);


$sql2 = "SELECT sum(incum) AS total_incum,sum(expense) AS total_expense FROM cash";
$result2 = mysqli_query($con,$sql2);
$row1 = $result2->fetch_assoc();
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

<a class="btn btn-success" href="incum.php">+Add Incum</a>
 <a class="btn btn-success" href="expense.php">+Add Expense</a>

<h2 align="center">আয়-ব্যয় বিবরনী</h2><br>
   <table class="table table-bordered">
   	<tr align="center">
   		
   		<th width="70">তারিখ</th>
   		<th width="100">মাস</th>
   		<th width="70">বছর</th>
   		<th width="300">আয়-ব্যয়ের বিবরণ</th>
      <th width="110">আয়</th>
       <th width="110">ব্যয়</th>
   		<th width="130">Action</th>
   	</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

	<tr align="center">
		
		<td><?php echo $row['date'];?></td>
		<td><?php echo $row['month'];?></td>
		<td><?php echo $row['year'];?></td>
		<td><?php echo $row['description'];?></td>
    <td><?php echo $row['incum'];?></td>
     <td><?php echo $row['expense'];?></td>
		<td>
			<a class="btn btn-info btn-sm" href="edit.php?id=<?php echo $row ['id']; ?>">Edit</a>
			<a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ?')" href="delete.php?id=<?php echo $row ['id']; ?>">Delete</a>
		</td>
	</tr>

 <?php } ?>

 <td colspan="4" align="center">TOTAL</td>
  <td align="center"><?php echo $row1['total_incum'];?></td><br/>
  <td align="center"><?php echo $row1['total_expense'];?></td>
 </table>
 
     
   
<?php include('../include/footer.php') ?>



