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
   <li class="nav-item">
    <a class="nav-link" href="../teachers/index.php"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../cash/index.php"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../notice/index.php"></a>
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
      <a class="nav-link" href="../index.html"></a>
    </li>
    </ul>
    
</nav> 
<!--------------//---------------------->
<div class="main-content">
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-2">

    </div>
    
    <div class="col-md-10">
      
     <table class="table table-bordered table-success">
    <tr>
    <td>
    <h2 align="center">Office-File</h2>
    </td>
    </tr>
    </table> 

   
    <table class="table table-bordered">
        <tr align="center">
          <td width="150">Date</td>
          <td>Subject</td>
          <td width="150">All File</td>
                
        </tr>

    <?php while($row = mysqli_fetch_array($result)) { ?>

      <tr>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['subject'] ?></td>
       <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">View & Download </a></td>
        
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
