<?php
include "config.php";
$admin=new Admin();
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from spaceraceit.com/html/bankco/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:53 GMT -->
<head>
    <meta charset="UTF-8" /> 
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign In - WalletWizard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/aos.css" />
    <link rel="stylesheet" href="assets/css/output.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <section class="bg-white">
      <div class="flex flex-col lg:flex-row justify-between min-h-screen">
        <!-- Left -->
        <div class="lg:w-1/2 px-5 xl:pl-12 pt-10">
          <header>
            <a href="#" class=""> 
            <center> <img width=300px height=300px src="assets/images/logo/logo.png" alt="Logo" /> </center>
            </a>
          </header>
          <div class="max-w-[450px] m-auto pb-16">
            <header class="text-center mb-8">
              <h2
                class="text-bgray-900 text-4xl font-semibold font-poppins mb-2"
              >
                Admin Sign in to WalletWizard
              </h2>
              <p class="font-urbanis text-base font-medium text-bgray-600">
                Send, spend and save smarter
              </p>
            </header>
            
            <div class="relative mt-6 mb-5">
              <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
              </div>
              <div class="relative flex justify-center text-sm">
                <span class="bg-white px-2 text-base text-bgray-600"
                  >Continue with</span
                >
              </div>
            </div>
            <form action="controller/signin.php" method="POST">
              <div class="mb-4">
                <input
                  type="email"
                  class="text-bgray-800 text-base border border-bgray-300 h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base"
                  placeholder="Email"
                  name="email"
                  pattern="[^ @]*@[^ @]*"
                  required
                />
              </div>
              <div class="mb-6 relative">
                <input
                  type="password"
                  class="text-bgray-800 text-base border border-bgray-300 h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base"
                  placeholder="Password"
                  name="password"
                  id="a_password"
                  required
                >
                <button type="button" id="toggleButton" onclick="togglePasswordVisibility()" class="absolute top-4 right-4 bottom-4">
                <i id="toggleIcon" class="fa fa-eye"></i>
                </button>
                
              </div>
                 
              <button
                
                type="submit"
                name="submit"
                class="py-3.5 flex items-center justify-center text-white font-bold bg-success-300 hover:bg-success-400 transition-all rounded-lg w-full"
              >
                Sign In
              </button> 
            </form>
            
            <p class="text-bgray-600 text-center text-sm mt-6">
              @ 2023 WalletWizard. All Right Reserved.
            </p>
          </div>
        </div>
        <!-- Right -->
        <div class="lg:w-1/2 lg:block hidden bg-[#F6FAFF] p-20 relative">
          <ul>
            <li class="absolute top-10 left-8">
              <img src="assets/images/shapes/square.svg" alt="" />
            </li>
            <li class="absolute right-12 top-14">
              <img src="assets/images/shapes/vline.svg" alt="" />
            </li>
            <li class="absolute bottom-7 left-8">
              <img src="assets/images/shapes/dotted.svg" alt="" />
            </li>
          </ul>
          <div class="">
            <img
              src="assets/images/illustration/signin.svg"
              alt=""
            />
          </div>
          <div>
            <div class="text-center max-w-lg px-1.5 m-auto">
              <h3
                class="text-bgray-900 font-semibold font-popins text-4xl mb-4"
              >
                Speady, Easy and Fast
              </h3>
              <p class="text-bgray-600 text-sm font-medium">
                WalletWizard. help you track your expenses, split bills with the group and many more.
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

   

    <!--scripts -->

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/aos.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="assets/js/chart.js"></script>

    <script src="assets/js/main.js"></script>
<script>
function togglePasswordVisibility() {
  var passwordInput = document.getElementById("a_password");
  var toggleIcon = document.getElementById("toggleIcon");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    toggleIcon.classList.remove("fa-eye");
    toggleIcon.classList.add("fa-eye-slash");
  } else {
    passwordInput.type = "password";
    toggleIcon.classList.remove("fa-eye-slash");
    toggleIcon.classList.add("fa-eye");
  }
}
</script>
  </body>

<!-- Mirrored from spaceraceit.com/html/bankco/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:54 GMT -->
</html>
