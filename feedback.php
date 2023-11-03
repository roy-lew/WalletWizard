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
    <!-- layout start -->
    <div class="w-full layout-wrapper active">
      <div class="w-full flex relative">
        <?php include "sidebar.php" ?>
        <div class="body-wrapper flex-1 overflow-x-hidden">
          <?php include "header.php" ?>
          <main
            class="w-full xl:px-[48px] px-6 pb-6 xl:pb-[48px] sm:pt-[156px] pt-[100px]"
          > <!-- write your code here-->
            <div class="lg:grid grid-cols-12 gap-10 flex flex-col-reverse">
              <!-- Left Column -->
              <div class="2xl:col-span-8 xl:col-span-7">
                      <h3
                        class="text-2xl font-bold pb-5 text-bgray-900 border-b border-bgray-200"
                      >
                        Feedback Form
                      </h3>
                
                <div class="rounded-lg bg-white px-6 py-8">
                  <div class="2xl:flex justify-between gap-12">
                    <!-- Form -->
                    <form action="controller/feedback.php" method="POST">
                      <div class="mt-5 mb-6">
                        <center><h4 class="font-bold text-bgray-900 text-lg mb-4">
                          Queries & Feedback 
                        </h4></center>
                        <label for="title" class="block text-base font-semibold mb-2"
                          >Title</label
                        >
                        <input required
                          type="text"
                          placeholder="Query/Feedback"
                          name="title"
                          class="bg-bgray-50 w-full p-4 rounded-lg border-0 focus:border focus:border-success-300 focus:ring-0"
                        />
                      </div>
                      <div>
                      <label for="desc" class="block text-base font-semibold mb-2"
                          >Description</label
                    >
                    <textarea required
                    name="desc"
                    type="text"
                      class="w-full border border-bgray-300 rounded-lg py-3 px-4 h-36 focus:border focus:border-success-300 focus:ring-0"
                    ></textarea>
                  </div>
                  <div>
                      <label for="date" class="block text-base font-semibold mb-2"
                          >Date of submission</label
                    >
                    <input required
                    id="dateInput" max=""
                    name="date"
                    type="date"
                      class="bg-bgray-50 w-full p-4 rounded-lg border-0 focus:border focus:border-success-300 focus:ring-0"
                    />
                  </div>
                      <div class="flex justify-end">
                        <button
                        type=submit
                        name=submit
                          class="rounded-lg bg-success-300 px-12 py-3.5 transition-all text-white font-semibold hover:bg-success-400"
                        >
                          Submit
                        </button>
                      </div>
                    </form>
                    <!-- Tabs -->
                    
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

    <!--scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="assets/js/quill.min.js"></script>
    <script src="assets/js/chart.js"></script>

    <script src="assets/js/main.js"></script>
    </script>

<script src="assets/js/main.js"></script>
<script>
const dateInput = document.getElementById('dateInput');
const today = new Date().toISOString().split('T')[0];
dateInput.max = today;
</script>
  </body>

<!-- Mirrored from spaceraceit.com/html/bankco/support-ticket.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:48 GMT -->
</html>
