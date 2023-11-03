<?php
include "../config.php";
$admin=new Admin();
if(isset($_POST['submit']))
{
    $id=$_SESSION['u_id'];
    $name=$_POST['name'];
    $detail=$_POST['detail'];
    $amount=$_POST['amount'];
    $date=$_POST['date']; 
    $cid=$_POST['category'];
    $stmt=$admin->cud("INSERT INTO `personal_expense`(`exp_name`,`u_id`,`exp_details`,`exp_amount`,`exp_date`,`exp_status`,`c_id`) VALUES ('$name','$id','$detail','$amount','$date','Active','$cid')","Inserted");
    echo"<script>alert('Inserted');window.location='../personalexpense.php';</script>";
}

?>