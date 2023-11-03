<?php 
include "config.php";
$admin=new Admin();
if(!isset($_SESSION['u_id'])){
   header('location:signin.php');
}

$id=$_SESSION['u_id'];
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from spaceraceit.com/html/bankco/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:29 GMT -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Notifications</title>
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/aos.css" />
  <link rel="stylesheet" href="assets/css/output.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<style>
  .search-container {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.search-container input[type="text"] {
  padding: 8px;
  border-radius: 4px;
  border: none;
  margin-right: 5px;
}

.search-container button {
  padding: 8px 15px;
  border-radius: 4px;
  border: none;
  background-color: #007bff;
  color: white;
}

</style>


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


				
                

<main
            class="xl:px-[48px] px-6 pb-6 xl:pb-[48px] sm:pt-[156px] pt-[100px]"
          >
            <!-- write your code here-->
            <div class="w-full overflow-x-scroll">
                  <table class="w-full">
                    <tbody>
                      
                    <?php
                        $nstmt = $admin->ret("select * from `event_group` inner join `event` on event_group.e_id=event.e_id INNER JOIN `user` on `event`.u_id=`user`.`u_id` where event_group.u_id='$id' and status='Pending'");
                       while($row=$nstmt->fetch(PDO::FETCH_ASSOC)){
                       
                    ?>
                      
                      <tr class="bg-white">
                       
                        <td
                          class="whitespace-nowrap py-4 text-sm text-gray-500"
                        >
                          <div class="flex items-center gap-5">
                            <div class="w-[64px] h-[64px]">
                              <img
                                class="w-full h-full object-cover rounded-lg"
                                src="assets/images/avatar/aj.png"
                                alt=""
                              />
                            </div>
                            <div class="flex-1">
                              <h4 class="font-bold text-lg text-bgray-900">
                            <?php echo $row['e_name'] ?>
                              </h4>
                              
                            </div>
                          </div>
                        </td>
                        <td
                          class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                        >
                        Admin
                          <span
                            class="bg-error-50 text-sm text-error-300 font-medium rounded-lg px-3 py-4"
                            > <?php echo $row['u_name'] ?></span
                          >
                        </td>
                        <td
                          class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                        >
                         
                        </td>
                        <td
                          class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                        >              
                                        <a class="" href="controller/update_status.php?u_id=<?php echo $id; ?>&eid=<?php echo $row['e_id']?>">&#x2705; </a>
                                          
                                            </td>
                          <!-- <a
                            href="controller/"
                            class=" hover:transition rounded-xl px-30"
                          >
                          
                          </a> -->
                        </td>
                        <td
                          class="whitespace-nowrap pr-3 py-4 text-sm text-gray-500 rounded-r-lg"
                        >
                          <button class="">
                            <svg
                              width="24"
                              height="24"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M5 13C5.55228 13 6 12.5523 6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13Z"
                                stroke="#94A3B8"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                stroke="#94A3B8"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                              <path
                                d="M19 13C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13Z"
                                stroke="#94A3B8"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              />
                            </svg>
                          </button>
                        </td>
                    <?php } ?>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            <!-- write your code here-->
          </main>
        </div>
      </div>
    </div>
    <!-- layout end -->
    <!-- Modal -->



    <!--scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/quill.min.js"></script>

    <script src="assets/js/main.js"></script>
  </body>

<!-- Mirrored from spaceraceit.com/html/bankco/users.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:46 GMT -->
</html>
