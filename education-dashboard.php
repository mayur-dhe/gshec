<?php
  $page = "3";
  $title = "Education Dashboard";
  $title_url = "#";

  require 'layout/top-header.php';
?>
<!-- chart -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
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
        <div class="col-lg-7 mx40">
          <div class="shadows">
            <p class="textColor-black" id="chartScatterDotTitle"></p>
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <script src="assets/js/custom_canvas.js"></script>
  <script src="assets/js/custom_cloud_chart.js"></script>
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

      // scatter dot -------------------------------------
      // var xyValues = [
      //   {x:a, y:7},
      //   {x:b, y:8},
      //   {x:c, y:8},
      //   {x:d, y:9},
      //   {x:e, y:9},
      //   {x:f, y:9},
      //   {x:g, y:10},
      //   {x:h, y:11},
      //   {x:i, y:14},
      //   {x:j, y:14},
      //   {x:k, y:15}
      // ];
      // document.getElementById("chartScatterDotTitle").innerHTML = 'Dot html';
      // new Chart("chartScatterDot", {
      //   type: "scatter",
      //   data: {
      //     datasets: [{
      //       pointRadius: 4,
      //       pointBackgroundColor: "rgb(0,0,255)",
      //       data: xyValues
      //     }]
      //   },
      //   options: {
      //     legend: {display: false},
      //     scales: {
      //       xAxes: [{ticks: {min: 40, max:160}}],
      //       yAxes: [{ticks: {min: 6, max:16}}],
      //     }
      //   }
      // });

      // bar graph ----------------------------
      var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
      var yValuesee = [55, 49, 44, 24, 15];
      var barColors = ["red", "green","blue","orange","brown"];

      new Chart("chartBarGraph", {
        type: "bar",
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValuesee
          }]
        },
        options: {
          legend: {display: true},
          title: {
            display: true,
            text: "World Wine Production 2018"
          }
        }
      });

      // bar graph -----------------------------------------
    //   if (pupilTeacherRatio_json.code == 200) {

    //     let pupilTeacherRatioData = pupilTeacherRatio_json.data;
    //     var datasetsData = labelsData = valuesData = [];
    //     let color = '', title = '';
    //     document.getElementById("chartBarGraphTitle").innerHTML = pupilTeacherRatioData.title;

    //     labelsData = pupilTeacherRatioData.x_axis;
    //     console.log(labelsData);

    //     for (let j = 0; j < pupilTeacherRatioData.y_axis.length; j++) 
    //     {
    //       var dataValue = [];
    //       for (let index = 0; index < pupilTeacherRatioData.x_axis.length; index++) 
    //       {
    //         const element = pupilTeacherRatioData.x_axis[index];
    //         const value = pupilTeacherRatioData.y_axis[j].counts;
    //         color = pupilTeacherRatioData.y_axis[j].color;
    //         title = pupilTeacherRatioData.y_axis[j].title;

    //         dataValue = value;
    //       }
    //       datasetsData.push({
    //         label: title,
    //         fillColor: color,
    //         data: dataValue
    //       });
    //     }
    //     // draw chart
    //     var ctx = document.getElementById("chartBarGraph").getContext("2d");
    //     var data = {
    //       labels: ["Chocolate", "Vanilla", "Strawberry"],
    // datasets: [
    //     {
    //         label: "Blue",
    //         fillColor: "blue",
    //         data: [3,7,4]
    //     },
    //     {
    //         label: "Red",
    //         fillColor: "red",
    //         data: [4,3,5]
    //     },
    //     {
    //         label: "Green",
    //         fillColor: "green",
    //         data: [7,2,6]
    //     }
    // ]
    //     };
    //     var myBarChart = new Chart(ctx).Bar(data, { barValueSpacing: 20 });
    //   }

    }

  </script>


<script>
var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});
</script>
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>