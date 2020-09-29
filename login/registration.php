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
   if(isset ($_SESSION['error_msg'])) {?>
    <div class="alert alert-warning">
    <strong>Warning !</strong> <?php echo $_SESSION['error_msg']; ?>
    </div>
<?php } ?>
<?php
   
   if(isset ($_SESSION['error'])) {?>
    <div class="alert alert-warning">
    <strong>Warning !</strong> <?php echo $_SESSION['error']; ?>
    </div>
<?php } ?>

<h1>Create An Account</h1>
   <br>
   <form action="confirmregistration.php" method = "post">
    <div class="form-group">
    <label for="Name">Name :</label>
    <input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
  </div>
  <div class="form-group">
    <label for="Email">Email :</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
  </div>
  <div class="form-group">
    <label for="Password">Password :</label>
    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
  </div>
  <div class="form-group">
    <label for="Confirm Password">Confirm Password :</label>
    <input type="password" class="form-control" id="confirm password" placeholder="Enter confirm password" name="confirm_password" required>
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" name="image">
  </div>
  <br>
 <button type="submit" class="btn btn-primary">submit</button>
Already have an account <a class="btn btn link" href="login.php">Login</a>
 
</form>

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

<?php unset($_SESSION['error_msg']); ?>
<?php unset($_SESSION['error']); ?>