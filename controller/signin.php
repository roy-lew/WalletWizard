<?php
include "../config.php";
$admin=new Admin();
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $stmt=$admin->ret("SELECT * FROM `user` WHERE `u_email`='$email' and `u_password`='$password'");
    $num=$stmt->rowCount();
    if($num>0)
    {
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['u_id']=$row['u_id'];
        echo "<script>alert('Login Successful');window.location='../index.php';</script>";
    }
    else
    {
        echo "<script>alert('You have entered wrong password');window.location='../signin.php';</script>";
    }
}
?>