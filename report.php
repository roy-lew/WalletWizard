<?php
include "config.php";
$admin= new Admin();
if(!isset($_SESSION['u_id'])){
  header('location:signin.php');
}
$id=$_SESSION['u_id'];
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
          <?php 
                    $start_date=0;
                    $end_date=0;
               if(isset($_POST['report'])){
                $start_date=$_POST['date1'];
                $end_date=$_POST['date2'];
               }
               
               ?>

          <div class="col-sm-12 col-xl-11 " style="margin-top: 10px;margin-left: 20px;">
                        <div class="bg-light rounded h-100 p-4">
                        <h3
                        class="text-2xl font-bold pb-5 text-bgray-900 border-b border-bgray-200"
                      >
                        Report
                      </h3>
                            <form action="report.php" method="POST">
                                <div class="mb-3 ">
                                    <label for="startDate" class="form-label">Start Date</label>
                                    <input type="date" required id="startDate" max="" class="form-control"
                                        aria-describedby="emailHelp" name="date1">
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="endDate" class="form-label">End Date</label>
                                    <input type="date" required class="form-control" id="endDate" max="" name='date2'>
                                </div>
                                
                                <button type="submit" class="rounded-lg bg-success-300 text-white font-semibold mt-10 py-3.5 px-4" name="report">Submit</button>
                                <button type="submit" class="rounded-lg bg-success-300 text-white font-semibold mt-10 py-3.5 px-4">Clear</button>
                            </form>
                        </div>
                    </div>

                    <div class="table-content w-full overflow-x-auto">
<h3
                        class="text-2xl font-bold pb-5 text-bgray-900 border-b border-bgray-200"
                      >
                        Your Expenses
                      </h3>
                      <table class="w-full">
                        <tr class="border-b border-bgray-300">
                          <td
                            class="py-5 px-6 xl:px-0 w-[250px] lg:w-auto inline-block"
                          >
                            <div class="w-full flex space-x-2.5 items-center">
                              <span
                                class="text-base font-medium text-bgray-600"
                              >
                                Name</span
                              >
                              <span>
                                <svg
                                  width="14"
                                  height="15"
                                  viewBox="0 0 14 15"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M10.332 1.31567V13.3157"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M3.66602 13.3157V1.31567"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </span>
                            </div>
                          </td>
                          <td class="py-5 px-6 xl:px-0">
                            <div class="w-full flex space-x-2.5 items-center">
                              <span class="text-base font-medium text-bgray-600"
                                >Detail</span
                              >
                              <span>
                                <svg
                                  width="14"
                                  height="15"
                                  viewBox="0 0 14 15"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M10.332 1.31567V13.3157"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M3.66602 13.3157V1.31567"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </span>
                            </div>
                          </td>
                          <td class="py-5 px-6 xl:px-0">
                            <div class="flex space-x-2.5 items-center">
                              <span
                                class="text-base font-medium text-bgray-600"
                              >
                                Date</span
                              >
                              <span>
                                <svg
                                  width="14"
                                  height="15"
                                  viewBox="0 0 14 15"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M10.332 1.31567V13.3157"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M3.66602 13.3157V1.31567"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </span>
                            </div>
                          </td>
                          <td class="py-5 px-6 xl:w-[165px] xl:px-0">
                            <div class="w-full flex space-x-2.5 items-center">
                              <span class="text-base font-medium text-bgray-600"
                                >Expenditure</span
                              >
                              <span>
                                <svg
                                  width="14"
                                  height="15"
                                  viewBox="0 0 14 15"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M10.332 1.31567V13.3157"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M5.66602 11.3157L3.66602 13.3157L1.66602 11.3157"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M3.66602 13.3157V1.31567"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                  <path
                                    d="M12.332 3.31567L10.332 1.31567L8.33203 3.31567"
                                    stroke="#718096"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                  />
                                </svg>
                              </span>
                            </div>
                          </td>
                          <td class="py-5"></td>
                        </tr>
                        <?php
                                $stmt2=$admin->ret("SELECT * FROM `personal_expense` where `u_id`='$id' and `exp_date` BETWEEN '$start_date' AND '$end_date'");
                                while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
                                ?>
                        <tr class="border-b border-bgray-300">
                          
                          
                          <td class="py-5 px-6 xl:px-0">
                           
                            <div class="w-full flex space-x-2.5 items-center">
                              <div
                              >
                              <span class="item-ico">
                            <svg
                              width="18"
                              height="20"
                              viewBox="0 0 18 20"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <path
                                d="M18 16V6C18 3.79086 16.2091 2 14 2H4C1.79086 2 0 3.79086 0 6V16C0 18.2091 1.79086 20 4 20H14C16.2091 20 18 18.2091 18 16Z"
                                fill="#1A202C"
                                class="path-1"
                              />
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M4.25 8C4.25 7.58579 4.58579 7.25 5 7.25H13C13.4142 7.25 13.75 7.58579 13.75 8C13.75 8.41421 13.4142 8.75 13 8.75H5C4.58579 8.75 4.25 8.41421 4.25 8Z"
                                fill="#22C55E"
                                class="path-2"
                              />
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M4.25 12C4.25 11.5858 4.58579 11.25 5 11.25H13C13.4142 11.25 13.75 11.5858 13.75 12C13.75 12.4142 13.4142 12.75 13 12.75H5C4.58579 12.75 4.25 12.4142 4.25 12Z"
                                fill="#22C55E"
                                class="path-2"
                              />
                              <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M4.25 16C4.25 15.5858 4.58579 15.25 5 15.25H9C9.41421 15.25 9.75 15.5858 9.75 16C9.75 16.4142 9.41421 16.75 9 16.75H5C4.58579 16.75 4.25 16.4142 4.25 16Z"
                                fill="#22C55E"
                                class="path-2"
                              />
                              <path
                                d="M11 0H7C5.89543 0 5 0.895431 5 2C5 3.10457 5.89543 4 7 4H11C12.1046 4 13 3.10457 13 2C13 0.895431 12.1046 0 11 0Z"
                                fill="#22C55E"
                                class="path-2"
                              />
                            </svg>
                          </span>
                              </div>
                              <p class="font-semibold text-base text-bgray-900">
                                <?php echo $row2['exp_name']?>
                              </p>
                            </div>
                          </td>
                          <td class="py-5 px-6 xl:px-0">
                            <p class="font-medium text-base text-bgray-900">
                                <?php echo $row2['exp_details']?>
                                </p>
                            
                          </td>
                          <td class="py-5 px-6 xl:px-0">
                            <p class="font-medium text-base text-bgray-900">
                            <?php echo $row2['exp_date']?>
                            </p>
                          </td>
                          <td class="py-5 px-6 xl:w-[165px] xl:px-0">
                            <div class="w-full flex items-center">
                              <span
                                class="block bg-[#FAEFEE] text-[#FF4747] rounded-md px-4 py-1.5 leading-[22px] text-sm font-semibold"
                            >₹<?php echo $row2['exp_amount']?>/-</span>
                            </div>
                          </td>
                          
                        </tr>
                        <?php } ?>
                      </table>
                    </div>
                    </main>
        </div>
      </div>
    </div>
    <!-- layout end -->

    <!--scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>
    <script>
      // min-calender
      $("#min-calender").flatpickr({
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        inline: true,
      });
    </script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="assets/js/chart.js"></script>
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
      function totalEarnBar() {
        const ctx_bids = document
          .getElementById("totalEarnBar")
          .getContext("2d");
        const bitsMonth = ["Jan", "Feb", "Mar", "Afril", "May", "Jan"];
        const bitsData = [10, 20, 15, 50, 40, 25];
        const totalEarnBar = new Chart(ctx_bids, {
          type: "bar",
          data: {
            labels: bitsMonth,
            datasets: [
              {
                label: "Visitor",
                data: bitsData,
                backgroundColor: [
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(34, 197, 94, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                ],
                borderColor: "#22C55E",
                pointRadius: 0,
                pointBackgroundColor: "#fff",
                pointBorderColor: "#22C55E",
                fill: true,
                fillColor: "#fff",
                tension: 0.4,
                borderWidth: 0,
                borderRadius: 3,
              },
            ],
          },
          options: {
            layout: {
              padding: {
                bottom: -20,
              },
            },
            maintainAspectRatio: false,
            responsive: true,
            scales: {
              x: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
              y: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
            },

            plugins: {
              legend: {
                position: "top",
                display: false,
              },
              title: {
                display: false,
                text: "Visitor: 2k",
              },
              tooltip: {
                enabled: false,
              },
            },
          },
        });
      }
      totalEarnBar();
      function totalSpendingChartBar() {
        let ctx_bids = document
          .getElementById("totalSpendingBar")
          .getContext("2d");
        const bitsMonth = ["Jan", "Feb", "Mar", "Afril", "May", "Jan"];
        const bitsData = [10, 20, 15, 50, 40, 25];
        const totalEarnBar = new Chart(ctx_bids, {
          type: "bar",
          data: {
            labels: bitsMonth,
            datasets: [
              {
                label: "Visitor",
                data: bitsData,
                backgroundColor: [
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(34, 197, 94, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                ],
                borderColor: "#22C55E",
                pointRadius: 0,
                pointBackgroundColor: "#fff",
                pointBorderColor: "#22C55E",
                fill: true,
                fillColor: "#fff",
                tension: 0.4,
                borderWidth: 0,
                borderRadius: 3,
              },
            ],
          },
          options: {
            layout: {
              padding: {
                bottom: -20,
              },
            },
            maintainAspectRatio: false,
            responsive: true,
            scales: {
              x: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
              y: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
            },

            plugins: {
              legend: {
                position: "top",
                display: false,
              },
              title: {
                display: false,
                text: "Visitor: 2k",
              },
              tooltip: {
                enabled: false,
              },
            },
          },
        });
      }
      totalSpendingChartBar();
      function totalGoalBar() {
        let ctx_bids = document.getElementById("totalGoalBar").getContext("2d");
        const bitsMonth = ["Jan", "Feb", "Mar", "Afril", "May", "Jan"];
        const bitsData = [10, 20, 15, 50, 40, 25];
        const totalEarnBar = new Chart(ctx_bids, {
          type: "bar",
          data: {
            labels: bitsMonth,
            datasets: [
              {
                label: "Visitor",
                data: bitsData,
                backgroundColor: [
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(34, 197, 94, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                ],
                borderColor: "#22C55E",
                pointRadius: 0,
                pointBackgroundColor: "#fff",
                pointBorderColor: "#22C55E",
                fill: true,
                fillColor: "#fff",
                tension: 0.4,
                borderWidth: 0,
                borderRadius: 3,
              },
            ],
          },
          options: {
            layout: {
              padding: {
                bottom: -20,
              },
            },
            maintainAspectRatio: false,
            responsive: true,
            scales: {
              x: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
              y: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
            },

            plugins: {
              legend: {
                position: "top",
                display: false,
              },
              title: {
                display: false,
                text: "Visitor: 2k",
              },
              tooltip: {
                enabled: false,
              },
            },
          },
        });
      }
      totalGoalBar();
      function monthSpendingBar() {
        let ctx_bids = document
          .getElementById("monthSpendingBar")
          .getContext("2d");
        const bitsMonth = ["Jan", "Feb", "Mar", "Afril", "May", "Jan"];
        const bitsData = [10, 20, 15, 50, 40, 25];
        const totalEarnBar = new Chart(ctx_bids, {
          type: "bar",
          data: {
            labels: bitsMonth,
            datasets: [
              {
                label: "Visitor",
                data: bitsData,
                backgroundColor: [
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(34, 197, 94, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                ],
                borderColor: "#22C55E",
                pointRadius: 0,
                pointBackgroundColor: "#fff",
                pointBorderColor: "#22C55E",
                fill: true,
                fillColor: "#fff",
                tension: 0.4,
                borderWidth: 0,
                borderRadius: 3,
              },
            ],
          },
          options: {
            layout: {
              padding: {
                bottom: -20,
              },
            },
            maintainAspectRatio: false,
            responsive: true,
            scales: {
              x: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
              y: {
                grid: {
                  display: false,
                  drawBorder: false,
                },
                ticks: {
                  display: false,
                },
              },
            },

            plugins: {
              legend: {
                position: "top",
                display: false,
              },
              title: {
                display: false,
                text: "Visitor: 2k",
              },
              tooltip: {
                enabled: false,
              },
            },
          },
        });
      }
      monthSpendingBar();
      function revenueFlowBar() {
        let revenueFlowElement = document
          .getElementById("revenueFlowBar")
          .getContext("2d");
        let month = [
          "Jan",
          "Feb",
          "Mar",
          "April",
          "May",
          "Jun",
          "July",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ];
        let revenueFlow = new Chart(revenueFlowElement, {
          type: "bar",
          data: {
            labels: month,
            datasets: [
              {
                label: "Dataset 1",
                data: [65, 75, 65, 55, 75, 55, 45, 65, 75, 65, 85, 75],
                backgroundColor: [
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(255, 120, 75, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                ],
                borderRadius: 3,
              },
              {
                label: "Dataset 2",
                data: [70, 80, 70, 65, 65, 65, 60, 70, 80, 70, 80, 65],
                backgroundColor: [
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(74, 222, 128, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                  "rgba(237, 242, 247, 1)",
                ],
                borderRadius: 3,
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            scales: {
              y: {
                beginAtZero: true,
                grid: {
                  color: "rgb(243 ,246, 255 ,1)",
                  borderDash: [5, 5],
                  borderDashOffset: 2,
                },
                gridLines: {
                  zeroLineColor: "transparent",
                },
                ticks: {
                  callback(value) {
                    return `${value}% `;
                  },
                },
              },
              x: {
                grid: {
                  color: "rgb(243 ,246, 255 ,1)",
                  borderDash: [5, 5],
                  borderDashOffset: 2,
                },
                gridLines: {
                  zeroLineColor: "transparent",
                },
              },
            },
            plugins: {
              legend: {
                display: false,
              },
            },
            // x: {
            //   stacked: true,
            // },
            // y: {
            //   stacked: true,
            // },
          },
        });
      }
      revenueFlowBar();
      function pieChart() {
        let pieChart = document.getElementById("pie_chart").getContext("2d");

        const data = {
          labels: [10, 20, 30],
          datasets: [
            {
              label: "My First Dataset",
              data: [15, 20, 35, 40],
              backgroundColor: ["#1A202C", "#61C660", "#F8CC4B", "#EDF2F7"],
              borderColor: ["#ffffff", "#ffffff", "#ffffff", "#1A202C"],
              hoverOffset: 18,
              borderWidth: 0,
            },
          ],
        };
        const customDatalabels = {
          id: "customDatalabels",
          afterDatasetsDraw(chart, args, pluginOptions) {
            const {
              ctx,
              data,
              chartArea: { top, bottom, left, right, width, height },
            } = chart;
            ctx.save();
            data.datasets[0].data.forEach((datapoint, index) => {
              const { x, y } = chart
                .getDatasetMeta(0)
                .data[index].tooltipPosition();
              ctx.font = "bold 12px sans-serif";
              ctx.fillStyle = data.datasets[0].borderColor[index];
              ctx.textAlign = "center";
              ctx.textBaseline = "middle";
              ctx.fillText(`${datapoint}%`, x, y);
            });
          },
        };
        const config = {
          type: "doughnut",
          data,
          options: {
            maintainAspectRatio: false,
            layout: {
              padding: {
                left: 10,
                right: 10,
                top: 10,
                bottom: 10,
              },
            },
            plugins: {
              legend: {
                display: false,
              },
            },
          },
          plugins: [customDatalabels],
        };

        let pieChartConfiig = new Chart(pieChart, config);
      }
      pieChart();
    </script>

    <script src="assets/js/main.js"></script>
    <script>
  const today = new Date().toISOString().split('T')[0];

  document.getElementById('startDate').max = today;
  document.getElementById('endDate').max = today;

  // Optional: Enforce end date to be equal to or after start date
  document.getElementById('startDate').addEventListener('change', function() {
    const startDate = new Date(this.value);
    document.getElementById('endDate').min = this.value;
    if (startDate > new Date(document.getElementById('endDate').value)) {
      document.getElementById('endDate').value = this.value;
    }
  });
</script>
  </body>

<!-- Mirrored from spaceraceit.com/html/bankco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:31 GMT -->
</html>