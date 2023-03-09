<?php
  $page = "3";
  $title = "Education Dashboard";
  require 'layout/top-header.php';
?>
<body>
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Education Dashboard";
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
</style>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx40">
          <div class="shadows">
            <!-- <p class="textColor-black"><?php echo $rdi['title'] ?></p> -->
            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
          </div>
        </div>
        <div class="col-lg-5 mx40">
          <div class="shadows">
            <!-- <p class="textColor-black"><?php echo $rdi['title'] ?></p> -->
            <div id="chartDonutContainer" style="height: 300px; width: 100%;"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script src="assets/js/frontend.js"></script>
  <script>
    window.onload = function () {
      // line chart start ----------------------------------
      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        theme: "light2",
        title:{
          text: "Site Traffic"
        },
        axisX:{
          valueFormatString: "DD MMM",
          crosshair: {
            enabled: true,
            snapToDataPoint: true
          }
        },
        axisY: {
          title: "Number of Visits",
          includeZero: true,
          crosshair: {
            enabled: true
          }
        },
        toolTip:{
          shared:true
        },  
        legend:{
          cursor:"pointer",
          verticalAlign: "bottom",
          horizontalAlign: "left",
          dockInsidePlotArea: true,
          itemclick: toogleDataSeries
        },
        data: [{
          type: "line",
          showInLegend: true,
          name: "Total Visit",
          markerType: "square",
          xValueFormatString: "DD MMM, YYYY",
          color: "#F08080",
          dataPoints: [
            { x: new Date(2017, 0, 3), y: 650 },
            { x: new Date(2017, 0, 4), y: 700 },
            { x: new Date(2017, 0, 5), y: 710 },
            { x: new Date(2017, 0, 6), y: 658 },
            { x: new Date(2017, 0, 7), y: 734 },
            { x: new Date(2017, 0, 8), y: 963 },
            { x: new Date(2017, 0, 9), y: 847 },
            { x: new Date(2017, 0, 10), y: 853 },
            { x: new Date(2017, 0, 11), y: 869 },
            { x: new Date(2017, 0, 12), y: 943 },
            { x: new Date(2017, 0, 13), y: 970 },
            { x: new Date(2017, 0, 14), y: 869 },
            { x: new Date(2017, 0, 15), y: 890 },
            { x: new Date(2017, 0, 16), y: 930 }
          ]
        },
        {
          type: "line",
          showInLegend: true,
          name: "Unique Visit",
          lineDashType: "dash",
          dataPoints: [
            { x: new Date(2017, 0, 3), y: 510 },
            { x: new Date(2017, 0, 4), y: 560 },
            { x: new Date(2017, 0, 5), y: 540 },
            { x: new Date(2017, 0, 6), y: 558 },
            { x: new Date(2017, 0, 7), y: 544 },
            { x: new Date(2017, 0, 8), y: 693 },
            { x: new Date(2017, 0, 9), y: 657 },
            { x: new Date(2017, 0, 10), y: 663 },
            { x: new Date(2017, 0, 11), y: 639 },
            { x: new Date(2017, 0, 12), y: 673 },
            { x: new Date(2017, 0, 13), y: 660 },
            { x: new Date(2017, 0, 14), y: 562 },
            { x: new Date(2017, 0, 15), y: 643 },
            { x: new Date(2017, 0, 16), y: 570 }
          ]
        }]
      });
      chart.render();
      function toogleDataSeries(e){
        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
          e.dataSeries.visible = false;
        } else{
          e.dataSeries.visible = true;
        }
        chart.render();
      }
      // line chart end ----------------------------------
      // donut chart start ----------------------------------
      var chartDonut = new CanvasJS.Chart("chartDonutContainer", {
        animationEnabled: true,
        title:{
          text: "Email Categories",
          horizontalAlign: "left"
        },
        data: [{
          type: "doughnut",
          startAngle: 60,
          //innerRadius: 60,
          indexLabelFontSize: 17,
          indexLabel: "{label} - #percent%",
          toolTipContent: "<b>{label}:</b> {y} (#percent%)",
          dataPoints: [
            { y: 67, label: "Inbox" },
            { y: 28, label: "Archives" },
            { y: 10, label: "Labels" },
            { y: 7, label: "Drafts"},
            { y: 15, label: "Trash"},
            { y: 6, label: "Spam"}
          ]
        }]
      });
      chartDonut.render();
      // donut chart end ----------------------------------

    }

  </script>
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>