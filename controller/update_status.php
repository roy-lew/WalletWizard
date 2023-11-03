<?php 
include '../config.php';
$admin=new Admin();

$u_id=$_GET['u_id'];
$e_id=$_GET['eid'];

$stmt=$admin->cud("UPDATE `event_group` SET `status`='Accepted' WHERE `u_id`='$u_id' and `e_id`='$e_id'",'updated');
echo "<script>alert('Approved Successfullly');window.location='../notification.php';</script>";


?>