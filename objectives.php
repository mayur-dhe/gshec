<?php
  $title = "Objectives";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "";
  require 'layout/site-map.php'; 
  include 'data/colleges.php';
?>

<style>
  section.heading-page {
    background-image: url(assets/images/meetings-bg.jpg);
  }

  #map {
    height: 3000px;
  }
</style>
  <!-- -------------------------------------------------------- -->
  <!-- ------------- Main Content Start---------------------- -->
  <!-- -------------------------------------------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 list-number">
          <h2 class="textAlign-center pt20 text-upper"><?php echo $title ?></h2>
          <hr class="title_tag">
          <p>The Goa State Higher Education Council, established under Goa Act 14 of 2018 is an autonomous body with all 64 (Higher Education Institutes(HEI) under its purview. The Council shall function in order to forge synergic relationships amongst the State Government, Universities, academics, and experts by occupying an operational space between the Government and Universities on the one hand and between Universities and apex-level regulatory institutions on the other. The main objects of the Council include planned and coordinated development of Higher education in the State, promoting academic excellence and social justice by obtaining academic input for policy formulation and perspective planning, ensuring autonomy, accountability, and coordination of all institutions of higher education in the State and guiding the growth of higher education in accordance with the socio-economic requirements of the State.</p>

          <h2 class="textAlign-center pt20 text-upper">List of Colleges</h2>
          <hr class="title_tag">
          <ul class="p_inner_div">
            <?php 
              foreach ($collegeList as $key => $value) {
                echo "<li>".$value['name']."</li>";
              }
            ?>
          </ul>

          <div id="map"></div>

        </div>
      </div>
    </div>
  </section>
  <!-- -------------------------------------------------------- -->
  <!-- ------------- Main Content End---------------------- -->
  <!-- -------------------------------------------------------- -->
  
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=1dr9AOy4B4u4E2TRLuhPX696K2nFUvPg&ehbc=2E312F&callback=initMap"defer></script>
    <script>
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: new google.maps.LatLng(-33.91722, 151.23064),
          zoom: 16,
        });

        const iconBase =
          "https://developers.google.com/maps/documentation/javascript/examples/full/images/";
        const icons = {
          parking: {
            icon: iconBase + "parking_lot_maps.png",
          },
          library: {
            icon: iconBase + "library_maps.png",
          },
          info: {
            icon: iconBase + "info-i_maps.png",
          },
        };
        const features = [
          {
            position: new google.maps.LatLng(-33.91721, 151.2263),
            type: "info",
          },
          {
            position: new google.maps.LatLng(-33.91539, 151.2282),
            type: "info",
          },
          {
            position: new google.maps.LatLng(-33.91747, 151.22912),
            type: "info",
          },
          {
            position: new google.maps.LatLng(-33.9191, 151.22907),
            type: "info",
          },
          {
            position: new google.maps.LatLng(-33.91725, 151.23011),
            type: "info",
          },
          {
            position: new google.maps.LatLng(-33.91872, 151.23089),
            type: "info",
          },
          {
            position: new google.maps.LatLng(-33.91784, 151.23094),
            type: "info",
          },
          {
            position: new google.maps.LatLng(-33.91682, 151.23149),
            type: "info",
          },
          {
            position: new google.maps.LatLng(-33.9179, 151.23463),
            type: "info",
          },
          {
            position: new google.maps.LatLng(-33.91666, 151.23468),
            type: "info",
          },
          {
            position: new google.maps.LatLng(-33.916988, 151.23364),
            type: "info",
          },
          {
            position: new google.maps.LatLng(-33.91662347903106, 151.22879464019775),
            type: "parking",
          },
          {
            position: new google.maps.LatLng(-33.916365282092855, 151.22937399734496),
            type: "parking",
          },
          {
            position: new google.maps.LatLng(-33.91665018901448, 151.2282474695587),
            type: "parking",
          },
          {
            position: new google.maps.LatLng(-33.919543720969806, 151.23112279762267),
            type: "parking",
          },
          {
            position: new google.maps.LatLng(-33.91608037421864, 151.23288232673644),
            type: "parking",
          },
          {
            position: new google.maps.LatLng(-33.91851096391805, 151.2344058214569),
            type: "parking",
          },
          {
            position: new google.maps.LatLng(-33.91818154739766, 151.2346203981781),
            type: "parking",
          },
          {
            position: new google.maps.LatLng(-33.91727341958453, 151.23348314155578),
            type: "library",
          },
        ];

        // Create markers.
        for (let i = 0; i < features.length; i++) {
          const marker = new google.maps.Marker({
            position: features[i].position,
            icon: icons[features[i].type].icon,
            map: map,
          });
        }
      }
      window.initMap = initMap;
    </script>
  </body>
</html>