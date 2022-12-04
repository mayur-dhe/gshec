<?php
  $title = "Archives";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "Archives";
  require 'layout/site-map.php'; 
  include 'data/archives.php';
  // DFA($council_members);
?>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-0">
          <div class="row">
            <div class="col-lg-12 mt-5 mt-lg-0 d-flex px-5">
              <div class="row align-self-center gy-1">
                <?php 
                    foreach ($archives as $key => $value) {
                ?>
                  <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                    <div class="feature-box d-flex align-items-center">
                      <i class="bi bi-check"></i>
                      <h3>
                          <a href="<?php echo $value['url'] ?>" target="_blank" style="color: #002b58;"><?php echo $value['title'] ?></a>
                      </h3>
                      <!-- <i class="fa cloud" style="color: black; font-size:larger;"></i> -->
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>