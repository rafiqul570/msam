<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('Location:login.php');
}?>

<?php include('../include/header.php')?>
    <a class="btn btn-success" href="index.php">GO BACK</a>
    <div class="content">
    <?php if(isset ($_GET['error'])) {?>
    <div class="alert alert-warning">
    <strong>error!</strong>Something wrong.
    </div>
<?php } ?>
   <h2>Add New Result</h2>
   <form action="store.php" method = "post">
  <div class="form-group">
    <label for="Name">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
  </div>
   <div class="form-group">
    <label for="Class">Class:</label>
    <input type="text" class="form-control" id="class" placeholder="Class" name="class" required>
  </div>
   <div class="form-group">
    <label for="Roll">Roll:</label>
    <input type="text" class="form-control" id="roll" placeholder="Roll" name="roll" required>
  </div>
  <div class="form-group">
    <label for="GPA">GPA:</label>
    <input type="text" class="form-control" id="gpa" placeholder="GPA" name="gpa" required>
  </div>
 
  <button type="submit" class="btn btn-primary">submit</button>
</form> 

</div>

<?php include('../include/footer.php')?>
