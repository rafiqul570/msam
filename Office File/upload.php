<?php

$con = mysqli_connect('localhost','root','','sms');
$sql = "SELECT * FROM uploads";
$result = mysqli_query($con,$sql);
if(isset($_POST['btn-upload']))
{    
  
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $date = $_POST['date'];
 $subject = $_POST['subject'];
 $folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $con = mysqli_connect('localhost','root','','sms');
  $sql="INSERT INTO uploads(file,type,size,date,subject) VALUES('$final_file','$file_type','$new_size','$date','$subject')";
  mysqli_query($con,$sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='index.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>
  <?php
 }
}
?>