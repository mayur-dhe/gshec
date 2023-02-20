<?php
  $title = "Council Members";
  $page = "2";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Council Members";
  require 'layout/site-map.php'; 
  include 'data/council.php';
  // DFA($council_members);
?>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 p_inner_div_3">
          <h2 class="content-title">Council Members</h2>
          <br>
          <br>
          <br>
          <div class="row g-5">
            <?php 
              foreach ($council_members as $key => $value) {
            ?>
              <div class="col-lg-3 col-md-6 d-flex align-items-stretch council m_auto" data-aos="fade-up" data-aos-delay="100">
                <div class="member">
                  <div class="member-img">
                    <img src="<?php echo $value['image']?>" class="img-fluid" alt="<?php echo $value['name']?>">
                  </div>
                  <div class="member-info">
                    <h4><?php echo $value['name']; ?></h4>
                    <span><?php echo $value['designation']; ?></span>
                    <p><?php echo $value['title']; ?></p>
                  </div>
                </div>
              </div>
            <?php
                if ($key>0) {
                  break;
                }
              } 
            ?>
          </div>
          <br>
          <br>
          <br>
          <hr class="title_tag">
          <br>
          <br>
          <br>
          <div class="row g-5">
            <?php 
              foreach ($council_members as $key => $value) {
                if ($key>1) {
            ?>
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch council" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                      <div class="member-img">
                        <img src="<?php echo $value['image']?>" class="img-fluid" alt="<?php echo $value['name']?>">
                      </div>
                      <div class="member-info">
                        <h4><?php echo $value['name']; ?></h4>
                        <span><?php echo $value['designation']; ?></span>
                        <p><?php echo $value['title']; ?></p>
                      </div>
                    </div>
                  </div>
            <?php   
                } 
              } 
            ?>
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