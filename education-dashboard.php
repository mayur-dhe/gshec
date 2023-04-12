<?php
  $page = "3";
  $title = "Education Dashboard";
  $title_url = "#";

  require 'layout/top-header.php';
?>
<!-- chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

<body>
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Education Dashboard";
  $isCardsPage = true;
  require 'layout/site-map.php'; 
  include 'data/statistics.php';
?>
<style>
  .canvasjs-chart-credit {
    color: white !important;
    pointer-events: none;
    cursor: default;
  }
  .shadows {
    background-color: white;
    padding: 20px;
  }
</style>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx40">
          <div class="shadows">
            <p class="textColor-black p0" id="chartDoubleBarGraphTitle"></p>
            <canvas id="chartDoubleBarGraph" style="height: 360px; width:100%;"></canvas>
          </div>
        </div>
        <div class="col-lg-6 mx40">
          <div class="shadows">
            <p class="textColor-black p0" id="chartDoughnutTitle"></p>
            <canvas id="chartDoughnut" style="height: 400px; width:100%;"></canvas>
          </div>
        </div>
        <div class="col-lg-6 mx40">
          <div class="shadows">
            <p class="textColor-black p0" id="chartBarTitle"></p>
            <canvas id="chartBar" style="height: 400px; width: 100%;"></canvas>
          </div>
        </div>
        <div class="col-lg-6 mx40">
          <div class="shadows">
            <p class="textColor-black p0" id="chartRatioTitle"></p>
            <canvas id="chartRatio" style="height: 300px; width: 100%;"></canvas>
          </div>
        </div>
        <div class="col-lg-6 mx40">
          <div class="shadows">
            <p class="textColor-black p0" id="chartBarGraphTitle"></p>
            <canvas id="myChart" style="height: 300px; width: 100%;"></canvas>
          </div>
        </div>
        

      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <!-- <script src="assets/js/custom_canvas.js"></script> -->
  <!-- <script src="assets/js/custom_cloud_chart.js"></script> -->
  <script src="assets/js/custom_npm_chart.js"></script>
  <script>
    let studentEnrolled_json = <?php echo json_encode($studentEnrolled) ?>;
    let institutes_json = <?php echo json_encode($institutes) ?>;
    let teacherStatistics_json = <?php echo json_encode($teacherStatistics) ?>;
    let studentEnrollmentDetails_json = <?php echo json_encode($studentEnrollmentDetails) ?>;
    let pupilTeacherRatio_json = <?php echo json_encode($pupilTeacherRatio) ?>;

    window.onload = function () {
      // Double Bar Graph -----------------------------------------------------------------
      if (studentEnrolled_json.code == 200) {
        let studentEnrolledData = studentEnrolled_json.data;
        var datasetsData = [];
        var xAxisLabel = [];
        var yAxisValue = [];
        let bgColor = borderColor = title = '';

        document.getElementById("chartDoubleBarGraphTitle").innerHTML = studentEnrolledData.title;
        xAxisLabel = studentEnrolledData.x_axis;
        
        for (let j = 0; j < studentEnrolledData.y_axis.length; j++) 
        {
          yAxisValue = [];
          for (let index = 0; index < studentEnrolledData.x_axis.length; index++) 
          {
            yAxisValue = studentEnrolledData.y_axis[j].students;
            title = studentEnrolledData.y_axis[j].title;
            bgColor = studentEnrolledData.y_axis[j].bgColor;
            borderColor = studentEnrolledData.y_axis[j].borderColor;
          }
          datasetsData.push({
            label: title,
            data: yAxisValue,
            yAxisID: 'y-axis-1',
            backgroundColor: bgColor,
            borderColor: borderColor,
            borderWidth: 1
          });
        }
        var chartData = {
          labels: xAxisLabel,
          datasets: datasetsData,
        };
        // Define the chart options
        var chartOptions = {p\po
          scales: {
            yAxes: [
              {
                id: 'y-axis-1',
                type: 'linear',
                position: 'left'
              }
            ]
          }
        };
        // Create the chart
        var chartDoubleBarGraph = new Chart(document.getElementById('chartDoubleBarGraph').getContext('2d'), {
          type: 'bar',
          data: chartData,
          options: chartOptions
        });
      }

      // Doughnut chart  -----------------------------------------------------------------
      if (institutes_json.code == 200) {
        let institutesData = institutes_json.data;
        document.getElementById("chartDoughnutTitle").innerHTML = 'Total '+institutesData.title+' '+institutesData.total;
        var chartData = {
          labels: institutesData.x_axis,
          datasets: [
            {
              label: 'My Dataset',
              data: institutesData.y_axis,
              backgroundColor: institutesData.bgColor,
              borderColor: institutesData.borderColor,
              borderWidth: 1
            }
          ]
        };
        // Get the canvas element and create the chart
        var chartDoughnut = new Chart(document.getElementById('chartDoughnut').getContext('2d'), {
          type: 'doughnut',
          data: chartData,
          options: {
            responsive: true
          }
        });
        // Add a click event listener to the chart canvas element
        document.getElementById('chartDoughnut').addEventListener('click', function() {
          // Animate the chart using Chart.js animation functions
          chartDoughnut.options.animation = {
            animateScale: true,
            animateRotate: true
          };
          chartDoughnut.update();
        });
      }

      // Bar chart  -----------------------------------------------------------------
      if (teacherStatistics_json.code == 200) {
        let teacherStatisticsData = teacherStatistics_json.data;
        let yAxis = teacherStatisticsData.y_axis;
        var datasetsData = [];
        var yAxisValue = [];

        document.getElementById("chartBarTitle").innerHTML = teacherStatisticsData.title;
        yAxisValue = [];
        
        for (let index = 0; index < yAxis.length; index++) 
        {
          datasetsData.push({
            label: yAxis[index].label,
            data: yAxis[index].data,
            backgroundColor: yAxis[index].bgColor,
          });
        }
        var chartData = {
          labels: teacherStatisticsData.x_axis,
          datasets: datasetsData,
        };
        // Get the canvas element and create the chart
        var chartBar = new Chart(document.getElementById('chartBar').getContext('2d'), {
          type: 'bar',
          data: chartData,
          options: {
            responsive: true,
            scales: {
              x: {
                stacked: true,
                title: {
                  display: true,
                  text: 'Year'
                }
              },
              y: {
                stacked: true,
                title: {
                  display: true,
                  text: 'Number of Teachers'
                }
              }
            }
          }
        });
      }

      // Scatter chart -----------------------------------------
      if (pupilTeacherRatio_json.code == 200) {
        let pupilTeacherRatioData = pupilTeacherRatio_json.data;
        var datasetsData = data = [];
        let bgColor = xAxis = label = value = '';
        
        document.getElementById("chartRatioTitle").innerHTML = pupilTeacherRatioData.title;
        labelsData = pupilTeacherRatioData.x_axis;

        for (let index = 0; index < pupilTeacherRatioData.y_axis.length; index++) 
        {
          data = [];
          value = pupilTeacherRatioData.y_axis[index].count;
          bgColor = pupilTeacherRatioData.y_axis[index].bgColor;
          label = pupilTeacherRatioData.y_axis[index].label;

          for (let j = 0; j < value.length; j++) {
            const element = value[j];
            xAxis = pupilTeacherRatioData.x_axis[j];

            data.push({
              x: xAxis, 
              y: element 
            });
          }
          datasetsData.push({
            label: label,
            backgroundColor: bgColor,
            data: data,
          });
        }
        // Define the chart data
        var chartData = {
          datasets: datasetsData,
        };
        // Get the canvas element and create the chart
        var chartRatio = new Chart(document.getElementById('chartRatio').getContext('2d'), {
          type: 'scatter',
          data: chartData,
          options: {
            responsive: true,
            scales: {
              x: {
                title: {
                  display: true,
                  text: 'Year'
                }
              },
              y: {
                title: {
                  display: true,
                  text: 'Count'
                },
                ticks: {
                  beginAtZero: true
                }
              }
            }
          }
        });
      }

      // Horizontal chart -----------------------------------------
      let studentEnrollmentDetailsData = studentEnrollmentDetails_json.data;

  // Define the chart data
  var chartData = {
    labels: ['College A', 'College B', 'College C', 'College D'],
    datasets: [
      {
        label: 'Male',
        data: [1000, 800, 1200, 900],
        backgroundColor: 'rgba(54, 162, 235, 0.5)'
      },
      {
        label: 'Female',
        data: [800, 900, 1000, 1200],
        backgroundColor: 'rgba(255, 99, 132, 0.5)'
      }
    ]
  };

  // Get the canvas element and create the chart
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: chartData,
    options: {
      responsive: true,
      scales: {
        x: {
          stacked: true,
          title: {
            display: true,
            text: 'Enrollment Count'
          },
          ticks: {
            beginAtZero: true
          }
        },
        y: {
          stacked: true,
          title: {
            display: true,
            text: 'College'
          }
        }
      },
      plugins: {
        title: {
          display: true,
          text: 'Student Enrollment in Different Colleges (Gender-wise)'
        }
      }
    }
  });
    }
  </script>

  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>