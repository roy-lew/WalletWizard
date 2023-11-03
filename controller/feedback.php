<?php
include "../config.php";
$admin=new Admin();
if(isset($_POST['submit']))
{
    $id=$_SESSION['u_id'];
    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $date=$_POST['date'];
    $stmt=$admin->cud("INSERT INTO `feedback`(`u_id`,`fb_title`,`message`,`date`,`status`) VALUES ('$id','$title','$desc','$date','Active')","submitted");
    echo"<script>alert('submitted successfully');window.location='../feedback.php';</script>";
}

?>