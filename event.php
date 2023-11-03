<?php
include "config.php";
$admin= new Admin();
if(!isset($_SESSION['u_id'])){
  header('location:signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from spaceraceit.com/html/bankco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:29 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    <link rel="stylesheet" href="assets/css/flatpickr.min.css" />
    <link rel="stylesheet" href="assets/css/output.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!-- layout start -->
    <div class="w-full layout-wrapper active">
      <div class="w-full flex relative">
        <?php include "sidebar.php" ?>
        <div class="body-wrapper flex-1 overflow-x-hidden">
          <?php include "header.php" ?>
          <main
            class="w-full xl:px-[48px] px-6 pb-6 xl:pb-[48px] sm:pt-[156px] pt-[100px]"
          >
          <div id="tab1" class="tab-pane active">
                  <div
                    class="xl:grid grid-cols-12 gap-12 flex 2xl:flex-row flex-col-reverse"
                  >
                    <div class="2xl:col-span-8 xl:col-span-7">
                      <h3
                        class="text-2xl font-bold pb-5 text-bgray-900 border-b border-bgray-200"
                      >
                        Add Event
                      </h3>
                      <div class="mt-8">
                        
                        <form action="controller/addevent.php" class="space-y-6" method="POST">
                          <div class="flex flex-col md:flex-row justify-between gap-4">
                            <div>
                              <label
                                for="name"
                                class="text-sm text-bgray-500 block mb-2.5 text-left"
                                >Event Name</label
                              >
                              <input required
                                type="text"
                                name="name"
                                class="border border-bgray-300 w-full rounded-lg py-3 px-4 h-10 focus:border focus:border-success-300 focus:ring-0"
                              />
                            </div>
                  </div>
                  <div>
                    <label
                      for="lname"
                      class="text-sm text-bgray-500 block mb-2.5 text-left"
                      >Budget</label
                    >
                    <input required
                      type="number"
                      name="budget"
                      class="w-full border border-bgray-300 rounded-lg py-3 px-4 h-10 focus:border focus:border-success-300 focus:ring-0"
                    />
                  </div>
                  
                  
                  <div>
                    <label
                      for="date of event"
                      class="text-sm text-bgray-500 block mb-2.5 text-left"
                      >Date of Event</label
                    >
                    <input required
                    id="dateInput" max=""
                      type="date"
                      name="date"
                      class="w-full border border-bgray-300 rounded-lg py-3 px-4 h-10 focus:border focus:border-success-300 focus:ring-0"
                    />
                  </div>
                  <div> 
                    <label
                      
                      class="text-sm text-bgray-500 block mb-2.5 text-left"
                      >Discription</label
                    >
                    <textarea
                    name="discript" required
                      class="w-full border border-bgray-300 rounded-lg py-3 px-4 h-36 focus:border focus:border-success-300 focus:ring-0"
                    ></textarea>
                  </div>
                  <div class="flex justify-end">
                    <button
                    
                    name="submit"
                      class="bg-success-300 hover:bg-success-400 text-white text-base font-medium rounded-lg py-3 px-6"
                    >
                      Add Event
                    </button>
                  </div>
                </form>
                      </div>
                    </div>
                  </div>
                </div>
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
    </script>

<script src="assets/js/main.js"></script>
<script>
const dateInput = document.getElementById('dateInput');
const today = new Date().toISOString().split('T')[0];
dateInput.max = today;
</script>
    <!-- <script src="assets/js/main.js"></script> -->
  </body>

<!-- Mirrored from spaceraceit.com/html/bankco/users.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:46 GMT -->
</html>