<?php
include "config.php";
$admin= new Admin();
if(!isset($_SESSION['a_id'])){
  header('location:signin.php');
}
$id=$_SESSION['a_id'];
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
                        Personal Information's
                      </h3>
                      <div class="mt-8">
                        <form action="#">
                        <?php
                                $stmt2=$admin->ret("SELECT * FROM `admin` where `a_id`='$id'");
                                while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
                                ?>
                          <div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
                            <div class="flex flex-col gap-2">
                              <label
                                for="fname"
                                class="text-base text-bgray-600 font-medium"
                                > Name: <?php echo $row2['a_name']?></label
                              >
                              
                            </div>
              
                            <div class="flex flex-col gap-2">
                              <label
                                for="email"
                                class="text-base text-bgray-600 font-medium"
                                >Email: <?php echo $row2['a_email']?></label
                              >
                              
                            </div>
                            <!-- <div class="flex flex-col gap-2">
                              <label
                                for="phone"
                                class="text-base text-bgray-600 font-medium"
                                >Contact: <?php echo $row2['u_contact']?></label
                              >
                              
                            </div>
                            <div class="flex flex-col gap-2">
                              <label
                                for="address"
                                class="text-base text-bgray-600 font-medium"
                                >Address: <?php echo $row2['u_address']?></label
                              >
                              
                            </div> -->
                            <!-- <div class="flex flex-col gap-2">
                            <label
                                for="monthlybudget"
                                class="text-base text-bgray-600 font-medium"
                                >Monthly budget: <?php echo $row2['monthly_budget']?></label
                              >
                              
                            </div> -->
                          </div>
                          <div class="flex justify-end">
                          <a href="updateprofile.php">  <button
                            
                            name="submit"
                              class="rounded-lg bg-success-300 text-white font-semibold mt-10 py-3.5 px-4"
                            >
                            Update Profile</a>
                            </button>
                          </div>
                        </form>
                        
                      </div>
                    </div>
                    <!-- <div class="2xl:col-span-4 xl:col-span-5 2xl:mt-24">
                      <header class="mb-8">
                        <h4 class="font-bold text-lg text-bgray-800 mb-2">
                          Update Profile
                        </h4>
                        <div class="text-center m-auto w-60 h-50 relative">
                          <img src="controller/upload/<?php echo $row['picture']; ?>" alt="" />
                          <form method="POST" action="updateprofile.php">
                          <input type="file" name="fileInput" id="fileInput" style="display: none">
                          <a href="updateprofile.php"><button name="update"
                          class="absolute right-4 bottom-1"type="button" onclick="document.getElementById('fileInput').click()">

                            <svg
                              width="29"
                              height="29"
                              viewBox="0 0 29 29"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                            >
                              <circle
                                cx="14.2414"
                                cy="14.2414"
                                r="14.2414"
                                fill="#22C55E"
                              />
                              <path
                                d="M14.6994 10.2363C15.7798 11.3167 16.8434 12.3803 17.9171 13.454C17.7837 13.584 17.6403 13.7174 17.5036 13.8574C15.5497 15.8114 13.5924 17.7653 11.6385 19.7192C11.5118 19.8459 11.3884 19.9726 11.2617 20.0927C11.2317 20.1193 11.185 20.1427 11.145 20.1427C10.1281 20.146 9.11108 20.1427 8.0941 20.146C8.02408 20.146 8.01074 20.1193 8.01074 20.0593C8.01074 19.049 8.01074 18.0354 8.01408 17.0251C8.01408 16.9784 8.03742 16.9217 8.06743 16.8917C9.26779 15.688 10.4682 14.4876 11.6685 13.2873C12.6655 12.2903 13.6591 11.2967 14.6561 10.2997C14.6761 10.2797 14.6861 10.253 14.6994 10.2363Z"
                                fill="white"
                              />
                              <path
                                d="M18.6467 12.7197C17.573 11.646 16.506 10.579 15.4424 9.51537C15.6324 9.31864 15.8292 9.11858 16.0259 8.91852C16.256 8.68845 16.4894 8.45838 16.7228 8.22831C17.0162 7.93822 17.4197 7.93822 17.7097 8.22831C18.4466 8.9552 19.1802 9.68542 19.9171 10.4123C20.2038 10.6957 20.2138 11.0992 19.9371 11.3859C19.5136 11.8261 19.0868 12.2629 18.6634 12.703C18.66 12.7097 18.65 12.7163 18.6467 12.7197Z"
                                fill="white"
                              />
                            </svg>
                          </button>
                          </a>
                                </form>
                                <?php } ?>
                        </div>
                      </header>
                      
                    </div>
                  </div> -->
                </div>
            </div>
        </div>
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
  </body>

<!-- Mirrored from spaceraceit.com/html/bankco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:31 GMT -->
</html>

          
                     