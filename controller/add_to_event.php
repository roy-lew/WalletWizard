<?php
include '../config.php';
$admin=new Admin();

    $id=$_GET['u_id'];
    $eid=$_GET['eid'];
    $u_id=$_SESSION['u_id'];
    
   
   
    
    $stmt=$admin->cud("INSERT INTO `event_group` (`u_id`,`status`,`e_id`,`con_id`) VALUES ('$u_id','Pending','$eid','$id')",'INSERTED');
      echo "<script>alert('Added to Event Group');window.location='../manageevent.php';</script>";

?>
