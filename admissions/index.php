<?php
 session_start();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
}?>

<?php
include('../include/connect.php');
$con = connectBD();
$sql = "SELECT * FROM admissions";
$result = mysqli_query($con,$sql);
?>



<!-------------//----------------->
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
      <a class="nav-link" href="http://localhost/msam/">Home</a>
    </li>
    <!-----------/dropdown/----------------->
  <div class="dropdown">
  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
   Student 
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="../admissions/index.php"></a>
    <a class="dropdown-item" href="#">Attendance</a>
    <a class="dropdown-item" href="../results/index.php">Result</a>
    <a class="dropdown-item" href="../fee/index.php">Fee</a>
   </div>
   </div>
    <li class="nav-item">
      <a class="nav-link" href="../cash/index.php">Cash</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="../teachers/index.php">Teacher</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../notice/index.php">Notice</a>
    </li>
     </ul>
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

<!--------------//---------------------->
<div class="main-content">
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-2">
 <a class="btn btn-success" href="create.php">+Add Student</a>
    </div>
    
    <div class="col-md-10">
      <?php if(isset($_GET['success'])) {?>
    <div class="alert alert-success" align="center">
    <strong>Success !</strong> Added successfully.
    </div>
    <?php } ?>

    <table class="table table-bordered table-success">
    <tr>
    <td>
    <h2 align="center">Admission Form</h2>
    </td>
    </tr>
    </table>
    
 <?php while($row = mysqli_fetch_assoc($result)) { ?>

    <table class="table table-bordered">
      <tr>
       <th width="250">Institution's Name</th>
      <td><?php echo $row['institution'];?></td> 
      </tr>
      </table>
      <table class="table table-bordered">
      <tr>
   		<th width="150">Student's Name</th>
      <td><?php echo $row['name'];?></td>
      <th width="150">Father's Name</th>
      <td><?php echo $row['father'];?></td>
     </tr>
      <tr>
      <th>Class</th>
      <td><?php echo $row['class'];?></td>
      <tr>
      <th>Roll</th>
      <td><?php echo $row['roll'];?></td>
       <th width="120">Image</th>
      <td><img style="width: 30px"; src="../uploads/<?php echo $row['image'];?>"></td>
    </tr>
    
    </table>
    <table class="table">
 <tr align="right">
  <td>
			<a class="btn btn-info" href="edit.php?id=<?php echo $row ['id']; ?>">Edit</a>
			<a class="btn btn-danger" onclick="return confirm('Are you sure ?')" href="delete.php?id=<?php echo $row ['id']; ?>">Delete</a>
	</td>
	</tr>
  
 </table>
<?php } ?>  


<?php include('../include/footer.php') ?>



