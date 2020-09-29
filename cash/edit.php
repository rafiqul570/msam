<?php
 session_start();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
} ?> 

<?php
    $id = $_GET['id'];
    include('../include/connect.php');
    $con = connectBD();
    $sql = "SELECT *FROM cash WHERE id= $id";
    $result = mysqli_query($con,$sql);
    $std = mysqli_fetch_assoc($result);
    
?>
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
    
</nav> 

<!--------------//---------------------->
<div class="main-content">
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-3">
 <a class="btn btn-success" href="index.php">GO BACK</a>
    </div>
    
    <div class="col-md-6">

 

<div class="content">
   <h2>Edit Cash</h2>
   <form action="update.php?id=<?php echo $std['id'];?>" method = "post">
  <div class="form-group">
    <label for="Name">Date:</label>
    <input type="text" class="form-control" id="date" value="<?php echo $std['date'];?>" placeholder="Date" name="date" required>
  </div>
   <div class="form-group"> <label for="month">Month :</label>
    <select class="form-control" id="month" value="<?php echo $std['month'];?>" name="month" >
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>November</option>
      <option>December</option>
    </select>
  </div> 

  <div class="form-group"> <label for="month">Year :</label>
    <select class="form-control" id="year" value="<?php echo $std['month'];?>" name="year">
      <option>2019</option>
      <option>2020</option>
      <option>2021</option>
      <option>2022</option>
      <option>2023</option>
      <option>2024</option>
      <option>2025</option>
      <option>2026</option>
      <option>2027</option>
      <option>2028</option>
      <option>2029</option>
      <option>2030</option>
      <option>2031</option>
    </select>
  </div> 

  <div class="form-group">
    <label for="Name">Description:</label>
    <input type="text" class="form-control" id="description" value="<?php echo $std['description'];?>" placeholder="description" name="description" required>
  </div>
  <div class="form-group">
    <label for="Name">Incum:</label>
    <input type="text" class="form-control" id="incum" value="<?php echo $std['incum'];?>" placeholder="Taka" name="incum">
  </div>
  <div class="form-group">
    <label for="Name">Expense:</label>
    <input type="text" class="form-control" id="expense" value="<?php echo $std['expense'];?>" placeholder="Taka" name="expense">
  </div>
  <button type="submit" class="btn btn-primary">submit</button>
 </form> 
</div>
  <?php include('../include/footer.php')?>

  <?php unset($_SESSION['error']);?>
 