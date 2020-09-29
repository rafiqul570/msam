<?php
$url = 'http://localhost/msam/';
?>

<?php
$class = $_POST['class'];
$roll = $_POST['roll'];
include('../include/connect.php');
$con = connectBD();
$sql = "SELECT * FROM admissions WHERE class = '$class'AND roll= '$roll'";
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
    <div class="col-md-2">
  <a class="btn btn-success" href="view.php">GO BACK</a>
    </div>
    
    <div class="col-md-10">
<?php if($rowcount == 1){

} else{

  echo " warning ! wrong Name or Index-no .please try again.";
} ?>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
 <div class="tab">

<table class="table">

  <tr>
    <td>
      <div class="admiss">
        <h2>Moghia Salehia Alim Madrasha</h2>
        <h4 style="margin-left: 132px;">Kachua, Bagerhat</h4>
      </div>
      <div class="admission">
        <h2>Admission Form</h2>
      </div>
    </td>
    <td>
      <img style="width: 80px"; src="../uploads/<?php echo $row['image'];?>">
    </td>
  </tr>
</table>  

<table class="table table-bordered">

  <table class="table table-bordered">
      <tr>
      <th width="200">Institution's name</th>
      <td><?php echo $row['institution'];?></td>
      </tr>
      </table>
      
      <table class="table table-bordered">
      <tr>
      <th width="150">Student's name</th>
      <td><?php echo $row['name'];?></td>
      <th width="150">Father's name</th>
      <td><?php echo $row['father'];?></td>
      </tr>
      <tr>
      <th width="150">Class</th>
      <td><?php echo $row['class'];?></td>
      </tr>
      <tr>
      <th width="150">Roll</th>
      <td><?php echo $row['roll'];?></td>
      </tr>
      </table>

      <?php } ?>
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
 

