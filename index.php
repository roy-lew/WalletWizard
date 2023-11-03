<?php 
include "config.php";
$admin=new Admin();
if(!isset($_SESSION['u_id'])){
   header('location:signin.php');
}
$id=$_SESSION['u_id']
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
      <main class="w-full xl:px-[48px] px-6 pb-6 xl:pb-[48px] sm:pt-[156px] pt-[100px]">
          <!-- write your code here-->
          <div class="2xl:flex 2xl:space-x-[48px]">
            <br><br><br><br>
            <section class="2xl:flex-1 2xl:mb-0 mb-6">
              <!-- total widget-->
              <div class="w-full mb-[24px]">
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-[24px]">
                  <div class="p-5 rounded-lg bg-white">
                    <div class="flex justify-between items-center mb-5">
                      <div class="flex space-x-[7px] items-center">
                        <div class="icon">
                          <span>
                            <img src="assets/images/icons/total-earn.svg" alt="icon" />
                          </span>
                        </div>
                        <span class="text-lg text-bgray-900 font-semibold">Monthly Budget</span>
                      </div>
                      <div>
                        <img src="assets/images/avatar/members-2.png" alt="members" />
                      </div>
                    </div>
                    <div class="flex justify-between items-end">
                      <?php
                    $stmt=$admin->ret("SELECT * FROM `personal_expense` inner join `user` on personal_expense.u_id=user.u_id WHERE personal_expense.`u_id`='$id'");
                    $row=$stmt->fetch(PDO::FETCH_ASSOC);
                    ?>
                      <div class="flex-1">
                        <p class="text-bgray-900 font-bold text-3xl leading-[48px]">
                       ₹<?php echo $row['monthly_budget']; ?>/-
                        </p>
                        <div class="flex items-center space-x-1">
                          <span>
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                fill="#22C55E" />
                              <path opacity="0.4"
                                d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                fill="#22C55E" />
                            </svg>
                          </span>
                          <span class="text-success-300 text-sm font-medium">
                            + 3.5%
                          </span>
                          <span class="text-bgray-700 text-sm font-medium">
                            from This Month
                          </span>
                        </div>
                      </div>
                      <div class="w-[106px]">
                        <canvas id="totalEarn" height="68"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="p-5 rounded-lg bg-white">
                    <div class="flex justify-between items-center mb-5">
                      <div class="flex space-x-[7px] items-center">
                        <div class="icon">
                          <span>
                            <img src="assets/images/icons/total-earn.svg" alt="icon" />
                          </span>
                        </div>
                        <span class="text-lg text-bgray-900 font-semibold">Total Spent</span>
                      </div>
                      <div>
                        <img src="assets/images/avatar/members-2.png" alt="members" />
                      </div>
                    </div>
                    <div class="flex justify-between items-end">
                    <?php
  $stmt=$admin->ret("SELECT SUM(exp_amount) AS total_amount
  FROM `personal_expense`
  WHERE `u_id` = $id;
  ");
  $row=$stmt->fetch(PDO::FETCH_ASSOC); ?>
                      <div class="flex-1">
                        <p class="text-bgray-900 font-bold text-3xl leading-[48px]">
                         ₹<?php echo $row['total_amount']?>/-
                        </p>
                        <div class="flex items-center space-x-1">
                          <span>
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                fill="#22C55E" />
                              <path opacity="0.4"
                                d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                fill="#22C55E" />
                            </svg>
                          </span>
                          <span class="text-success-300 text-sm font-medium">
                            + 3.5%
                          </span>
                          <span class="text-bgray-700 text-sm font-medium">
                          Weekly
                          </span>
                        </div>
                      </div>
                      <div class="w-[106px]">
                        <canvas id="totalSpending" height="68"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="p-5 rounded-lg bg-white">
                    <div class="flex justify-between items-center mb-5">
                      <div class="flex space-x-[7px] items-center">
                        <div class="icon">
                          <span>
                            <img src="assets/images/icons/total-earn.svg" alt="icon" />
                          </span>
                        </div>
                        <span class="text-lg text-bgray-900 font-semibold">Event Expenditure</span>
                      </div>
                      <div>
                        <img src="assets/images/avatar/members-2.png" alt="members" />
                      </div>
                    </div>
                    <div class="flex justify-between items-end">
                    <?php
  $stmt1=$admin->ret("SELECT SUM(expense_amt) AS total_amount
  FROM `event_expense`
  WHERE `u_id` = $id;
  "); 
  $row1=$stmt1->fetch(PDO::FETCH_ASSOC); ?>
                      <div class="flex-1">
                        <p class="text-bgray-900 font-bold text-3xl leading-[48px]">
                          ₹<?php echo  $row1['total_amount'] ?>/-
                        </p>
                        <div class="flex items-center space-x-1">
                          <span>
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M13.4318 0.522827L12.4446 0.522827L8.55575 0.522827L7.56859 0.522827C6.28227 0.522827 5.48082 1.91818 6.12896 3.02928L9.06056 8.05489C9.7037 9.1574 11.2967 9.1574 11.9398 8.05489L14.8714 3.02928C15.5196 1.91818 14.7181 0.522828 13.4318 0.522827Z"
                                fill="#22C55E" />
                              <path opacity="0.4"
                                d="M2.16878 13.0485L3.15594 13.0485L7.04483 13.0485L8.03199 13.0485C9.31831 13.0485 10.1198 11.6531 9.47163 10.542L6.54002 5.5164C5.89689 4.41389 4.30389 4.41389 3.66076 5.5164L0.729153 10.542C0.0810147 11.6531 0.882466 13.0485 2.16878 13.0485Z"
                                fill="#22C55E" />
                            </svg>
                          </span>
                          <span class="text-success-300 text-sm font-medium">
                            + 3.5%
                          </span>
                          <span class="text-bgray-700 text-sm font-medium">
                            Spent On
                          </span>
                        </div>
                      </div>
                      <div class="w-[106px]">
                        <canvas id="totalGoal" height="68"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- revenue, flow -->
              
              <!--list table-->
              
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
    function totalEarn() {
      const ctx_bids = document.getElementById("totalEarn").getContext("2d");
      const bitsMonth = [
        "Jan",
        "Feb",
        "Mar",
        "Afril",
        "May",
        "Jan",
        "Feb",
        "Mar",
        "Afril",
        "May",
        "Feb",
        "Mar",
        "Afril",
        "May",
      ];
      const bitsData = [
        0, 10, 0, 65, 0, 25, 0, 35, 20, 100, 40, 75, 50, 85, 60,
      ];
      const totalEarn = new Chart(ctx_bids, {
        type: "line",
        data: {
          labels: bitsMonth,
          datasets: [
            {
              label: "Visitor",
              data: bitsData,
              backgroundColor: () => {
                const chart = document
                  .getElementById("totalEarn")
                  .getContext("2d");
                const gradient = chart.createLinearGradient(0, 0, 0, 450);
                gradient.addColorStop(0, "rgba(34, 197, 94,0.41)");
                gradient.addColorStop(0.2, "rgba(255, 255, 255, 0)");

                return gradient;
              },
              borderColor: "#22C55E",
              pointRadius: 0,
              pointBackgroundColor: "#fff",
              pointBorderColor: "#22C55E",
              borderWidth: 1,
              fill: true,
              fillColor: "#fff",
              tension: 0.4,
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
    totalEarn();
    function totalSpendingChart() {
      let ctx_bids = document
        .getElementById("totalSpending")
        .getContext("2d");
      let bitsMonth = [
        "Jan",
        "Feb",
        "Mar",
        "Afril",
        "May",
        "Jan",
        "Feb",
        "Mar",
        "Afril",
        "May",
        "Feb",
        "Mar",
        "Afril",
        "May",
      ];
      let bitsData = [
        0, 10, 0, 65, 0, 25, 0, 35, 20, 100, 40, 75, 50, 85, 60,
      ];
      let totalEarn = new Chart(ctx_bids, {
        type: "line",
        data: {
          labels: bitsMonth,
          datasets: [
            {
              label: "Visitor",
              data: bitsData,
              backgroundColor: () => {
                const chart = document
                  .getElementById("totalEarn")
                  .getContext("2d");
                const gradient = chart.createLinearGradient(0, 0, 0, 450);
                gradient.addColorStop(0, "rgba(34, 197, 94,0.41)");
                gradient.addColorStop(0.2, "rgba(255, 255, 255, 0)");

                return gradient;
              },
              borderColor: "#22C55E",
              pointRadius: 0,
              pointBackgroundColor: "#fff",
              pointBorderColor: "#22C55E",
              borderWidth: 1,
              fill: true,
              fillColor: "#fff",
              tension: 0.4,
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
    totalSpendingChart();
    function totalGoal() {
      let ctx_bids = document.getElementById("totalGoal").getContext("2d");
      let bitsMonth = [
        "Jan",
        "Feb",
        "Mar",
        "Afril",
        "May",
        "Jan",
        "Feb",
        "Mar",
        "Afril",
        "May",
        "Feb",
        "Mar",
        "Afril",
        "May",
      ];
      let bitsData = [
        0, 10, 0, 65, 0, 25, 0, 35, 20, 100, 40, 75, 50, 85, 60,
      ];
      let totalEarn = new Chart(ctx_bids, {
        type: "line",
        data: {
          labels: bitsMonth,
          datasets: [
            {
              label: "Visitor",
              data: bitsData,
              backgroundColor: () => {
                const chart = document
                  .getElementById("totalGoal")
                  .getContext("2d");
                const gradient = chart.createLinearGradient(0, 0, 0, 450);
                gradient.addColorStop(0, "rgba(34, 197, 94,0.41)");
                gradient.addColorStop(0.2, "rgba(255, 255, 255, 0)");

                return gradient;
              },
              borderColor: "#22C55E",
              pointRadius: 0,
              pointBackgroundColor: "#fff",
              pointBorderColor: "#22C55E",
              borderWidth: 1,
              fill: true,
              fillColor: "#fff",
              tension: 0.4,
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
    totalGoal();
    function revenueFlow() {
      let revenueFlowElement = document
        .getElementById("revenueFlow")
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
              label: "My First Dataset",
              data: [1, 5, 2, 2, 6, 7, 8, 7, 3, 4, 1, 3],
              backgroundColor: [
                "rgba(237, 242, 247, 1)",
                "rgba(237, 242, 247, 1)",
                "rgba(237, 242, 247, 1)",
                "rgba(237, 242, 247, 1)",
                "rgba(237, 242, 247, 1)",
                "rgba(250, 204, 21, 1)",
                "rgba(237, 242, 247, 1)",
                "rgba(237, 242, 247, 1)",
                "rgba(237, 242, 247, 1)",
                "rgba(237, 242, 247, 1)",
                "rgba(237, 242, 247, 1)",
                "rgba(237, 242, 247, 1)",
              ],
              borderWidth: 0,
              borderRadius: 5,
            },
            {
              label: "My First Dataset 2",
              data: [5, 2, 4, 2, 5, 8, 3, 7, 3, 4, 1, 3],
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
              borderWidth: 0,
              borderRadius: 5,
            },
            {
              label: "My First Dataset 3",
              data: [2, 5, 3, 2, 5, 6, 9, 7, 3, 4, 1, 3],
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
              borderWidth: 0,
              borderRadius: 5,
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
          x: {
            stacked: true,
          },
          y: {
            stacked: true,
          },
        },
      });
    }
    revenueFlow();
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
</body>

<!-- Mirrored from spaceraceit.com/html/bankco/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:29 GMT -->

</html>