<?php
include '../config.php';
$admin=new Admin();
$uid=$_SESSION['u_id'];
if(isset($_POST['submit'])){
    $id=$_GET['eid'];
    $expense_details=$_POST['detail'];
    $expense_amt=$_POST['amount'];
    
    
   
    $stmt=$admin->cud("INSERT INTO `event_expense`(`e_id`,`expense_details`, `expense_amt`, `expense_date`, `status`,`u_id`) VALUES ('$id',' $expense_details',' $expense_amt',now(),'Pending','$uid')","insert");
    echo "<script>alert('Expense Added  Sucessfully');window.location='../eventset.php?eid=$id'</script>";

}
?>