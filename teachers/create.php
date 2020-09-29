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
    <a class="btn btn-success" href="index.php">GO BACK</a><br><br>
   
    <h2 align="center">Add New Teacher Information</h2><br>
     
   <form action="store.php" enctype="multipart/form-data" method = "post">
     <div class="teachers">
     <table class="table table-bordered">
      <tr>
       <td align="center">
      
       <h2>Moghia Salehia Alim Madrasha</h2>
       <h4>Kachua,Bagerhat</h4>
        
       </td>
      </tr>
      </table>
      <table class="table table-bordered">
      <tr>
      <th width="150">শিক্ষকের নামঃ</th>
      <td><input type="text" class="form-control" id="teacher" placeholder="Teacher's name" name="teacher" required></td>
      <th width="100">পদবী</th>
      <td><input type="text" class="form-control" id="posts" placeholder="Post" name="posts" required></td>
      </tr>
      <tr>
      <th width="150"> পিতার নামঃ</th>
      <td><input type="text" class="form-control" id="father" placeholder="Father's name" name="father" required></td>
      <th width="150">ইনডেক্স-নং</th>
      <td><input type="text" class="form-control" id="index_no" placeholder="Index" name="index_no" required></td>
      </tr>
      
      <tr>
      <th width="100">জন্ম তারিখ-</th>
      <td width="250"><input type="text" class="form-control" id="birth" placeholder="Date of birth" name="birth" required></td>
      <th width="100">চাকুরীতে প্রথম যোগদানের তারিখ-</th>
     <td width="250"><input type="text" class="form-control" id="f_join" placeholder="Fist joining" name ="f_join" required></td>
      </tr>
      <tr>
       <th>বেতন কোড</th>
       <td><input type="text" class="form-control" id="s_code" placeholder="Sellery Code" name="s_code" required></td>
      <th>বর্তমান পদে যোগদানের তারিখ-</th>
       <td><input type="text" class="form-control" id="p_join" placeholder="present joining date" name="p_join" required></td>
       </tr>
       <tr>
       <th>এমপিও ভুক্তির তারিখ-</th>
      <td><input type="text" class="form-control" id="mpo" placeholder="MPO Date" name="mpo" required></td>
      
       <th>জাতীয় পরিচয় পত্র নং</th>
       <td width="150"><input type="text" class="form-control" id="nid" placeholder="NID" name="nid" required></td>
     </tr>
    <tr>
       <th>মোবাইল</th>
      <td><input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" required></td>
       <th>ই-মেইল</th>
      <td colspan="3"><input type="text" class="form-control" id="email" placeholder="E-mail" name="email" required></td>
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
         <td><input type="text" class="form-control" id="s_year" placeholder="Year" name="s_year" required></td>
         <td><input type="text" class="form-control" id="s_division" placeholder="Division" name="s_division" required></td>
         <td><input type="text" class="form-control" id="s_board" placeholder="Board" name="s_board" required></td>
         </tr>
        <tr>
        <td>এইচ এস সি/আলিম</td>
        <td><input type="text" class="form-control" id="h_year" placeholder="Year" name="h_year" required></td>
        <td><input type="text" class="form-control" id="h_division" placeholder="Division" name="h_division" required></td>
        <td><input type="text" class="form-control" id="h_board" placeholder="Board" name="h_board" required></td>
       </tr>
       <tr>
         <td>স্নাতক/ফাজিল</td>
        <td><input type="text" class="form-control" id="b_year" placeholder="Year" name="b_year" required></td>
        <td><input type="text" class="form-control" id="b_division" placeholder="Division" name="b_division" required></td>
        <td><input type="text" class="form-control" id="b_board" placeholder="Board/Univercity" name="b_board" required></td>
       </tr>
       <tr>
         <td>স্নাতোকত্তর/কামির</td>
         <td><input type="text" class="form-control" id="m_year" placeholder="Year" name="m_year" required></td>
         <td><input type="text" class="form-control" id="m_division" placeholder="Division" name="m_division" required></td>
         <td><input type="text" class="form-control" id="m_board" placeholder="Board/Univercity" name="m_board" required></td>
       </tr>
     </table>
        <h6>প্রশিক্ষণ</h6>
        <table class="table table-bordered">
          <tr>
         <div class="form-group">
    <td><label for="Name">প্রশিক্ষন শুরুর তারিখ</label></td>
     <td><input type="date" class="form-control" id="date" placeholder="Date" name="date" required></td>
  </div>
        
      </tr>
      <tr>
    <div class="form-group"> 
    <td><label for="date">প্রশিক্ষণের নাম</label></td>
    <td><select class="form-control" id="month" name="month">
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>November</option>
      <option>December</option>
    </select></td>
  </div> 
   </tr>
    <tr>
    <div class="form-group"> 
    <td><label for="subject">প্রশিক্ষণের বিষয়</label></td>
    <td><select class="form-control" id="month" name="month">
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>November</option>
      <option>December</option>
    </select></td>
  </div> 
   </tr>
    
      <div class="form-group">
    <td><label for="Name">প্রশিক্ষণের মেয়াদ</label></td>
     <td><input type="text" class="form-control" id="date" placeholder="-----------------তারিখ হইতে-----------------পর্যন্ত" name="date" required></td>
  </div>
       </table>

     <tr>
   <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" name="image">
  </div>
 
  <div class="form-group">
   <button type="submit" class="btn btn-primary">submit</button> 
  </div>
   </tr>
   
   </div>
   </form> 
</div>

   

<?php include('../include/footer.php')?>
