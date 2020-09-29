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
    $sql = "SELECT *FROM teachers WHERE id= $id";
    $result = mysqli_query($con,$sql);
    $std = mysqli_fetch_assoc($result);
    
?>
 
<a class="btn btn-success" href="index.php">Back</a>
<div class="content">
   <div style="color: blue;"><h1 align="center">Edit Teacher's Information</h1></div><br>
   <form action="update.php?id=<?php echo $std['id'];?>"enctype="multipart/form-data" method = "post">

   <table class="table table-bordered">
      <tr>
       <td align="center">
        <div style="color: green;  margin-left: 100px;">
       <h2>Moghia Salehia Alim Madrasha</h2>
       <h4>Kachua,Bagerhat</h4>
       </div>
       </td>
      </tr>
      </table>
      <table class="table table-bordered">
      <tr>
      <th width="250">শিক্ষকের নামঃ</th>
      <td><input type="text" class="form-control" id="teacher" value="<?php echo $std['teacher'];?>"  placeholder="Teacher's name" name="teacher" required></td>
      <th width="100">পদবী</th>
      <td><input type="text" class="form-control" id="posts" value="<?php echo $std['posts'];?>" placeholder="Post" name="posts" required></td>
      </tr>
      <tr>
      <th width="250"> পিতার নামঃ</th>
      <td><input type="text" class="form-control" id="father" value="<?php echo $std['father'];?>" placeholder="Father's name" name="father" required></td>
      <th width="150">ইনডেক্স-নং</th>
      <td><input type="text" class="form-control" id="index_no" value="<?php echo $std['index_no'];?>" placeholder="Index" name="index_no" required></td>
      </tr>
       </table>
       <table class="table table-bordered">
      <tr>
      <th width="150">জন্ম তারিখ-</th>
      <td><input type="text" class="form-control" id="birth" value="<?php echo $std['birth'];?>" placeholder="Date of birth" name="birth" required></td>
      <th width="200">চাকুরীতে প্রথম যোগদানের তারিখ-</th>
     <td><input type="text" class="form-control" id="f_join" value="<?php echo $std['f_join'];?>" placeholder="Fist joining" name ="f_join" required></td>
       <th width="100">বেতন কোড</th>
       <td><input type="text" class="form-control" id="s_code" value="<?php echo $std['s_code'];?>" placeholder="Sellery Code" name="s_code" required></td>
      </tr>
    <tr>
      <th width="100">বর্তমান পদে যোগদানের তারিখ-</th>
       <td><input type="text" class="form-control" id="p_join" value="<?php echo $std['p_join'];?>" placeholder="present joining date" name="p_join" required></td>
       <th>এমপিও ভুক্তির তারিখ-</th>
      <td><input type="text" class="form-control" id="mpo" value="<?php echo $std['mpo'];?>" placeholder="MPO Date" name="mpo" required></td>
       <th>জাতীয় পরিচয় পত্র নং</th>
       <td width="200"><input type="text" class="form-control" id="nid" value="<?php echo $std['nid'];?>" placeholder="NID" name="nid" required></td>
    </tr>
    <tr>
       <th width="100">মোবাইল</th>
      <td><input type="text" class="form-control" id="phone" value="<?php echo $std['phone'];?>" placeholder="Phone" name="phone" required></td>
       <th width="100">ই-মেইল</th>
      <td colspan="3"><input type="text" class="form-control" id="email" value="<?php echo $std['email'];?>" placeholder="E-mail" name="email" required></td>
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
       <tr>
         <td>এস এস সি/দাখিল</td>
         <td><input type="text" class="form-control" id="s_year" value="<?php echo $std['s_year'];?>" placeholder="Year" name="s_year" required></td>
         <td><input type="text" class="form-control" id="s_division" value="<?php echo $std['s_division'];?>" placeholder="Division" name="s_division" required></td>
         <td><input type="text" class="form-control" id="s_board" value="<?php echo $std['s_board'];?>" placeholder="Board" name="s_board" required></td>
         </tr>
        <tr>
        <td>এইচ এস সি/আলিম</td>
        <td><input type="text" class="form-control" id="h_year" value="<?php echo $std['h_year'];?>" placeholder="Year" name="h_year" required></td>
        <td><input type="text" class="form-control" id="h_division" value="<?php echo $std['h_division'];?>" placeholder="Division" name="h_division" required></td>
        <td><input type="text" class="form-control" id="h_board" value="<?php echo $std['h_board'];?>" placeholder="Board" name="h_board" required></td>
       </tr>
       <tr>
         <td>স্নাতক/ফাজিল</td>
        <td><input type="text" class="form-control" id="b_year" value="<?php echo $std['b_year'];?>" placeholder="Year" name="b_year" required></td>
        <td><input type="text" class="form-control" id="b_division" value="<?php echo $std['b_division'];?>" placeholder="Division" name="b_division" required></td>
        <td><input type="text" class="form-control" id="b_board" value="<?php echo $std['b_board'];?>" placeholder="Board/Univercity" name="b_board" required></td>
       </tr>
       <tr>
         <td>স্নাতকোত্তর/কামির</td>
         <td><input type="text" class="form-control" id="m_year" value="<?php echo $std['m_year'];?>" placeholder="Year" name="m_year" required></td>
         <td><input type="text" class="form-control" id="m_division" value="<?php echo $std['m_division'];?>" placeholder="Division" name="m_division" required></td>
         <td><input type="text" class="form-control" id="m_board" value="<?php echo $std['m_board'];?>" placeholder="Board/Univercity" name="m_board" required></td>

       </tr>
       </table> 

       <div class="form-group">
    <label for="image">Image:</label>
    <input type="file" class="form-control" name="image">
    <img style="width: 50px"; src="../uploads/<?php echo $std['image'];?>">
  </div>
 
  <button type="submit" class="btn btn-primary">Update</button>
 </form> 
</div>
  <?php include('../include/footer.php')?>

  <?php unset($_SESSION['error']);?>
 