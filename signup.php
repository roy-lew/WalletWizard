<?php
include "config.php";
$admin=new Admin();
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from spaceraceit.com/html/bankco/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:54 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign Up - WalletWizard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
                Sign in to WalletWizard.
              </h2>
              <p class="font-urbanis text-base font-medium text-bgray-600">
                Spend and save smarter
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
            <form action="controller/register.php" method="POST">
              <div class="flex-col md:flex-row gap-4 justify-between mb-4">
                <div>
                  <input
                    type="text"
                    name="name"
                    class="text-bgray-800 text-base border border-bgray-300 h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base"
                    placeholder="Your Name"
                    id="u_name"
                    required
                  />
                </div>
              </div>
              <div class="mb-4">
                <input
                  type="email"
                  name="email"
                  class="text-bgray-800 text-base border border-bgray-300 h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base"
                  placeholder="Email"
                  id="u_email"
                  pattern="[^ @]*@[^ @]*"
                  required
                />
              </div>
              <div class="mb-4">
                <input
                  type="tel"
                  name="contact"
                  class="text-bgray-800 text-base border border-bgray-300 h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base"
                  placeholder="Contact"
                  id="u_contact"
                  minlength="10"
                  maxlength="10"
                  required
                />
              </div>
              <div class="mb-4">
                <input
                  type="text"
                  name="address"
                  class="text-bgray-800 text-base border border-bgray-300 h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base"
                  placeholder="Address"
                  id="u_address"
                  required
                />
              </div>
              <div class="mb-6 relative">
                <input
                  type="password"
                  name="password"
                  class="text-bgray-800 text-base border border-bgray-300 h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base"
                  placeholder="Password"
                  id="u_password" oninput="validatePassword()" required>

                 
                <button type="button" id="toggleButton" onclick="togglePasswordVisibility()" class="absolute top-4 right-4 bottom-4">
                <i id="toggleIcon" class="fa fa-eye"></i>
                </button>
                </div>
                <span id="password-error" style="color: red;"></span>
                
              <div class="mb-4">
                <input
                  type="number"
                  name="budget"
                  class="text-bgray-800 text-base border border-bgray-300 h-14 w-full focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base"
                  placeholder="Set Monthly budget"
                  id="monthly_budget"
                  required
                />
              </div>
              
              <button
                
                type="submit"
                name="submit"
                class="py-3.5 flex items-center justify-center text-white font-bold bg-success-300 hover:bg-success-400 transition-all rounded-lg w-full"
              >
                Sign Up
              </button>
            </form>
            <!-- Form Bottom -->
            <p class="text-center text-bgray-900 text-base font-medium pt-7">
              Already have an account?
              <a href="signin.php" class="font-semibold underline">Sign In</a>
            </p>
            
            <!-- Copyright -->
            <p class="text-bgray-600 text-center text-sm mt-6">
              &copy; 2023 WalletWizard. All Right Reserved.
            </p>
          </div>
        </div>
        <!-- Right -->
        <div class="lg:w-1/2 lg:block hidden bg-[#F6FAFF] p-20 relative">
          
          <div class="">
            <img
              src="assets/images/illustration/signin.svg"
              alt=""
            />
          </div>
          <br>
          <br>
          <div>
            <div class="text-center max-w-lg px-1.5 m-auto">
              <h3
                class="text-bgray-900 font-semibold font-popins text-4xl mb-4"
              >
              Your Path to Financial Wellness Starts Here
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

    <script src="assets/js/main.js"></script>
    <script>
  function validatePassword() {
    const passwordInput = document.getElementById('u_password');
    const passwordError = document.getElementById('password-error');
    const password = passwordInput.value;

    // Define your validation criteria
    const lowercaseRegex = /^(?=.*[a-z])/;
    const uppercaseRegex = /^(?=.*[A-Z])/;
    const digitRegex = /^(?=.*\d)/;
    const specialCharRegex = /^(?=.*[@$!%*?&])/;
    const minLength = 8;

    // Perform validation
    let errorMessage = '';

    if (!lowercaseRegex.test(password)) {
      errorMessage += 'Password must contain at least one lowercase letter. ';
    }

    if (!uppercaseRegex.test(password)) {
      errorMessage += 'Password must contain at least one uppercase letter. ';
    }

    if (!digitRegex.test(password)) {
      errorMessage += 'Password must contain at least one digit. ';
    }

    if (!specialCharRegex.test(password)) {
      errorMessage += 'Password must contain at least one special character. ';
    }

    if (password.length < minLength) {
      errorMessage += `Password must be at least ${minLength} characters long. `;
    }

    // Display the error message or clear it if the password is valid
    if (errorMessage) {
      passwordError.textContent = errorMessage;
    } else {
      passwordError.textContent = '';
    }
  }

</script>
<script>
function togglePasswordVisibility() {
  var passwordInput = document.getElementById("u_password");
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

<!-- Mirrored from spaceraceit.com/html/bankco/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:54 GMT -->
</html>
