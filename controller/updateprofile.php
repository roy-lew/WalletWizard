<?php 
include '../config.php';
$admin=new Admin();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $budget=$_POST['budget'];
    $id=$_SESSION['u_id']; 
    
$stmt=$admin->cud("UPDATE `user` SET `u_name`='$name',`u_email`='$email',`u_contact`='$contact',`u_address`='$address',`monthly_budget`='$budget' WHERE `u_id`='$id'",'updated');
echo "<script>alert('Updated Successfullly');window.location='../profile.php';</script>";

}
