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
    $sql = "SELECT *FROM uploads WHERE id= $id";
    $result = mysqli_query($con,$sql);
    $std = mysqli_fetch_assoc($result);
    
?>
 
<a class="btn btn-success" href="index.php">Back</a>
<div class="content">
   <h2>Edit File</h2>
   <form action="update.php?id=<?php echo $std['id'];?>" method = "post">
  <div class="form-group">
 <div class="form-group">
    <label for="date">Date :</label>
    <input type="date" class="form-control" id="date" value="<?php echo $std['date'];?>" placeholder="Date" name="date" required>
  </div>
  <div class="form-group">
    <label for="subject">Subject:</label>
    <input type="text" class="form-control" id="subject"  value="<?php echo $std['subject'];?>" placeholder="Subject" name="subject" required>
  </div> 
 <input type="file" name="file"/><br><br>
 <div class="form-group">
   <button type="submit" class="btn btn-primary" name="btn-upload">upload</button> 
  </div>
 </form> 
</div>
  <?php include('../include/footer.php')?>

  <?php unset($_SESSION['error']);?>
 