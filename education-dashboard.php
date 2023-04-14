<?php
  $page = "3";
  $title = "Education Dashboard";
  $title_url = "#";

  require 'layout/top-header.php';
?>
<!-- chart -->
<script src="assets/js/custom_chart_370min.js"></script>
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
            <canvas id="chartDoubleBarGraph" style="min-height: 360px; width:100%;"></canvas>
          </div>
        </div>
        <div class="col-lg-5 mx40">
          <div class="shadows">
            <p class="textColor-black p0" id="chartDoughnutTitle"></p>
            <canvas id="chartDoughnut" style="min-height: 360px; width:100%;"></canvas>
          </div>
        </div>
        <div class="col-lg-7 mx40">
          <div class="shadows">
            <p class="textColor-black p0" id="chartRatioTitle"></p>
            <canvas id="chartRatio" style="min-height: 400px; width: 100%;"></canvas>
          </div>
        </div>
        <div class="col-lg-8 mx40">
          <div class="shadows">
            <p class="textColor-black p0" id="chartBubbleTitle"></p>
            <canvas id="chartBubble" style="min-height: 380px; width: 100%;"></canvas>
          </div>
        </div>
        <div class="col-lg-4 mx40">
          <div class="shadows">
            <p class="textColor-black p0" id="chartBarTitle"></p>
            <canvas id="chartBar" style="height: 380px; width: 100%;"></canvas>
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
      // Double Bar Graph Student Enrolment -----------------------------------------------------------------
      if (studentEnrolled_json.code == 200) {
        let studentEnrolledData = studentEnrolled_json.data;
        let bgColor = borderColor = title = chartSubTitle = '';
        var datasetsData = xAxisLabel = yAxisValue = [];

        document.getElementById("chartDoubleBarGraphTitle").innerHTML = studentEnrolledData.title;
        xAxisLabel = studentEnrolledData.x_axis;
        chartSubTitle = studentEnrolledData.y_axis_title;

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
            borderWidth: 0.5
          });
        }
        // Create the chart
        var chartDoubleBarGraph = new Chart(document.getElementById('chartDoubleBarGraph').getContext('2d'), {
          type: 'bar',
          data: {
            labels: xAxisLabel,
            datasets: datasetsData,
          },
          options: {
            scales: {
              x: {
                title: {
                  display: true,
                  text: studentEnrolledData.x_axis_title,
                }
              },
              yAxes: [
                {
                  id: 'y-axis-1',
                  type: 'linear',
                  position: 'left',
                }
              ],
            },
            plugins: {
              title: {
                display: true,
                text: chartSubTitle
              }
            }
          }
        });
      }

      // Doughnut chart  Institutes -----------------------------------------------------------------
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
      
      // Scatter chart Pupil Ratio -----------------------------------------
      if (pupilTeacherRatio_json.code == 200) {
        let pupilTeacherRatioData = pupilTeacherRatio_json.data;
        var datasetsData = axisData = [];
        let xAxis = label = xAxisTitle = yAxisTitle = value = bgColor = borderColor = '';
        
        document.getElementById("chartRatioTitle").innerHTML = pupilTeacherRatioData.title;
        labelsData = pupilTeacherRatioData.x_axis;
        xAxisTitle = pupilTeacherRatioData.x_axis_title;
        yAxisTitle = pupilTeacherRatioData.y_axis_title;

        for (let index = 0; index < pupilTeacherRatioData.y_axis.length; index++) 
        {
          axisData = [];
          label = pupilTeacherRatioData.y_axis[index].label;
          value = pupilTeacherRatioData.y_axis[index].count;
          bgColor = pupilTeacherRatioData.y_axis[index].bgColor;
          borderColor = pupilTeacherRatioData.y_axis[index].borderColor;

          for (let j = 0; j < value.length; j++) {
            const element = value[j];
            xAxis = pupilTeacherRatioData.x_axis[j];

            axisData.push({
              x: xAxis, 
              y: element 
            });
          }
          datasetsData.push({
            label: label,
            data: axisData,
            backgroundColor: bgColor,
            borderColor: borderColor,
            pointRadius: 5,
            pointHoverRadius: 9,
            tension: 0.1,
            showLine: true,
            fill: false
          });
        }
        // Get the canvas element and create the chart
        var chartRatio = new Chart(document.getElementById('chartRatio').getContext('2d'), {
          type: 'scatter',
          data: {
            datasets: datasetsData,
          },
          options: {
            scales: {
              x: {
                type: 'category',
                title: {
                  display: true,
                  text: xAxisTitle
                }
              },
              y: {
                title: {
                  display: true,
                  text: yAxisTitle
                },
                suggestedMin: 10, 
                suggestedMax: 35,
                ticks: {
                  stepSize: 4
                }
              }
            }
          }
        });
      }

      // Bubble Chart Enrolment details -----------------------------------------
      if (studentEnrollmentDetails_json.code == 200) {
        let studentEnrollmentDetailsData = studentEnrollmentDetails_json.data;
        let studentEnrollmentDetailsYAxis = studentEnrollmentDetailsData.y_axis;
        var datasetsData = axisData = isData = [];
        let maxRange = bgColor = borderColor = xAxisLabel = label = value = radius = title = xAxisTitle = yAxisTitle = '';

        document.getElementById("chartBubbleTitle").innerHTML = studentEnrollmentDetailsData.title;
        xAxisLabel = studentEnrollmentDetailsData.x_axis;
        xAxisTitle = studentEnrollmentDetailsData.x_axis_title;
        yAxisTitle = studentEnrollmentDetailsData.y_axis_title;
        maxRange = studentEnrollmentDetailsData.y_axis_max_range;

        for (let index = 0; index < studentEnrollmentDetailsYAxis.length; index++) 
        {
          axisData = [];
          value = studentEnrollmentDetailsYAxis[index].data;
          radius = studentEnrollmentDetailsYAxis[index].radius;
          title = studentEnrollmentDetailsYAxis[index].title;
          label = studentEnrollmentDetailsYAxis[index].label;
          bgColor = studentEnrollmentDetailsYAxis[index].bgColor;
          borderColor = studentEnrollmentDetailsYAxis[index].borderColor;

          let countNo = 0;
          for (let j = 0; j <= value.length; j++) {
            const valueYAxis = value[j];
            const valueRadius = radius[j];
            countNo++;

            axisData.push({
              x: countNo, 
              y: valueYAxis,
              r: valueRadius,
            });
          }
          datasetsData.push({
            label: label,
            data: axisData,
            backgroundColor: bgColor,
            borderColor: borderColor,
          });
        }

        var ctx = document.getElementById('chartBubble').getContext('2d');
        var chart = new Chart(ctx, {
          type: 'bubble',
          data: {
            datasets: datasetsData
          },
          options: {
            scales: {
              x: {
                type: 'category',
                labels: xAxisLabel,
                ticks: {
                  autoSkip: false
                },
                title: {
                  display: true,
                  text: xAxisTitle,
                }
              },
              y: {
                suggestedMin: 0, 
                suggestedMax: maxRange,
                ticks: {
                  beginAtZero: true
                },
                title: {
                  display: true,
                  text: yAxisTitle,
                }
              }
            }
          }
        });
      }

      // Bar chart Teacher Statistics -----------------------------------------------------------------
      if (teacherStatistics_json.code == 200) {
        let teacherStatisticsData = teacherStatistics_json.data;
        let yAxis = teacherStatisticsData.y_axis;
        var datasetsData = [];
        var yAxisValue = [];
        let maxRange = teacherStatisticsData.y_axis_max_range;

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
        // Get the canvas element and create the chart
        var chartBar = new Chart(document.getElementById('chartBar').getContext('2d'), {
          type: 'bar',
          data: {
            labels: teacherStatisticsData.x_axis,
            datasets: datasetsData,
          },
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
                suggestedMin: 0, 
                suggestedMax: maxRange,
                ticks: {
                  beginAtZero: true
                },
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
    }
  </script>

  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>