<?php
  $title = "Objective";
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

</style>
  <!-- -------------------------------------------------------- -->
  <!-- ------------- Main Content Start---------------------- -->
  <!-- -------------------------------------------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 list-number">
          <h2 class="align-center pt-20 text-upper"><?php echo $title ?></h2>
          <hr class="title_tag">
          <p>The Goa State Higher Education Council, established under Goa Act 14 of 2018 is an autonomous body with all 64 (Higher Education Institutes(HEI) under its purview. The Council shall function in order to forge synergic relationships amongst the State Government, Universities, academics, and experts by occupying an operational space between the Government and Universities on the one hand and between Universities and apex-level regulatory institutions on the other. The main objects of the Council include planned and coordinated development of Higher education in the State, promoting academic excellence and social justice by obtaining academic input for policy formulation and perspective planning, ensuring autonomy, accountability, and coordination of all institutions of higher education in the State and guiding the growth of higher education in accordance with the socio-economic requirements of the State.</p>

          <h2 class="align-center pt-20 text-upper">List of Colleges</h2>
          <hr class="title_tag">
          <ul class="p_inner_div">
            <?php 
              foreach ($collegeList as $key => $value) {
                echo "<li>".$value['name']."</li>";
              }
            ?>
          </ul>

        </div>
      </div>
    </div>
  </section>
  <!-- -------------------------------------------------------- -->
  <!-- ------------- Main Content End---------------------- -->
  <!-- -------------------------------------------------------- -->
  
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>