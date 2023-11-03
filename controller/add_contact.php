<?php
include '../config.php';
$admin=new Admin();

$eid=$_GET['e_id'];
$u_id=$_GET['u_id'];


$cstmnt = $admin->ret("select * from event_group where `e_id`='$eid' and `u_id`='$u_id'");
$num=$cstmnt->rowCount();
if($num > 0)
{
    echo "<script>alert('This participant is already existing in the event".$eid."||".$u_id."');history.back();</script>";
}
else{
    $stmt=$admin->cud("INSERT INTO `event_group`( `c_date`, `status`, `e_id`, `u_id`) VALUES (now(),'Pending','$eid','$u_id') ",'INSERTED');
    echo "<script>alert('Added the participant');window.location='../eventset.php?eid=".$eid."';</script>";
}



?>
