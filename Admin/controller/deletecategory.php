<?php 
include '../config.php';
$admin=new Admin();

   
    $cid = $_GET['cid'];
    $stmt = $admin->cud("DELETE FROM `category` WHERE `c_id`='$cid'", "deleted");

    echo "<script> alert('Category deleted successfully'); window.location='../viewcategory.php'</script>";
    



?>