<?php
include "config.php";
$admin=new Admin();
$id= $_SESSION['u_id'];
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from spaceraceit.com/html/bankco/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:29 GMT -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>WalletWizard</title>
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/aos.css" />
  <link rel="stylesheet" href="assets/css/output.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <!-- layout start -->
  <div class="w-full layout-wrapper active">
    <div class="w-full flex relative">
 <?php include 'sidebar.php'?>
      <div class="body-wrapper flex-1 overflow-x-hidden">
      <?php include 'header.php'?>
<main
class="w-full xl:px-[48px] px-6 pb-6 xl:pb-[48px] sm:pt-[156px] pt-[100px]"
>
<div class="w-full rounded-xl bg-white px-7 py-11 mb-[48px]">
   <?php
  $stmt=$admin->ret("SELECT SUM(exp_amount) AS total_amount
  FROM `personal_expense`
  WHERE `u_id` = $id;
  ");
 $row=$stmt->fetch(PDO::FETCH_ASSOC);
 $stmt1=$admin->ret("SELECT * from `user` where `u_id`='$id' ");
 $row1=$stmt1->fetch(PDO::FETCH_ASSOC);

 
  $available=$row1['monthly_budget']-$row['total_amount'];
  if($row1['monthly_budget']>$row['total_amount']){
  ?> 
                  <div class="border border-bgray-300 rounded-lg p-8 pb-12"> 
                    <h3 class="text-2xl font-semibold text-bgray-900">
                      Total Balance
                    </h3>
                    <h2
                      class="text-4xl font-bold font-poppins text-bgray-900 mb-2"
                    >
                     ₹<?php echo  $available; ?>/-
                      <span
                        class="text-base font-medium uppercase text-bgray-500"
                        >Rupee</span
                      >
                    </h2>
                    
                  </div>
                  <div class="flex justify-center -mt-6">
                    <button
                      class="py-3 px-6 border bg-white border-bgray-500 rounded-lg text-sm font-medium text-bgray-600"
                    >
                     Change budget amount
                    </button>
                  </div>
                 <a href="personalexpense.php"> <button
                    class="bg-success-300 hover:bg-success-400 transition-all text-white py-4 w-full font-bold rounded-lg mt-14"
                  >
                    Add Money
                  </button></a>
                </div>
                <?php } else { ?>
                  <div class="border border-bgray-300 rounded-lg p-8 pb-12"> 
                    <h3 class="text-2xl font-semibold text-bgray-900">
                   Wallet Is Empty
                    </h3>
                    <h2
                      class="text-4xl font-bold font-poppins text-bgray-900 mb-2"
                    >
                     ₹0/-
                      <span
                        class="text-base font-medium uppercase text-bgray-500"
                        >Rupee</span
                      >
                    </h2>
                    
                  </div>
                  <div class="flex justify-center -mt-6">
                    <button style="color:red"
                      class="py-3 px-6 border bg-white border-bgray-500 rounded-lg text-sm font-medium text-bgray-600"
                    >
                   !! ..........Alert......... !!
                    </button>
                  </div>
                 <a href="#"> <button
                    class="bg-success-300 hover:bg-success-400 transition-all text-white py-4 w-full font-bold rounded-lg mt-14"
                  >
                    Add Money
                  </button></a>
                </div>

                  <?php } ?>
            
                </main>
</div>
</div>
</div>
<!-- layout end -->

<!--scripts -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/slick.min.js"></script>
<script>
AOS.init();
</script>
<script src="assets/js/chart.js"></script>

<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from spaceraceit.com/html/bankco/integrations.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:42 GMT -->
</html>
