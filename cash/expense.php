<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('Location:login.php');
}?>

<?php include('../include/header.php')?>
  <div class="content">
    <?php if(isset ($_GET['error'])) {?>
    <div class="alert alert-warning">
    <strong>error!</strong>Something wrong.
    </div>
<?php } ?>

<!--------------//---------------------->
<div class="main-content">
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-2">
 <a class="btn btn-success" href="index.php">GO BACK</a>
    </div>
    
    <div class="col-md-8">

   <h2 align="center">Add New Expense</h2>
   <form action="add_incum.php" method = "post">
 <table class="table table-bordered" style="background: red">
  <tr>
    <div class="form-group">
    <td><label for="Name">Date</label></td>
     <td><input type="date" class="form-control" id="date" placeholder="Date" name="date" required></td>
  </div>
  </tr>
  <tr>
    <div class="form-group"> 
    <td><label for="month">Month</label></td>
    <td><select class="form-control" id="month" name="month">
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
    </select></td>
  </div> 
   </tr>
   <tr>
    <div class="form-group"> 
    <td><label for="month">Year</label></td>
    <td><select class="form-control" id="year" name="year">
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
    </select></td>
  </div> 
</tr>
<tr>
   <div class="form-group">
   <td><label for="description">Expense</label></td> 
    <td><input type="text" class="form-control" id="description" placeholder="description" name="description" required></td> 
  </div>
  </tr>
  <tr>
  <div class="form-group">
    <td><label for="expense">Taka</label></td> 
    <td><input type="text" class="form-control" id="expense" placeholder="Taka" name="expense"></td> 
  </div>
  </tr>
  </table>
  <button type="submit" class="btn btn-primary">submit</button>
</form> 

</div>

<?php include('../include/footer.php')?>



