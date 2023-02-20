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
          <div class="section-header header-details p_inner_div">
            <p class="textColor-black"><?php echo $rdi['title'] ?></p>
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
                      <h5 class="profile-thumb-title"><?php echo $value['name']; ?></h5>
                      <div class="profile-thumb-author"><?php echo '' ?? ''; ?></div>
                      <p class="profile-thumb-description"><?php echo $value['designation']; ?></p>
                    </div>
                  </div>
                </div>
            <?php
              }
            ?>
          </div>


          <div class="section-header header-details p_inner_div">
            <p class="textColor-black"><?php echo $tl['title'] ?></p>
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
                      <h5 class="profile-thumb-title"><?php echo $value['name']; ?></h5>
                      <div class="profile-thumb-author"><?php echo '' ?? ''; ?></div>
                      <p class="profile-thumb-description"><?php echo $value['designation']; ?></p>
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