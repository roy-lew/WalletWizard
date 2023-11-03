<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from spaceraceit.com/html/bankco/users.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:42 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>WalletWizard</title>
    <link rel="stylesheet" href="assets/css/output.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!-- layout start -->
    <?php
include "config.php";
$admin=new Admin();
if(!isset($_SESSION['a_id']))
{
  header('location:signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from spaceraceit.com/html/bankco/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:12 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
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
         <div class="form-group">
            <form action="controller/addcategory.php" method="POST">

         <ul class="py-7 border-t border-b">
                
                <div>
                <ul>
                  <li>
                  <h3
                  class="lg:text-3xl text-xl text-bgray-900 font-bold lg:leading-[36.4px]"
                >
                  Add Category
                </h3><br><input style="margin-right:550px" class="text-bgray-800 text-base border border-bgray-300 h-14 w-half focus:border-success-300 focus:ring-0 rounded-lg px-4 py-3.5 placeholder:text-bgray-500 placeholder:text-base" type="text" name="name"
                     required >
                      </li>
                  
</ul>
                </div>
               
                <div class="flex justify-center mt-8">
                  <button 
                  type="submit"
                name="submit"
                style="margin-right:350px"
                    data-target="#multi-step-modal"
                    class="bg-success-300 hover:bg-success-400 transition duration-300 ease-in-out modal-open py-3 px-7 text-white rounded-lg font-medium"
                  >
                  
                    Add Category
                  </button>
</form>
                </div>
             
                  
                  
                  
                </ul>
</div>
              </aside>
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
