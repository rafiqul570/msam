<?php
 session_start();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
} ?>


<?php include('../include/header.php');?> 

<?php
    $id = $_GET['id'];
    include('../include/connect.php');
    $con = connectBD();
    $sql = "SELECT *FROM results WHERE id= $id";
    $result = mysqli_query($con,$sql);
    $std = mysqli_fetch_assoc($result);
    
?>
 
<a class="btn btn-success" href="index.php">Back</a>
<div class="content">
   <h2>Edit Result</h2>
   <form action="update.php?id=<?php echo $std['id'];?>" method = "post">
  <div class="form-group">
    <label for="Name">Name:</label>
    <input type="text" class="form-control" id="name" value="<?php echo $std['name'];?>" placeholder="Name" name="name" required>
  </div>
  <div class="form-group">
    <label for="Name">Class:</label>
    <input type="text" class="form-control" id="class" value="<?php echo $std['class'];?>" placeholder="Class" name="class" required>
  </div>

  <div class="form-group">
    <label for="Name">Roll:</label>
    <input type="text" class="form-control" id="roll" value="<?php echo $std['roll'];?>" placeholder="Roll" name="roll" required>
  </div>

  <div class="form-group">
    <label for="Name">GPA:</label>
    <input type="text" class="form-control" id="gpa" value="<?php echo $std['gpa'];?>" placeholder="GPA" name="gpa" required>
  </div>
  <button type="submit" class="btn btn-primary">submit</button>
 </form> 
</div>
  <?php include('../include/footer.php')?>

  <?php unset($_SESSION['error']);?>
 