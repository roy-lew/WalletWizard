<?php 
include '../config.php';
$admin=new Admin();
if(isset($_POST['submit'])){
$cid =$_GET['cid'];
    $cat_name =$_POST['c_name'];
   
    $stmt = $admin->cud("UPDATE `category` SET `c_name`='$cat_name' WHERE `c_id`='$cid'","updated");

    echo "<script> alert('Category updated successfully'); window.location='../viewcategory.php'</script>";

}
    



?>