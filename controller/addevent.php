<?php
include '../config.php';
$admin=new Admin();
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $budget=$_POST['budget'];
    $descript=$_POST['discript'];
     
    $date=$_POST['date'];
   $uid=$_SESSION['u_id'];
    
   //create Event
    $stmt=$admin->Rcud("INSERT INTO `event` (`e_name`,`budget`,`description`,`u_date`,`u_id`) VALUES ('$name','$budget','$descript','$date','$uid')",'INSERTED');
       
    //create default participent(Add this user to first event group)
    $stmt1=$admin->cud("INSERT INTO `event_group` (`u_id`,`c_date`,`status`,`e_id`) VALUES ('$uid',now(),'Accepted','$stmt')",'INSERTED');


    echo "<script>alert('Event added Succesfully');window.location='../event.php';</script>";
}
?>