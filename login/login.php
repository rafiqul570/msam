

<?php $url = 'http://localhost/msam/';?>

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
  
    <nav class="navbar navbar-expand-md bg-light navbar-prymary">
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
    <div class="col-md-3">
      
  </div>
    
  <div class="col-md-6">

    <?php
    session_start();
    if(isset($_SESSION['error'])) {?>
    <div class="alert alert-warning">
    <strong>warning !</strong> Wrong email and password.
    </div>
  <?php } ?>  
  <?php if(isset($_SESSION['reg_msg'])) {?>
    <div class="alert alert-success">
    <strong>Success !</strong> <?php echo $_SESSION['reg_msg'];?>
    </div>
  <?php } ?> 
  <div style="background: red"> 
  <h1 align="center">Login</h1>
   <br><br>
   <form action="confirmlogin.php" method = "post">
   <table class="table table-bordered">
   <tr>
   <th>Email</th>
   <td><input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required></td>
    </tr>
   <tr>
   <th>Password</th>
    <td><input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required></td>
 
    </tr>
    <tr>
    <td><button type="submit" class="btn btn-primary">Login</button></td>

    <td><a class="btn btn-primary" href="registration.php">Create New Account</a></td>
   </tr>
   </table>
  </form>

  </div>
   </div>

  <div class="col-md-3">

    </div>
    </div>
  </div> 
</div>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="assets/js/Popper.min.js"></script> 
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
    
 
    
  </body>
</html>
 
 <?php unset($_SESSION['error']);?>
 <?php unset($_SESSION['reg_msg']);?>
 