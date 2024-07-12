<?php
  $title = "Teaching Learning and Educational Technology";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Teaching, Learning and Educational Technology";
  require 'layout/site-map.php'; 
  include 'data/tlet.php';
?>
<!-- ------------- Main Content Start---------------------- -->
  <section class="page-section features p0">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-0">
          <div class="image fit">
            <div id="demo" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <?php foreach ($teaching_learning_images['data'] as $key => $image){  ?>
                        <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
                <?php } ?>  
              </ul>
          
              <!-- The slideshow -->
              <div class="carousel-inner">
                <?php foreach ($teaching_learning_images['data'] as $key => $image) { ?>
                        <div class="carousel-item <?php echo $key==0 ?  'active' : '' ?>">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="1100" height="500">
                        </div> 
                <?php } ?>
                <!-- <div class="carousel-item carousel_item_overlay"></div> -->
              </div>
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
            
          <div class="textAlign-center">
            <h2 class="pt-4">Objectives</h2>
          </div>

          <div class="row">
            <div class="col-lg-12 mt-5 mt-lg-0 d-flex px-5">
              <div class="row align-self-center gy-1">
                <?php 
                  foreach ($teaching_learning as $key => $value) {
                ?>
                <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3><?php echo $value ?></h3>
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