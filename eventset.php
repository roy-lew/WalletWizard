<!DOCTYPE html>
<html lang="en">
<?php
include "config.php";
$admin=new Admin();

if (!isset($_SESSION['u_id'])) {
  header('location:signin.php');
}
$eid=$_GET['eid'];
$uid=$_SESSION['u_id'];
?>
<!-- Mirrored from spaceraceit.com/html/bankco/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:48 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>WalletWizard</title>
    <link rel="stylesheet" href="assets/css/font-awesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    <link rel="stylesheet" href="assets/css/output.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!-- layout start -->
    <div class="w-full layout-wrapper active">
      <div class="w-full flex relative">
        <?php include('sidebar.php'); ?>
        <div class="body-wrapper flex-1 overflow-x-hidden">
          <?php include('header.php'); ?>
          <main
            class="w-full xl:px-[48px] px-6 pb-6 xl:pb-[48px] sm:pt-[156px] pt-[100px]"
          >
            <!-- write your code here-->
            <div class="grid grid-cols-1 xl:grid-cols-12 bg-white rounded-xl">
              <!-- Sidebar -->
              <aside class="col-span-3 border-r border-bgray-200">
                <!-- Sidebar Tabs -->
                <div class="px-4 py-6">
                  <div
                    class="tab active flex gap-x-4 p-4 rounded-lg transition-all"
                    data-tab="tab1"
                  >
                  <div
                      class="w-12 tab-icon transition-all h-12 shrink-0 rounded-full inline-flex items-center justify-center bg-bgray-100"
                    >
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M2 6H6M2 12H6M2 18H6M18 6L10 6M14 10L10 10M8 22H18C20.2091 22 22 20.2091 22 18V6C22 3.79086 20.2091 2 18 2H8C5.79086 2 4 3.79086 4 6V18C4 20.2091 5.79086 22 8 22Z"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke="currentColor"
                        />
                      </svg>
                    </div>
                    <div>
                      <h4 class="text-base font-bold text-bgray-900">
                        Event Informations
                      </h4>
                      
                    </div>
                  </div>
                  <div
                    class="tab flex gap-x-4 p-4 rounded-lg transition-all"
                    data-tab="tab2"
                  >
                  <div
                      class="w-12 tab-icon transition-all h-12 shrink-0 rounded-full inline-flex items-center justify-center bg-bgray-100"
                    >
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <ellipse
                          cx="12"
                          cy="17.5"
                          rx="7"
                          ry="3.5"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linejoin="round"
                        />
                        <circle
                          cx="12"
                          cy="7"
                          r="4"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </div>
                    <div>
                      <h4 class="text-base font-bold text-bgray-900">
                        Event Participants
                      </h4>
                     
                    </div>
                  </div>
                 
                  <div
                    data-tab="tab4"
                    class="tab flex gap-x-4 p-4 group hover:bg-bgray-100 rounded-lg transition-all"
                  >
                    <div
                      class="w-12 tab-icon transition-all h-12 shrink-0 rounded-full inline-flex items-center justify-center bg-bgray-100"
                    >
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M18 15H12V7H18M18 15C19.1046 15 20 14.1046 20 13V9C20 7.89543 19.1046 7 18 7M18 15V20C18 21.1046 17.1046 22 16 22H8C6.89543 22 6 21.1046 6 20V4C6 2.89543 6.89543 2 8 2H16C17.1046 2 18 2.89543 18 4V7"
                          stroke-width="1.5"
                          stroke="currentColor"
                          stroke-linejoin="round"
                        />
                        <path
                          d="M13 19C13 19.5523 12.5523 20 12 20C11.4477 20 11 19.5523 11 19C11 18.4477 11.4477 18 12 18C12.5523 18 13 18.4477 13 19Z"
                          fill="currentColor"
                        />
                        <path
                          stroke="currentColor"
                          d="M20 10L12 10"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        />
                      </svg>
                    </div>
                    <div>
                      <h4 class="text-base font-bold text-bgray-900">
                      Event Expenses
                      </h4>
                     
                    </div>
                  </div>
                  <div
                    data-tab="tab5"
                    class="tab flex gap-x-4 p-4 rounded-lg transition-all"
                  >
                    <div
                      class="w-12 tab-icon transition-all h-12 shrink-0 rounded-full inline-flex items-center justify-center bg-bgray-100"
                    >
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill="currentColor"
                          d="M13.6831 10.0808L14.3138 10.4866L13.6831 10.0808ZM9.25 9C9.25 9.41421 9.58579 9.75 10 9.75C10.4142 9.75 10.75 9.41421 10.75 9H9.25ZM11.25 13.5C11.25 13.9142 11.5858 14.25 12 14.25C12.4142 14.25 12.75 13.9142 12.75 13.5H11.25ZM12.75 16C12.75 15.5858 12.4142 15.25 12 15.25C11.5858 15.25 11.25 15.5858 11.25 16H12.75ZM11.25 17C11.25 17.4142 11.5858 17.75 12 17.75C12.4142 17.75 12.75 17.4142 12.75 17H11.25ZM21.25 12C21.25 17.1086 17.1086 21.25 12 21.25V22.75C17.9371 22.75 22.75 17.9371 22.75 12H21.25ZM12 21.25C6.89137 21.25 2.75 17.1086 2.75 12H1.25C1.25 17.9371 6.06294 22.75 12 22.75V21.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75V1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75ZM12 2.75C17.1086 2.75 21.25 6.89137 21.25 12H22.75C22.75 6.06294 17.9371 1.25 12 1.25V2.75ZM13.25 9C13.25 9.24996 13.1774 9.48068 13.0524 9.67495L14.3138 10.4866C14.5899 10.0576 14.75 9.54634 14.75 9H13.25ZM10.75 9C10.75 8.30964 11.3096 7.75 12 7.75V6.25C10.4812 6.25 9.25 7.48122 9.25 9H10.75ZM12 7.75C12.6904 7.75 13.25 8.30964 13.25 9H14.75C14.75 7.48122 13.5188 6.25 12 6.25V7.75ZM11.25 13V13.5H12.75V13H11.25ZM13.0524 9.67495C12.9265 9.87065 12.7688 10.0731 12.5836 10.3033C12.4063 10.5237 12.1979 10.7764 12.011 11.0333C11.6424 11.5398 11.25 12.2007 11.25 13H12.75C12.75 12.6947 12.9003 12.3605 13.2239 11.9158C13.383 11.697 13.558 11.4851 13.7523 11.2436C13.9387 11.0119 14.1409 10.7554 14.3138 10.4866L13.0524 9.67495ZM11.25 16V17H12.75V16H11.25Z"
                        />
                      </svg>
                    </div>
                    <div>
                      <h4 class="text-base font-bold text-bgray-900">Split Bill</h4>
                      
                    </div>
                  </div>
                  
                </div>
                <!-- Progressbar -->
                
              </aside>
              <!--Tab Content -->
              <div class="py-8 px-10 col-span-9 tab-content">
                <!-- Personal Information -->
                <div id="tab1" class="tab-pane active">
                 
                      <h3
                        class="text-2xl font-bold pb-5 text-bgray-900 border-b border-bgray-200"
                      >
                        Event Information's
                      </h3>
                      <div class="space-y-5">
                        <br>
                          <div class="flex sm:flex-row flex-col sm:items-center items-end justify-between pb-6">

                           
                        <div class="relative p-6 bg-gray-100 rounded-lg">
                            <?php
                              $id=$_GET['eid'];
                              $stmt=$admin->ret("SELECT * FROM `event` inner join `event_group` on event.e_id=event_group.e_id where `event`.`e_id`='$id' and `event_group`.`status`='Accepted'");
                              
                              $eventrow=$stmt->fetch(PDO::FETCH_ASSOC);


                            ?>
                            <h4 class="text-base font-bold text-bgray-900 mb-2">
                              <?php echo $eventrow['e_name'];  ?>
                            </h4>
                            <p class="text-sm">
                             
                            <?php echo $eventrow['description'] ?>
                            </p>
                            <h5>Budget: <?php echo $eventrow['budget']; ?> </h5>
                            <h5>Event: <?php echo $eventrow['u_date']; ?></h5>
                           </div>
                          </div>
                      </div>
                  
                </div>
                <!-- Paticipents List -->
                <div id="tab2" class="tab-pane">
                  <h3 class="text-2xl font-bold text-bgray-900 mb-5">
                    Participants
                  </h3>
                  <input minlength="10" maxlength="10" type='tel' name='search' id="search" onkeyup="Search(this.value,<?php echo $id; ?>)" class="text-bgray-800 text-base border border-bgray-300 h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                  <br><br><br>
                  <div class="space-y-5">
                   <div id="search-result"
                      class="flex sm:flex-row flex-col sm:items-center items-end justify-between pb-5 border-b border-bgray-300"
                    >
                    </div>
                    <br>
                    <?php
                      $gstamnt = $admin->ret("SELECT * FROM `event_group` inner join user on event_group.u_id=`user`.u_id WHERE e_id='$id'");
                      while($grow=$gstamnt->fetch(PDO::FETCH_ASSOC))
                      {                     

                    ?>
                    <div
                      class="flex sm:flex-row flex-col sm:items-center items-end justify-between pb-5 border-b border-bgray-300"
                    >
                      <div class="flex gap-x-4">
                      <span class="item-ico">
                            <svg
                              width="44"
                              height="44"
                              viewBox="0 0 24 24"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <ellipse
                                cx="11.7778"
                                cy="17.5555"
                                rx="7.77778"
                                ry="4.44444"
                                class="path-1"
                                fill="#1A202C"
                              />
                              <circle
                                class="path-2"
                                cx="11.7778"
                                cy="6.44444"
                                r="4.44444"
                                fill="#22C55E"
                              />
                            </svg>
                          </span>
                        <div class="flex-1">
                          <h4
                            class="text-lg font-bold text-bgray-900"
                            id="availability-label"
                          >
                            <?php echo $grow['u_name']; ?>
                          </h4>
                          <p
                            class="text-base text-bgray-500"
                            id="availability-description"
                          >
                          Email ID: <?php echo $grow['u_email']; ?> | Contact Number: <?php echo $grow['u_contact']; ?>
                          </p>
                        </div>
                      </div><a href="controller/remove_group.php?uid=<?php echo $grow['u_id']?>&eid=<?php echo $grow['e_id']?>">
                      &#10060;</a>
                      <!-- <button
                        type="button"
                        class="switch-btn text-center relative inline-flex h-5 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none"
                        role="switch"
                        aria-checked="false"
                        aria-labelledby="availability-label"
                        aria-describedby="availability-description"
                      >
                        <span
                          aria-hidden="true"
                          class="pointer-events-none inline-block h-4 w-4 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"
                        ></span>
                      </button> -->
                    </div>
                    <?php
                    
                      }
                    ?>
                 </div>
                </div>
                <!-- Program & Resources -->
                  <!-- Payments -->
                <div id="tab4" class="tab-pane">
                  <!-- Cards -->
                  <div>
                  
                    <h3 class="text-2xl font-bold pb-5 text-bgray-900">
                      Event Expenses
                    </h3>
                    <div
                      class="grid 2xl:grid-cols-3 sm:grid-cols-2 grid-cols-1 2xl:gap-10 gap-5 pb-14"
                    >
                      <?php
                            $id=$_GET['eid'];
                            $nstmt1 = $admin->ret("select e_name,budget,COUNT(*) as ppl from `event_group` inner join `event` on event_group.e_id=event.e_id where event.e_id=$id;");
                          
                            $row1=$nstmt1->fetch(PDO::FETCH_ASSOC);
                    
                          
                        ?>
                      
                      <div class="relative p-6 bg-gray-100 rounded-lg">
                      
                        <div class="mb-5">
                          <!-- <img
                            src="assets/images/payments/payoner.svg"
                            alt=""
                          /> --> <center><h1  class="text-2xl  border border-bgray-1400 font-bold text-bgray-100 mb-2">
                           <?php echo $row1['e_name'] ?>
                          </h1></center>
                        </div>
                        <div class=" border border-bgray-100 focus-within:border-success-300  p-2 h-[98px] flex  justify-between">

                        <h4 class="text-xl font-bold text-bgray-900 mb-2">
                        No of People :
                        </h4>
                        <h4 class=" text-xl font-bold text-bgray-900 mb-2">
                        <?php echo   $row1['ppl']; ?>
                        
                    </h4>
                    </div>
                    <div class=" border border-bgray-100 focus-within:border-success-300  p-2 h-[98px] flex  justify-between">
                        <h4  class="text-xl font-bold text-bgray-900 mb-2">
                        Budget :
                        </h4>
                        <h4 style="color:green" class=" text-2xl font-bold text-bgray-900 mb-2 bg-dark">
                        ₹<?php echo   $row1['budget']; ?>/-
                        
                    </h4>
                    </div>
                    <div class=" border border-bgray-100 focus-within:border-success-300  p-2 h-[98px] flex  justify-between">

                        <h4 class="text-xl font-bold text-bgray-900 mb-2">
                        Total :
                        </h4>
                    
                        <?php 
                          $nstmt2 = $admin->ret("SELECT sum(expense_amt) as et FROM `event_expense` WHERE `e_id`=$id;");
                          
                          $row2=$nstmt2->fetch(PDO::FETCH_ASSOC);

                        ?>
                        <h4 style="color: rgb(220, 20, 60);" class=" text-2xl font-bold text-bgray-900 mb-2">
                        ₹<?php echo   $row2['et']; ?>/-
                         </h4>
                         </div>
                        
                           
                      </div>
                      <div class="2xl:w-[400px] lg:w-[250px] w-full">
                        <form action="controller/eventexpense.php?eid=<?php echo $id;?>" method="Post">
                        <div class="w-full">
                          <h3 class="text-lg font-bold text-bgray-900 mb-4">
                            Add Event Expenses
                          </h3>
                          
                          <div
                            class="w-full rounded-lg border border-bgray-200 focus-within:border-success-300 p-4 h-[98px] flex flex-col justify-between"
                          >
                            <p class="text-sm text-bgray-600 font-medium">
                              Expense Details
                            </p>
                            <div
                              class="w-full h-[35px] flex justify-between items-center"
                            >
                             
                              <label class="w-full">
                                <input required
                                  type="text"
                                  name="detail"
                                  class="focus:outline-none w-full p-0 focus:ring-0 border-none text-2xl font-bold text-bgray-900"
                                />
                              </label>
                             
                            </div>
                          </div>
                          <div
                            class="w-full rounded-lg border border-bgray-200 focus-within:border-success-300 p-4 h-[98px] flex flex-col justify-between"
                          >
                            <p class="text-sm text-bgray-600 font-medium">
                              Enter amount
                            </p>
                            <div
                              class="w-full h-[35px] flex justify-between items-center"
                            >
                              <span class="text-2xl text-bgray-900 font-bold"
                                >₹</span
                              >
                              <label class="w-full">
                                <input
                                  type="text"
                                  name="amount"
                                  class="focus:outline-none w-full p-0 focus:ring-0 border-none text-2xl font-bold text-bgray-900"
                                />
                              </label>
                              <div>
                                <img
                                  src="assets/images/avatar/members-3.png"
                                  alt="members"
                                />
                              </div>
                            </div>
                          </div>
                          <button
                          type="submit"
                          name="submit"
                            class="bg-success-300 hover:bg-success-400 transition-all text-white text-base font-medium w-full py-4 mt-7 rounded-lg"
                          >
                            Confirmed
                          </button>
                        </div>
                    
                    </form>
                      </div>



                  
                    </div>
                    <div class="flex 2xl:flex-row 2xl:space-x-11 flex-col space-y-20">
              <div class="2xl:flex-1 w-full">
                <div class="bg-white rounded-lg p-4 mb-8 items-center flex">
                      <h3>Expense List</h3>
                </div>
                <div class="w-full overflow-x-scroll">
                  <table class="w-full">
                    <thead>
                      <th align="left">Expence Date</th>
                      <th align="left">Description</th>
                      <th align="left">Amount</th>
                    </thead>
                    <tbody>
                    <?php
                      $stmt1=$admin->ret("SELECT * FROM `event_expense` inner join `event` on event_expense.e_id=`event`.e_id inner join `user` ON event_expense.u_id=user.u_id where `event_expense`.e_id='$id' group by event_expense.expense_id");
                      while($row=$stmt1->fetch(PDO::FETCH_ASSOC)){
                      ?>
                      <tr class="bg-white">

                        <td class="whitespace-nowrap py-4 text-sm text-gray-500 w-[400px] lg:w-auto">
                          <h2><?php echo $row['expense_date'];?></h2>
                        </td>
                        <td class="whitespace-nowrap py-4 text-sm text-gray-500 w-[400px] lg:w-auto"
                        >
                          <div class="flex items-center gap-5">
                            <div class="w-[64px] h-[64px]">
                             
                            <div class="flex-1">
                              <h4 class="font-bold text-lg text-bgray-900">
                              <?php echo $row['u_name'];?>
                              </h4>
                              <div>
                                <span
                                  class="font-medium text-base text-bgray-700"
                                  ><?php echo $row['expense_details']?> </span
                                >
                                <!-- <span class="text-gray-500"
                                  >Jakarta, Indonesia•</span
                                > -->
                                <!-- <span class="text-gray-500">2 days ago</span> -->
                              </div>
                            </div>
                          </div>
                        </td>
                        <td
                          class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                        >
                          <span
                            class="bg-success-50 text-sm text-success-300 font-medium rounded-lg py-1 px-3"
                            >₹ <?php echo $row['expense_amt'];?></span
                          >
                        </td>
                     
                        </tr>
                        <?php } ?>
                      </tbody>
                  </table>
                </div>
                
              </div>
              
            </div>

                    <!-- end -->
                  </div>
                  <!-- Slider -->
                  
                </div>
                <!-- Faq -->
                <div id="tab5" class="tab-pane">
                  <div class="">
                    <h3 class="text-2xl font-bold text-bgray-900  border-b border-bgray-200">Split Bill:</h3>
                    <br><br>
                    <div>
                      
                    <div class="flex 2xl:flex-row 2xl:space-x-11 flex-col space-y-20">
                   
         
              <div class="2xl:flex-1 w-full">
               
                <div>
                <div
                    class="grid 2xl:grid-cols-3 sm:grid-cols-2 grid-cols-1 2xl:gap-10 gap-5 pb-14"
                  >
                    <?php
                          $id=$_GET['eid'];
                         
                          $nstmt1 = $admin->ret("select e_name,budget,COUNT(*) as ppl from `event_group` inner join `event` on event_group.e_id=event.e_id where event.e_id=$id");
                        
                          $row1=$nstmt1->fetch(PDO::FETCH_ASSOC);
                  
                        
                      ?>
                    
                     <!-- <img
                          src="assets/images/payments/payoner.svg"
                          alt=""
                        /> --> <h1  class="text-2xl   font-bold text-bgray-100 mb-2  border-b border-bgray-200">
                          Event Name:
                         <?php echo $row1['e_name'] ?>
                        </h1>
                      </div>
                      <div class=" border border-bgray-100 focus-within:border-success-300  p-2 h-[98px] flex  justify-between">
                      <div class=" border border-bgray-100  focus-within:border-success-300  p-2 h-[98px] d-flex  justify-between">
                      <h4 class="text-2xl font-bold text-bgray-900 mb-2">
                    Budget
                      </h4>
                      <h4 class=" text-2xl font-bold text-bgray-900 mb-2">
                      ₹<?php echo   $row1['budget']; ?>/-

                      
                  </h4>
                      </div>
                  <div class="  border border-bgray-100 focus-within:border-success-300   p-2 h-[98px] d-flex  justify-between">
                  <?php 
                        $nstmt2 = $admin->ret("SELECT sum(expense_amt) as et FROM `event_expense` WHERE `e_id`=$id;");
                        
                        $row2=$nstmt2->fetch(PDO::FETCH_ASSOC);
                        // $bstmt=$admin->("SELECT * FROM `spilt_bill` where `e_id`='$id'")


                      ?>
                      <h4  class="text-2xl font-bold text-bgray-900 mb-2">
                      Total  
                      </h4>
                      <h4 style="color:green" class=" text-2xl font-bold text-bgray-900 mb-2 ">
                      ₹<?php echo   $row2['et']; ?>/-
                      
                  </h4>
                  </div>
                  <div class=" border border-bgray-100 focus-within:border-success-300  p-2 h-[98px] d-flex  justify-between">

                      <h4 class="text-2xl font-bold text-bgray-900 mb-1">
                     Participents
                      </h4>
                  
                     
                      <h4 style="color: rgb(220, 20, 60);" class=" text-2xl font-bold text-bgray-900 mb-2">
                      <?php echo   $row1['ppl']; ?>
                      
                       </h4>
                       </div>
                       <div class=" border border-bgray-100  focus-within:border-success-300  p-2 h-[98px] d-flex  justify-between">
                      <h4 class="text-2xl font-bold text-bgray-900 mb-2">
                     Share/Head
                      </h4>
                      <h4 class=" text-2xl font-bold text-bgray-900 mb-2">
                      ₹<?php 
                      
                      $perhead=$row2['et']/$row1['ppl'];
                      echo $perhead;
                      ?>/-
                      
                  </h4>
                      </div>
                  </div><br><br><br>
                  <div class="bg-white rounded-lg p-4 mb-8 items-center flex  border-b border-bgray-200">
                      <h3>Expense List</h3>
                </div>
                <div class="w-full overflow-x-scroll">
                  <table class="w-full">
                    <thead>
                      <th align="left">Participents</th>
                      <th align="left">Paid</th>
                      <th align="left">Balance</th>
                    </thead>
                    <tbody>
                    <?php
                      $stmt1=$admin->ret("SELECT `user`.`u_name`,IFNULL(SUM(event_expense.expense_amt),0) AS tt,IFNULL(SUM(event_expense.expense_amt),0)-$perhead AS Balance FROM `event_expense` INNER JOIN `user` ON `event_expense`.`u_id`=`user`.`u_id` WHERE event_expense.e_id='$id' GROUP BY event_expense.u_id;");
                      while($row=$stmt1->fetch(PDO::FETCH_ASSOC)){

                      
                      ?>
                      <tr class="bg-white">

                        <td class="whitespace-nowrap py-4 text-sm text-gray-500 w-[400px] lg:w-auto">
                        <h4 class="font-bold text-lg text-bgray-900">
                              <?php echo $row['u_name'];?>
                              </h4>
                        </td>
                       
                        <td
                          class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                        >
                          <span
                            class="bg-success-50 text-sm text-success-300 font-medium rounded-lg py-1 px-3"
                            >₹ <?php echo $row['tt'];?></span
                          >
                        </td>
                         <td
                          class="whitespace-nowrap px-2 py-4 text-sm text-gray-500"
                        >
                        <?php
                           if($row['Balance']==0){
                            echo '<span
                            class="bg-success-50 text-sm text-success-300 rounded-lg font-medium text-am px-3 py-1"
                            >'.$row['Balance'].'</span>';
                         }elseif($row['Balance']>0)
                         {
                          echo '<span
                          class="bg-success-50 text-sm text-success-300 rounded-lg font-medium text-am px-3 py-1"
                          >To Recieve ₹'.$row['Balance'].'</span>';
                         }else{
                          echo '<span
                          class="bg-bamber-50 rounded-lg text-sm text-bamber-500 font-medium text-am px-3 py-1"
                          >To pay ₹'.$row['Balance']-($row['Balance']*2).'</span>';
                         }



                        ?>
                          
                        </td>
                       
                      
                     
                        </tr>
                        
                        <?php } ?>
                      </tbody>
                  </table>
                </div>
                
              </div>
            </div>

                  </div>
                  </div>
                </div>
                
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
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script>
      $(".card-slider").slick({
        dots: true,
        infinite: true,
        autoplay: true,
        speed: 500,
        fade: true,
        cssEase: "linear",
        arrows: false,
      });
    </script>
    <script>
      AOS.init();
    </script>
    <script src="assets/js/quill.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
  <script>
					function Search(value,eid) {
						// if (value.length == 0) {
						// 	do666666666666666cument.getElementById("search-result").innerHTML = "";
						// 	document.getElementById("search-result").style.border = "0px";
						// 	return;
						// }
						var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function () {
							if (this.readyState == 4 && this.status == 200) {
								document.getElementById("search-result").innerHTML = this.responseText;
								//document.getElementById("search-result").style.border = "1px solid #A5ACB2";
							}
						}
						xmlhttp.open("GET", "search.php?val=" + value + "&e_id="+eid, true);
						xmlhttp.send();
					}
				</script>

<!-- Mirrored from spaceraceit.com/html/bankco/settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:53 GMT -->
</html>

