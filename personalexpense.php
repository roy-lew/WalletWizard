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
                        Add Expense
                      </h3>
                      <div class="mt-8">
                        <form action="controller/personalexpense.php" method="POST">
                          <div class="grid 2xl:grid-cols-2 grid-cols-1 gap-6">
                            <div class="flex flex-col gap-2">
                              <label
                                for="name"
                                class="text-base text-bgray-600 font-medium"
                                >Expense Name</label
                              >
                              <input
                                type="text"
                                class="bg-bgray-50 p-4 rounded-lg h-14 border-0 focus:border focus:border-success-300 focus:ring-0"
                                name="name"
                                required
                              />
                            </div>
                            <div>
                      <label
                        for="fname"
                        class="text-sm text-bgray-500 block mb-2.5 text-left"
                        >Event category</label
                      >

<select required name="category" id="category">
  <option>select your category</option>
    
<?php 
                                
                                $stmt=$admin->ret("SELECT * FROM `category` ");
                                while($row2=$stmt->fetch(PDO::FETCH_ASSOC)){
                                ?>
  <option value="<?php echo $row2['c_id']?>"><?php echo $row2['c_name']?></option>
  <?php } ?>
  
</select>

                       
                  </div>
                            <div class="flex flex-col gap-2">
                              <label
                                for="detail"
                                class="text-base text-bgray-600 font-medium"
                                >Expense Details</label
                              >
                              <input
                                type="text"
                                class="bg-bgray-50 p-4 rounded-lg h-14 border-0 focus:border focus:border-success-300 focus:ring-0"
                                name="detail"
                                required
                              />
                            </div>
                            <div class="flex flex-col gap-2">
                              <label
                                for="amount"
                                class="text-base text-bgray-600 font-medium"
                                >Amount</label
                              >
                              <input
                                type="number"
                                required
                                class="bg-bgray-50 p-4 rounded-lg h-14 border-0 focus:border focus:border-success-300 focus:ring-0"
                                name="amount"
                              />
                            </div>
                            <div class="flex flex-col gap-2">
                              <label
                                for="date"
                                class="text-base text-bgray-600 font-medium"
                                >Date</label
                              >
                              <input
                                type="date"
                                id="dateInput" max=""
                                required
                                class="bg-bgray-50 p-4 rounded-lg h-14 border-0 focus:border focus:border-success-300 focus:ring-0"
                                name="date"
                              />
                            </div>
                          </div>
                          <div class="flex justify-end">
                            <button
                            
                            name="submit"
                              class="rounded-lg bg-success-300 text-white font-semibold mt-10 py-3.5 px-4"
                            >
                              Add
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
  const dateInput = document.getElementById('dateInput');
  const today = new Date().toISOString().split('T')[0];
  dateInput.max = today;
</script>

  </body>

<!-- Mirrored from spaceraceit.com/html/bankco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 10:21:31 GMT -->
</html>