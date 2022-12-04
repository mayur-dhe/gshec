<?php
  $title = "Initiatives";
  require 'layout/top-header.php';
?>
<body>
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "";
  require 'layout/site-map.php'; 
  include 'data/initiatives.php';
?>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <?php 
              foreach ($initiatives as $key => $value) {
            ?>
              <div class="col-lg-4">
                <a href="initiatives?jnhsdwmxifkd=<?php echo $value['id']?>">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <!-- <span>$22.00</span> -->
                      </div>
                      <img src="<?php echo $value['cover_image'];  ?>" alt="MOU">
                    </div>
                    <div class="down-content">
                      <!-- <div class="date">
                        <h6>Nov <span>10</span></h6>
                      </div> -->
                      <h4><?php echo concat_string($value['title']);?></h4>
                      <p>Know More</p>
                    </div>
                  </div>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>

  </body>
</html>