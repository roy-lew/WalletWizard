<?php
include "../config.php";
$admin=new Admin();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $budget=$_POST['budget'];

    $stmt2=$admin->ret("SELECT * From `user` WHERE `u_email`='$email'");
    $row=$stmt2->fetch(PDO::FETCH_ASSOC);
    $n=$stmt2->rowCount();
    if($n>0){
        echo"<script>alert('Email already exists');window.location='../signup.php';</script>";
    }
    else{
    $stmt=$admin->cud("INSERT INTO `user`(`u_name`, `u_email`, `u_contact`, `u_address`, `u_password`, `monthly_budget`,`u_status`,`c_date`) VALUES ('$name','$email','$contact','$address','$password','$budget','inactive',now())","Inserted");
    echo"<script>alert('Inserted');window.location='../signin.php';</script>";
}
}
?>