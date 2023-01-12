<?php
  $title = "Gallery";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "Gallery";
  require 'layout/site-map.php'; 
  include 'data/rusa.php';
  include 'data/council.php';
  include 'data/initiatives.php';
  include 'data/teaching_learning.php';
?>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <!-- teaching-learning-images -->

        <div class="col-lg-3 col-md-6">
          <div class="gallery">
            <a href="gallery-view?jnhsdwmxifkd=Teaching, Learning and Educational Technology">
              <div class="gallery-item">
                <div class="thumb">
                  <img src="<?php echo $teaching_learning_images['data'][0]['url'] ?>" alt="<?php echo $teaching_learning_images['data'][0]['alt'] ?>">
                </div>
                <div class="down-content">
                  <h4><?php echo concat_string($teaching_learning_images['title']);?></h4>
                </div>
              </div>
              <div class="overlay">
                <div class="text">Open Folder</div>
              </div>
            </a>
          </div>
        </div>
        <!-- initiatives -->
        <div class="col-lg-3 col-md-6">
          <div class="gallery">
            <a href="gallery-view?jnhsdwmxifkd=Initiatives">
              <div class="gallery-item">
                <div class="thumb">
                  <img src="<?php echo $mou_images['data'][0]['url'] ?>" alt="<?php echo $mou_images['data'][0]['alt'] ?>">
                </div>
                <div class="down-content">
                  <h4>Initiatives</h4>
                </div>
                <div class="overlay">
                  <div class="text">Open Folder</div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- RUSA -->
        <div class="col-lg-3 col-md-6">
          <div class="gallery">
            <a href="gallery-view?jnhsdwmxifkd=RUSA">
              <div class="gallery-item">
                <div class="thumb">
                  <img src="<?php echo $rusa_images['data'][0]['url'] ?>" alt="<?php echo $rusa_images['data'][0]['alt'] ?>">
                </div>
                <div class="down-content">
                  <h4><?php echo concat_string($rusa_images['title']);?></h4>
                </div>
              </div>
              <div class="overlay">
                <div class="text">Open Folder</div>
              </div>

              </div>
            </a>
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