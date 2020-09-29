<?php
$con = mysqli_connect('localhost','id13317663_root','Rafiqul/161070','id13317663_bnjm');
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
   <link rel="stylesheet" type="text/css" href="<?php echo $url;?>/assets/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="<?php echo $url;?>/assets/css/style.css">
    <title>Moghia Salehia Alim Madrasha</title>
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
    <a class="dropdown-item" href="../fee/index.php">Fee</a>
   </div>
   </div>
   <li class="nav-item">
      <a class="nav-link" href="../teachers/index.php">Teacher</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../cash/index.php">Cash</a>
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
    <div class="col-md-0">

    </div>
    
    <div class="col-md-12">
     <a class="btn btn-success" href="create.php">+Add File</a> 
     <h2 align="center">OFFICE-FILE</h2><br>
    
  
    <table class="table table-bordered">
    <tr align="center">
    <th width="100">Date</th>
    <th>Subject</th>
    <th>File Name</th>
    <th>All File</th>
    <th>Action</th>      
    </tr>

     <?php while($row = mysqli_fetch_array($result)) { ?>

      <tr>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['subject'] ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">View & Download</a></td>
     
     
       
     
  <td>
      <a class="btn btn-info btn-sm" href="edit.php?id=<?php echo $row ['id']; ?>">Edit</a>
      <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ?')" href="delete.php?id=<?php echo $row ['id']; ?>">Delete</a>
  </td>
  </tr>
  <?php } ?>
 </table>
      
      </div>
  <div class="col-md-0">

  </div>
  </div>
</div>
</div>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?php echo $url;?>assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="<?php echo $url;?>assets/js/Popper.min.js"></script> 
    <script type="text/javascript" src="<?php echo $url;?>assets/js/bootstrap.min.js"></script>  
    
  </body>
</html>
