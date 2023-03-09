<?php
  $title = "Human Resource";
  $page = "4";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "";
  require 'layout/site-map.php'; 
  include 'data/human_resource.php';
?>
  <!-- -------------------------------------------------------- -->
  <!-- ------------- Main Content Start---------------------- -->
  <!-- -------------------------------------------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-header header-details p0">
            <p class="textColor-black p_inner_div_5 fontSizeR-14"><?php echo $rdi['title'] ?></p>
          </div>
          <div class="row gy-4">
            <?php 
              foreach ($rdi['data'] as $key => $value) {
            ?>
                <div class="col-12 col-md-4 col-xl-3">
                  <div class="profile-thumb">
                    <img class="profile-thumb-img" src="<?php echo $value['url']; ?>" alt="">
                    <div class="profile-thumb-gradient"></div>
                    <div class="profile-thumb-anim">
                      <h5 class="profile-thumb-title ptt-2"><?php echo $value['name']; ?></h5>
                      <p class="profile-thumb-description">
                        <?php echo $value['designation']; ?><br><br>
                        <?php if ($value['linkedin']) { ?>
                            <a href="<?php echo $value['linkedin']; ?>">Click to view LinkedIn Profile</a><br>
                        <?php } 
                          if ($value['linkedin']) { ?>
                                <a href="<?php echo $value['google_link']; ?>">Click to view LinkedIn Profile</a>
                        <?php } ?>
                      </p>
                      <div class="profile-thumb-author"></div>
                    </div>
                  </div>
                </div>
            <?php
              }
            ?>
          </div>


          <div class="section-header header-details p0">
            <p class="textColor-black p_inner_div_5 fontSizeR-14"><?php echo $tl['title'] ?></p>
          </div>
          <div class="row gy-4">
            <?php 
              foreach ($tl['data'] as $key => $value) {
            ?>
                <div class="col-12 col-md-4 col-xl-3">
                  <div class="profile-thumb">
                    <img class="profile-thumb-img" src="<?php echo $value['url']; ?>" alt="">
                    <div class="profile-thumb-gradient"></div>
                    <div class="profile-thumb-anim">
                      <h5 class="profile-thumb-title ptt-2"><?php echo $value['name']; ?></h5>
                      <p class="profile-thumb-description fontSize-12">
                        <?php echo $value['designation']; ?><br><br>
                        <?php if ($value['linkedin']) { ?>
                            <a href="<?php echo $value['linkedin']; ?>">Click to view LinkedIn Profile</a><br>
                        <?php } 
                          if ($value['linkedin']) { ?>
                                <a href="<?php echo $value['google_link']; ?>">Click to view LinkedIn Profile</a>
                        <?php } ?>
                      </p>
                      <div class="profile-thumb-author"></div>
                    </div>
                  </div>
                </div>
            <?php
              }
            ?>
          </div>


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