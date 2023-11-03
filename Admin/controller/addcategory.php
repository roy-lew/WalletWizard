<?php
include "../config.php";
$admin=new Admin();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $stmt=$admin->cud("INSERT INTO `category`(`c_name`) VALUES ('$name')","Inserted");
echo"<script>alert('Inserted');window.location='../addcategory.php';</script>";
}

?>