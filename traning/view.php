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
    <ul class="navbar-nav ml-auto">
     <li class="nav-item" >
      <a class="nav-link" href="#"></a>
    </li>
    </ul>
</nav> 

<!--------------//---------------------->
<div class="main-content">
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-4">
 
    </div>
    
    <div class="col-md-6">
    	<div class="result">
    	<table class="table table-bordered table-success">
   		<tr><br>
   		<td><h1 align="center" >TRANING</h1></td>
  		</tr>
  		</table>
    	<form action="show.php" method = "post">
     	<table class="table table-bordered">
   		<tr>
   		<td>Teacher's Name</td>
   		<td><input type="text" class="form-control" id="teacher" placeholder="Name" name="teacher" required></td>
   		</tr>
   		<tr>
   		<td>Index-No</td>
   		<td><input type="text" class="form-control" id="index_no" placeholder="Index" name="index_no" required></td>
  		</tr>
  		</table>
  		<button type="submit" class="btn btn-primary">submit</button>
  		</form>
  		</div>
		</div>
		  <div class="col-md-2">

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





