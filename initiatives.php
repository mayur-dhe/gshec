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
<style>
  * {
    font-family: 'Roboto';
  }
</style>
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
                <a href="initiative.php?jnhsdwmxifkd=<?php echo $value['id']?>">
                  <div class="meeting-item">
                    <div class="thumb">
                      <img src="<?php echo $value['cover_image'];  ?>" alt="MOU">
                    </div>
                    <div class="down-content textAlign-center">
                      <h4><?php echo $value['short_name'] ?></h4>
                      <!-- <h4>
                        <?php echo concat_string($value['title']);?>
                        <span class="know_more">Read More</span>
                      </h4> -->
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