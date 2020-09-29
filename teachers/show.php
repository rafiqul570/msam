<?php
$url = 'http://localhost/msam/';
?>

<?php
$teacher = $_POST['teacher'];
$index_no = $_POST['index_no'];
include('../include/connect.php');
$con = connectBD();
$sql = "SELECT * FROM teachers WHERE teacher= '$teacher'AND index_no= '$index_no'";
$result = mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($result);
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
      <a class="nav-link" href="http://localhost/msam/">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
  </ul>
    
</nav> 

<!--------------//---------------------->
<div class="main-content">
  <div class="container">
  <div class="row clearfix">
    <div class="col-md-2">
  <a class="btn btn-success" href="view.php">GO BACK</a>
    </div>
    
    <div class="col-md-10">
   
   <?php if ($rowcount == 1){

} else {

  echo "Wrong Name Or Index-no. Please Try Again.";
}?>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

    
     <div style="border: 1px solid black;">
    <table class="table table-bordered">
    <tr>
    <td align="center">
    <h2>Moghia Salehia Alim Madrasha</h2>
    <h4>Kachua,Bagerhat</h4>
    </td>
    <td align="right" width="120"><img style="width: 100px"; src="../uploads/<?php echo $row['image'];?>"></td>
    </tr>
    </table>
      <table class="table table-bordered">
      <tr>
      <th>শিক্ষকের নামঃ</th>
      <td width="300"><?php echo $row['teacher'];?></td>
      <th>পদবী</th>
      <td width="250"><?php echo $row['posts'];?></td>
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
      <td><?php echo $row['birth'];?></td>
      <th width="200">চাকুরীতে প্রথম যোগদানের তারিখ-</th>
      <td><?php echo $row['f_join'];?></td>
      <th width="100">বেতন কোড</th>
      <td><?php echo $row['s_code'];?></td>
      </tr>
    <tr>
      <th width="150">বর্তমান পদে যোগদানের তারিখ-</th>
      <td><?php echo $row['p_join'];?></td>
      <th width="200">এমপিও ভুক্তির তারিখ-</th>
      <td><?php echo $row['mpo'];?></td>
      <th width="100">জাতীয় পরিচয় পত্র নং</th>
      <td><?php echo $row['nid'];?></td>
      <tr>
       <th width="100">মোবাইল</th>
      <td><?php echo $row['phone'];?></td>
       <th width="100">ই-মেইল</th>
      <td colspan="3"><?php echo $row['email'];?></td>
      </tr>
    </table>
    <h6>শিক্ষাগত যোগ্যতা</h6>
    <table class="table table-bordered">
      <tr align="center">
        <th width="160">পরীক্ষার নাম</th>
        <th>পাশের সন</th>
        <th>পাশের বিভাগ</th>
        <th>বোর্ড/বিশ্ববিদ্যালয়</th>
       </tr>
       
       <tr align="center">
         <td>এস এস সি/দাখিল</td>
         <td><?php echo $row['s_year'];?></td>
         <td><?php echo $row['s_division'];?></td>
         <td><?php echo $row['s_board'];?></td>
         </tr>
       
        <tr align="center">
        <td>এইচ এস সি/আলিম</td>
        <td><?php echo $row['h_year'];?></td>
        <td><?php echo $row['h_division'];?></td>
        <td><?php echo $row['h_board'];?></td>
       </tr>
      
       <tr align="center">
         <td>স্নাতক/ফাজিল</td>
        <td><?php echo $row['b_year'];?></td>
        <td><?php echo $row['b_division'];?></td>
        <td><?php echo $row['b_board'];?></td>
       </tr>
       
       <tr align="center">
         <td>স্নাতকোত্তর/কামির</td>
         <td><?php echo $row['m_year'];?></td>
         <td><?php echo $row['m_division'];?></td>
         <td><?php echo $row['m_board'];?></td>
       </tr>
       </table>

      <?php } ?>
      </table>
      </div>
      </div>
      <div class="col-md-0">

      </div>
      </div>
      </div>
      </div>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?php echo $url;?>/assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="<?php echo $url;?>/assets/js/Popper.min.js"></script> 
    <script type="text/javascript" src="<?php echo $url;?>/assets/js/bootstrap.min.js"></script>  
    
  </body>
</html>
 

