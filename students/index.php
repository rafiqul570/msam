<?php
 session_start();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
}?>

<?php
include('../include/header.php');
include('../include/connect.php');
$con = connectBD();
$sql = "SELECT * FROM student";
$result = mysqli_query($con,$sql);
?>

<?php if(isset($_GET['success'])) {?>
    <div class="alert alert-success">
    <strong>Success !</strong> Added successfully.
    </div>
<?php } ?>
<a class="btn btn-success" href="create.php">+Add Student</a>

<h2 align="center">Result List</h2>
   <table class="table table-bordered">
    <tr align="center">
      
      <th>Name</th>
      <th>Class</th>
      <th>section</th>
      <th>roll</th>
      <th>Action</th>
    </tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>

  <tr align="center">
    
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['class'];?></td>
    <td><?php echo $row['section'];?></td>
    <td><?php echo $row['roll'];?></td>
    <td width="150">
      <a class="btn btn-info btn-sm" href="edit.php?id=<?php echo $row ['id']; ?>">Edit</a>
      <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure ?')"href="delete.php?id=<?php echo $row ['id']; ?>">Delete</a>
    </td>
  </tr>
 
 <?php } ?>
</table>


<?php include('../include/footer.php') ?>



