<?php
  $page = "3";
  $title = "Education Dashboard";
  $title_url = "#";
  require 'layout/top-header.php';
?>
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
  /* section.heading-page {
    background-image: url(assets/images/nep/nep4.jpg);
    padding-bottom: 400px;
  } */

  .canvasjs-chart-credit {
    color: white !important;
    pointer-events: none;
    cursor: default;
  }
  .shadows {
    background-color: white;
  }
</style>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx40">
          <div class="shadows">
            <p class="textColor-black" id="chartScatterTitle"></p>
            <canvas id="chartScatter" style="height: 300px; width: 100%;"></canvas>
          </div>
        </div>
        <div class="col-lg-5 mx40">
          <div class="shadows">
            <p class="textColor-black" id="chartDonutContainerTitle"></p>
            <div id="chartDonutContainer" style="height: 300px; width: 100%;"></div>
          </div>
        </div>
        <div class="col-lg-5 mx40">
          <div class="shadows">
            <p class="textColor-black" id="chartBarGraphTitle"></p>
            <div id="chartBarGraph" style="height: 300px; width: 100%;"></div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <!-- <script src="assets/js/frontend.js"></script> -->
  
  <script>
    let studentEnrolled_json = <?php echo json_encode($studentEnrolled) ?>;
    let institutes_json = <?php echo json_encode($institutes) ?>;
    let teacherStatistics_json = <?php echo json_encode($studentEnrolled) ?>;
    let teacherStatisticsData = teacherStatistics_json.data;
    let studentEnrollmentDetails_json = <?php echo json_encode($institutes) ?>;
    let studentEnrollmentDetailsData = studentEnrollmentDetails_json.data;
    let pupilTeacherRatio_json = <?php echo json_encode($institutes) ?>;

    window.onload = function () {
      // line chart start ----------------------------------
      if (studentEnrolled_json.code == 200) {
        let studentEnrolledData = studentEnrolled_json.data;
        var datasetsData = [];
        let color = '', title = '';
        document.getElementById("chartScatterTitle").innerHTML = studentEnrolledData.title;

        for (let j = 0; j < studentEnrolledData.y_axis.length; j++) 
        {
          var dataValue = [];
          for (let index = 0; index < studentEnrolledData.x_axis.length; index++) 
          {
            const element = studentEnrolledData.x_axis[index];
            const value = studentEnrolledData.y_axis[j].students[index];
            color = studentEnrolledData.y_axis[j].color;
            title = studentEnrolledData.y_axis[j].title;

            dataValue.push({
              x: element, 
              y: value
            });
          }
          datasetsData.push({
            pointRadius: 4,
            pointBackgroundColor: color,
            data: dataValue
          });
        }
        // draw chart
        new Chart("chartScatter", {
          type: "scatter",
          data: {
            datasets: datasetsData,
          },
          options: {
            legend: {display: true},
            scales: {
              xAxes: [{ticks: {min: 0, max:16}}],
              yAxes: [{ticks: {min: 0, max:11158}}],
            }
          }
        });
      }

      // donut chart start ----------------------------------
      if (institutes_json.code == 200) {
        let institutesData = institutes_json.data;
        document.getElementById("chartDonutContainerTitle").innerHTML = institutesData.title;
        var dataValue = [];
        for (let index = 0; index < institutesData.x_axis.length; index++) {
          const element = institutesData.x_axis[index];
          const value = institutesData.y_axis[index];
          dataValue.push({
            y: value, 
            label: element 
          });
        }
        // draw chart
        var chartDonut = new CanvasJS.Chart("chartDonutContainer", {
          animationEnabled: true,
          title:{
            text: institutesData.y_axis_title,
            horizontalAlign: "left"
          },
          data: [{
            type: "doughnut",
            startAngle: 60,
            //innerRadius: 60,
            indexLabelFontSize: 17,
            indexLabel: "{y} - {label}",
            toolTipContent: "<b>{label}:</b> {y}",
            dataPoints: dataValue,
          }]
        });
        chartDonut.render();
      }

      // bar graph -----------------------------------------
      if (pupilTeacherRatio_json.code == 200) {

        let pupilTeacherRatioData = pupilTeacherRatio_json.data;
        var datasetsData = labelsData = valuesData = [];
        let color = '', title = '';
        document.getElementById("chartBarGraphTitle").innerHTML = pupilTeacherRatioData.title;

        labelsData = pupilTeacherRatioData.x_axis;
        console.log(labelsData);

        for (let j = 0; j < pupilTeacherRatioData.y_axis.length; j++) 
        {
          var dataValue = [];
          for (let index = 0; index < pupilTeacherRatioData.x_axis.length; index++) 
          {
            const element = pupilTeacherRatioData.x_axis[index];
            const value = pupilTeacherRatioData.y_axis[j].counts;
            color = pupilTeacherRatioData.y_axis[j].color;
            title = pupilTeacherRatioData.y_axis[j].title;

            dataValue = value;
          }
          datasetsData.push({
            label: title,
            fillColor: color,
            data: dataValue
          });
        }
        // draw chart
        var ctx = document.getElementById("chartBarGraph").getContext("2d");
        var data = {
          labels: ["Chocolate", "Vanilla", "Strawberry"],
    datasets: [
        {
            label: "Blue",
            fillColor: "blue",
            data: [3,7,4]
        },
        {
            label: "Red",
            fillColor: "red",
            data: [4,3,5]
        },
        {
            label: "Green",
            fillColor: "green",
            data: [7,2,6]
        }
    ]
        };
        var myBarChart = new Chart(ctx).Bar(data, { barValueSpacing: 20 });
      }

    }

  </script>
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>