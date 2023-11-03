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
<!-- write your code here-->
<div
  class="grid lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-3 lg:gap-4 xl:gap-6"
>

  <!-- Single Integration Connect-->
  <div class="bg-white rounded-lg p-6 relative">
  <?php 
  
        $stmt=$admin->ret("SELECT * FROM `event` inner join `event_group` on event.e_id=event_group.e_id where `event_group`.`u_id`='$id' and `event_group`.`status`='Accepted'");
                          
           while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                              
         ?>
    <div class="flex space-x-5">
      <div class="shrink-0">
      <span class="item-ico">
                            <svg
                              width="28"
                              height="41"
                              viewBox="0 0 18 21"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                class="path-1"
                                d="M0 8.84719C0 7.99027 0.366443 7.17426 1.00691 6.60496L6.34255 1.86217C7.85809 0.515019 10.1419 0.515019 11.6575 1.86217L16.9931 6.60496C17.6336 7.17426 18 7.99027 18 8.84719V17C18 19.2091 16.2091 21 14 21H4C1.79086 21 0 19.2091 0 17V8.84719Z"
                                fill="#1A202C"
                              />
                              <path
                                class="path-2"
                                d="M5 17C5 14.7909 6.79086 13 9 13C11.2091 13 13 14.7909 13 17V21H5V17Z"
                                fill="#22C55E"
                              />
                            </svg>
                          </span>
      </div>
      <div class="">
        <h3 class="text-2xl text-bgray-900 font-bold">
        <?php echo $row['e_name'] ?>
        </h3>
      </div>
    </div>
    <p class="pt-5 pb-8 text-lg text-bgray-600">
    <?php echo $row['description'] ?>
    </p>
   <a href="eventset.php?eid=<?php echo $row['e_id'] ?>"> <button
      class="text-base w-full text-success-300 font-medium h-12 rounded-md border border-success-300 hover:text-white hover:bg-success-300 transition duration-300 ease-in-out"
    >
     Active
    </button></a>
   
  </div>
  <!-- Single Integration Disconnect-->
  
  <!-- Single Integration Disconnect-->
  <div class="bg-white rounded-lg p-6 relative">

    <?php }?>
  </div> 
  <!-- Single Integration Disconnect-->
 
  <!-- Single Integration Connect-->
  
  
  <!-- Single Integration Connect-->
  
  <!-- Single Integration Connect-->
  
</div>
<!-- write your code here-->
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
