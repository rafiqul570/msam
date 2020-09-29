


<?php
$con = mysqli_connect('localhost','root','','sms');
$sql = "SELECT * FROM uploads";
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
   <link rel="stylesheet" type="text/css" href="<?php echo $url;?>assets/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="<?php echo $url;?>assets/css/style.css">
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
      <a class="nav-link" href="../cash/index.php">Cash</a>
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

<!--------------//---------------------->
<div class="main-content">
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-2">
   <a class="btn btn-success" href="index.php">GO BACK</a>
    </div>
    
    <div class="col-md-8">
   
    <h2 align="center">Add New File</h2>

     <form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="date">Date :</label>
    <input type="date" class="form-control" id="date" placeholder="Date" name="date" required>
  </div>
  <div class="form-group">
    <label for="subject">Subject:</label>
    <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
  </div> 
 <input type="file" name="file"/><br><br>
 <div class="form-group">
   <button type="submit" class="btn btn-primary" name="btn-upload">upload</button> 
  </div>

 </form>
</div>
    
    
<?php include('../include/footer.php') ?>



