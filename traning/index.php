<?php
 session_start();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
}?>

<?php
include('../include/connect.php');
$con = connectBD();
$sql = "SELECT * FROM teachers";
$result = mysqli_query($con,$sql);
?>



<!-------------//----------------->
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
      <a class="nav-link" href="../index.html">Home</a>
    </li>
    <!-----------/dropdown/----------------->
  <div class="dropdown">
  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
   Student 
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="../admissions/index.php">Admission</a>
    <a class="dropdown-item" href="#">Attendance</a>
    <a class="dropdown-item" href="../results/index.php">Result</a>
    <a class="dropdown-item" href="../fee/index.php">Fee</a>
   </div>
   </div>
    <li class="nav-item">
      <a class="nav-link" href="../cash/index.php">Cash</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../notice/index.php">Notice</a>
    </li>
     </ul>
  </ul>

  <!--------/navbar-nav ml-auto/----------->
   
    <ul class="navbar-nav ml-auto">
     <li class="nav-item" >
      <a class="nav-link" href="login/registration.php"></a>
    </li>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="login/login.php"></a>
    </li>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="../index.html">Logout</a>
    </li>
    </ul>
    
</nav> 

<!--------------//---------------------->
<div class="main-content">
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-2">
 <a class="btn btn-success" href="create.php">+Add Teacher</a>
    </div>
    
    <div class="col-md-10">
      <?php if(isset($_GET['success'])) {?>
    <div class="alert alert-success" align="center">
    <strong>Success !</strong> Added successfully.
    </div>
    <?php } ?>

    <table class="table table-bordered table-success">
    <tr>
    <td>
    <h2 align="center">শিক্ষক/কর্মচারীর তথ্য বিবরণী</h2>
    </td>
    </tr>
    </table>
    
 <?php while($row = mysqli_fetch_assoc($result)) { ?>

    <table class="table table-bordered">
      <tr>
       <th width="310">চকুরীরত বর্তমান শিক্ষা প্রতিষ্ঠারে নামঃ</th>
      <td><?php echo $row['institution'];?></td>
      <th width="80">শিক্ষকের ছবি</th>
      <td><img style="width: 50px"; src="../uploads/<?php echo $row['image'];?>"></td> 
      </tr>
      </table>
      <table class="table table-bordered">
      <tr>
   		<th width="250">শিক্ষকের নামঃ</th>
      <td><?php echo $row['teacher'];?></td>
      <th width="100">পদবী</th>
      <td><?php echo $row['teacher'];?></td>
      </tr>
      <tr>
      <th width="250">শিক্ষকের পিতার নামঃ</th>
      <td><?php echo $row['father'];?></td>
      <th width="150">ইনডেক্স-নং</th>
      <td><?php echo $row['index_no'];?></td>
      </tr>
       </table>
       <table class="table table-bordered">
      <tr>
      <th width="150">জন্ম তারিখ-</th>
      <td><?php echo $row['index_no'];?></td>
      <th width="200">চাকুরীতে প্রথম যোগদানের তারিখ-</th>
      <td><?php echo $row['index_no'];?></td>
       <th width="100">বেতন কোড</th>
      <td><?php echo $row['index_no'];?></td>
      </tr>
    <tr>
      <th width="150">বর্তমান পদে যোগদানের তারিখ-</th>
      <td><?php echo $row['index_no'];?></td>
      <th width="200">এমপিও ভুক্তির তারিখ-</th>
      <td><?php echo $row['index_no'];?></td>
       <th width="100">জাতীয় পরিচয় পত্র নং</th>
      <td><?php echo $row['index_no'];?></td>
      
    </table>
    <h6>শিক্ষাগত যোগ্যতা</h6>
    <table class="table table-bordered">
      <tr align="center">
        <th>পরীক্ষার নাম</th>
        <th>পাশের সন</th>
        <th>পাশের বিভাগ</th>
        <th>বোর্ড/বিশ্ববিদ্যালয়</th>
        <th></th>
      </tr>
       <tr>
         <td>এস এস সি/দাখিল</td>
         <td><?php echo $row[''];?></td>
         <td><?php echo $row[''];?></td>
         <td><?php echo $row[''];?></td>
         </tr>
        <tr>
        <td>এইচ এস সি/আলিম</td>
        <td><?php echo $row[''];?></td>
        <td><?php echo $row[''];?></td>
        <td><?php echo $row[''];?></td>
       </tr>
       <tr>
         <td>স্নাতক/ফাজিল</td>
        <td><?php echo $row[''];?></td>
        <td><?php echo $row[''];?></td>
        <td><?php echo $row[''];?></td>
       </tr>
       <tr>
         <td>স্নাতোকত্তর/কামির</td>
         <td><?php echo $row[''];?></td>
         <td><?php echo $row[''];?></td>
         <td><?php echo $row[''];?></td>
       </tr>
       </table> 
     
     

      <table class="table">
      <tr align="right">
      <td>
			<a class="btn btn-info" href="edit.php?id=<?php echo $row ['id']; ?>">Edit</a>
			<a class="btn btn-danger" onclick="return confirm('Are you sure ?')" href="delete.php?id=<?php echo $row ['id']; ?>">Delete</a>
	</td>
	</tr>
  
 </table>
<?php } ?>  


<?php include('../include/footer.php') ?>



