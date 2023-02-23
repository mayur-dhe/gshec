<?php
  $short_name = $_GET['title'];
  $title = "Projects";
  $title_2 = $short_name;
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Projects";
  require 'layout/site-map.php'; 
  include 'data/projects.php';
?>
  <link rel="stylesheet" href="vendor/swiper/*">
<style>
  .title-text {
    text-align: center;
    padding: 25px 0 0;
  }

  .swiper-slide img {
    height: 370px;
    object-fit: contain;
  }
  .portfolio-info {
    margin: 15px 0;
    background-color: #f2f2f280;
    padding: 30px 40px;
    border-radius: 5px;
  }
  .portfolio-info p {
    padding: 20px 20px !important;
  }
  .portfolio-info li {
    margin-bottom: 15px;
    padding-bottom: 15px;
    border-bottom: 1px solid #d5dadb;
  }
</style>
  <!-- -------------------------------------------------------- -->
  <!-- ------------- Main Content Start---------------------- -->
  <!-- -------------------------------------------------------- -->
  <?php 
    foreach ($projects as $key => $value) {
      if ($value['short-name'] == $short_name ) {
  ?>
        <section class="page-section textColor-black">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                  <h2 class="title-text"><?php echo $value['title']?></h2>
              </div>
              <div class="col-lg-7">
                <div class="portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                      <?php foreach ($value['images'] as $key1 => $image) { ?>
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?? $value['title'] ?>" class="rounded tablet-top"> 
                      <?php } ?>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>

              <div class="col-lg-5">
                <div class="portfolio-info">
                  <ul>
                    <li><strong>Category</strong>: <?php echo $value['category'] ?></li>
                    <li><strong>Client</strong>: <?php echo $value['client'] ?></li>
                    <li><strong>Project date</strong>: <?php echo $value['date'] ?></li>
                    <li><strong>Project URL</strong>: <a href="<?php echo $value['url'] ?>" target="_blank"><?php echo $value['url'] ?></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="portfolio-info portfolio-description">
                  <p><?php echo $value['description']?></p>
                </div>
              </div>
            </div>
          </div>
        </section>
  <?php 
      }
    }
  ?>
  <!-- -------------------------------------------------------- -->
  <!-- ------------- Main Content End---------------------- -->
  <!-- -------------------------------------------------------- -->
  
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>