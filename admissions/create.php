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
   <a class="btn btn-success" href="index.php">GO BACK</a>
   <td> <h2 align="center">Admission Form</h2></td>
      
   <form action="store.php" enctype="multipart/form-data" method = "post">
  <div class="form-group">
    <label for="institution">Institution's name:</label>
    <input type="text" class="form-control" id="institution" placeholder="Institution's name" name="institution" required>
  </div>
   <div class="form-group">
    <label for="name">Student's name:</label>
    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
  </div>
   <div class="form-group">
    <label for="father">Father's name:</label>
    <input type="text" class="form-control" id="father" placeholder="Father's name" name="father" required>
  </div>
  
  <div class="form-group">
    <label for="class">Class:</label>
    <input type="text" class="form-control" id="class" placeholder="Class" name="class" required>
  </div>
  <div class="form-group">
    <label for="roll">Roll:</label>
    <input type="text" class="form-control" id="roll" placeholder="Roll" name="roll" required>
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
