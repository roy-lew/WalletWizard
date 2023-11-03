<?php
include "../config.php";
$admin=new Admin();

$uid=$_SESSION['u_id'];
$eid=$_GET['exp_id'];
$stmt=$admin->cud("DELETE FROM `personal_expense` where `u_id`='$uid' and `exp_id`='$eid'",'DELETED');
echo "<script>alert('Deleted Sucessfully');window.location='../viewpersonalexpense.php'</script>";

?>