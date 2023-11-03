<?php 
include '../config.php';
$admin=new Admin();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email']; 
  
    $id=$_SESSION['a_id']; 
    
$stmt=$admin->cud("UPDATE `admin` SET `a_name`='$name',`a_email`='$email'  WHERE `a_id`='$id'",'updated');
echo "<script>alert('Updated Successfullly');window.location='../profile.php';</script>";

}