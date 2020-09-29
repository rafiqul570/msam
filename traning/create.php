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
    <a class="btn btn-success" href="index.php">GO BACK</a><br>
    <h2 align="center">Add New Teacher Information</h2>
     
   <form action="store.php" enctype="multipart/form-data" method = "post">
  <div class="form-group">
    <label for="institution">Institution's name:</label>
    <input type="text" class="form-control" id="institution" placeholder="Institution's name" name="institution" required>
  </div>
   <div class="form-group">
    <label for="teacher">Teacher's name:</label>
    <input type="text" class="form-control" id="teacher" placeholder="Teacher's name" name="teacher" required>
  </div>
   <div class="form-group">
    <label for="father">Father's name:</label>
    <input type="text" class="form-control" id="father" placeholder="Father's name" name="father" required>
  </div>
  
  <div class="form-group">
    <label for="index_no">Index-No:</label>
    <input type="text" class="form-control" id="index_no" placeholder="Index-No" name="index_no" required>
  </div>
   <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control" name="image">
  </div>
 
  <div class="form-group">
   <button type="submit" class="btn btn-primary">submit</button> 
  </div>
   
</form> 

</div>

<?php include('../include/footer.php')?>
