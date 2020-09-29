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
    
    <div class="col-md-9">

   <h2 align="center">ADMISSION</h2><br>
   <form action="store.php" method = "post">
    <table class="table table-bordered">
      <tr>
      <th width="120">ছাত্র/ছাত্রীর নাম</th>
      <td width="250"><input type="text" class="form-control" id="name" placeholder="student's name" name="name" required></td>
      <th width="60">শ্রেনী</th>
      <td width="130"><input type="text" class="form-control" id="class" placeholder="class" name="class" required></td>
      </tr>
      <tr>
      <th width="120">শাখা/বিভাগ</th>
      <td><input type="text" class="form-control" id="section" placeholder="section" name="section" required></td>
      <th width="60">রোল</th>
      <td><input type="text" class="form-control" id="roll" placeholder="roll" name="roll" required></td>
      </tr>
      </table>

      
       <button type="submit" class="btn btn-primary">submit</button>
</form> 

</div>

<?php include('../include/footer.php')?>

