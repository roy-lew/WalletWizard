<?php
include "../config.php";
$admin=new Admin();
$uid=$_GET['uid'];
$eid=$_GET['eid'];
$stmt=$admin->cud("DELETE FROM `event_group` where `u_id`='$uid' and `e_id`='$eid'",'DELETED');
echo "<script>alert('Deleted Sucessfully');window.location='../eventset.php?eid=$eid'</script>";
?>