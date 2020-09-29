
<?php
session_start();
include('../include/header.php');
include('../include/connect.php');

if(isset($_POST['submit'])){

  foreach ($_POST['attendence_status'] as $id=> $attendence_status) {
    $name = $_POST['name'][$id];
    $class = $_POST['class'][$id];
    $roll = $_POST['roll'][$id];
    $date = date("y-m-d h:i:s");

  $con = connectBD();
  $sql = "INSERT INTO attendence_records(name,class,roll,attendence_status,date) VALUES('$name','$class','$roll','$attendence_status','$date')";
  if(mysqli_query($con,$sql));
  
}

}
?>

<?php if(isset($_GET['success'])) {?>
    <div class="alert alert-success">
    <strong>Success !</strong> Added successfully.
    </div>
<?php } ?>
<a class="btn btn-success" href="create.php">+Add Student</a>
<a class="btn btn-success float-right" href="view.php">View All</a>

<h3><div class="well text-center" style="color: red;">Date:<?php echo date("Y-m-d"); ?></div></h3>

<form action="index.php" method="post">
   
   <table class="table table-bordered">
    <tr align="center">
      
      <th>Name</th>
      <th>Class</th>
      <th>Roll</th>
      <th>Attendence_status</th>
      <th>Action</th>

    </tr>

  <?php
    $con = connectBD();
    $sql = "SELECT * FROM attendence";
    $result = mysqli_query($con,$sql);
    $id=0;
    $counter=0;
    while ($row = mysqli_fetch_assoc($result)) { 
    $id++;
  ?>
  

  <tr align="center">
    
    <td>
    <?php echo $row['name'];?>
    <input type="hidden" value="<?php echo $row['name'];?>" name="name[]">
    </td>
    <td>
    <?php echo $row['class'];?>
    <input type="hidden" value="<?php echo $row['class'];?>" name="class[]">
    </td>
    <td>
    <?php echo $row['roll'];?>
    <input type="hidden" value="<?php echo $row['roll'];?>" name="roll[]">
    </td>
    <td>
      <input type="radio" name="attendence_status[<?php echo $counter;?>]" value="Present">Present
      <input type="radio" name="attendence_status[<?php echo $counter;?>]" value="Absent">Absent
    </td>
    <td width="150">
      <a class="btn btn-info btn-sm" href="edit.php?id=<?php echo $row ['id']; ?>">Edit</a>
      <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ?')"href="delete.php?id=<?php echo $row ['id']; ?>">Delete</a>
    </td>
  </tr>
 
 <?php 
$counter++;
} 

?>
</table>
<table>
  <tr>
    <td><input type="submit" name="submit" value="submit"></td>
  </tr>
</table>
</form>

<?php include('../include/footer.php') ?>



