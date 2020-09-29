 <?php
 session_start();
if (! isset($_SESSION['login'])){
header ('Location:login.php');
} ?>


<?php
    
   $image = '';
    
   if (!empty($_FILES['image']['name'])) {
    
    //upload image
    
    $image = uniqid().date('d_m_y_H_i_s').sha1(" ", "_", $_FILES['image']['name']);

    $fileName = '../uploads/'.$image;

    move_uploaded_file($_FILES['image']['tmp_name'], $fileName);
    
    if (!empty($std['image'])) {
        unlink('../' . $std['image']);
    }

       
   }
    
    $id= $_GET['id'];
    $teacher = $_POST['teacher'];
    $father = $_POST['father']; 
    $posts = $_POST['posts'];
    $index_no = $_POST['index_no'];
    $birth = $_POST['birth'];
    $f_join = $_POST['f_join'];
    $s_code = $_POST['s_code'];
    $p_join = $_POST['p_join'];
    $mpo = $_POST['mpo'];
    $nid = $_POST['nid'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $s_year = $_POST['s_year'];
    $s_division = $_POST['s_division'];
    $s_board = $_POST['s_board'];
    $h_year = $_POST['h_year'];
    $h_division = $_POST['h_division'];
    $h_board = $_POST['h_board'];
    $b_year = $_POST['b_year'];
    $b_division = $_POST['b_division'];
    $b_board = $_POST['b_board'];
    $m_year = $_POST['m_year'];
    $m_division = $_POST['m_division'];
    $m_board = $_POST['m_board'];
   	
    include('../include/connect.php');
    $con = connectBD();
    $sql = "UPDATE teachers SET teacher = '$teacher', father = '$father', posts = '$posts',
    index_no = '$index_no',birth = '$birth',f_join = '$f_join',s_code ='$s_code',p_join ='$p_join',
    mpo ='$mpo',nid = '$nid', phone = '$phone',email = '$email',s_year = '$s_year',
    s_division = '$s_division',s_board = '$s_board',h_year = '$h_year',h_division = '$h_division',
    h_board = '$h_board',b_year = '$b_year',b_division = '$b_division',b_board ='$b_board',
    m_year = '$m_year',m_division = '$m_division',m_board = '$m_board',image= '$image' WHERE id= $id";
    $result = mysqli_query($con,$sql); 
    header('Location:index.php');
   
 ?>