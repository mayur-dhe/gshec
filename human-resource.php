<?php
  $title = "Human Resource";
  $title_url = "#";
  $page = "4";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "";
  $isCardsPage = true;
  require 'layout/site-map.php'; 
  include 'data/human_resource.php';
?>
<style>
  .profile-thumb {
    max-width: 250px;
    margin: auto;
  }
  .page-section {
    padding: 0 0 50px;
  }
</style>
  <!-- -------------------------------------------------------- -->
  <!-- ------------- Main Content Start---------------------- -->
  <!-- -------------------------------------------------------- -->
  <section class="page-section mt30">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p_btm_space">
          <div class="section-header header-details p0">
            <p class="textColor-black p_inner_div_5 fontSizeR-2 textAlign-center"><?php echo $rdi['title'] ?></p>
          </div>
          <div class="row gy-4">
            <?php 
              foreach ($rdi['data'] as $key => $value) {
            ?>
                <div class="col-12 col-md-4 col-xl-4">
                  <div class="profile-thumb">
                    <img class="profile-thumb-img img_bgColor" src="<?php echo $value['url']; ?>" alt="">
                    <div class="profile-thumb-gradient"></div>
                    <div class="profile-thumb-anim">
                      <h5 class="profile-thumb-title ptt-2"><?php echo $value['name']; ?></h5>
                      <p class="profile-thumb-description fontSize-12 textAlign-left">
                        <?php echo $value['designation']; ?><br><br>
                        <?php if ($value['linkedin']) { ?>
                            <a href="<?php echo $value['linkedin'];?>" target="_blank" class="fa fa-linkedin"> Click to open Linked-in Profile</a><br>
                        <?php } 
                          if ($value['google_link']) { ?>
                            <a href="<?php echo $value['google_link']; ?>" target="_blank" class="fa fa-google"> Click to open Profile</a>
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

  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p_btm_space">
          <div class="section-header header-details p0">
            <p class="textColor-black p_inner_div_5 fontSizeR-2 textAlign-center"><?php echo $tl['title'] ?></p>
          </div>
          <div class="row gy-4">
            <?php 
              foreach ($tl['data'] as $key => $value) {
            ?>
                <div class="col-12 col-md-4 col-xl-4">
                  <div class="profile-thumb">
                    <img class="profile-thumb-img img_bgColor" src="<?php echo $value['url']; ?>" alt="">
                    <div class="profile-thumb-gradient"></div>
                    <div class="profile-thumb-anim">
                      <h5 class="profile-thumb-title ptt-2"><?php echo $value['name']; ?></h5>
                      <p class="profile-thumb-description fontSize-12 textAlign-left">
                        <?php echo $value['designation']; ?><br><br>
                        <?php if ($value['linkedin']) { ?>
                            <a href="<?php echo $value['linkedin']; ?>" target="_blank" class="fa fa-linkedin"> Click to open Linked-in Profile</a><br>
                        <?php } 
                          if ($value['google_link']) { ?>
                                <a href="<?php echo $value['google_link']; ?>" target="_blank" class="fa fa-google"> Click to open Profile</a>
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
  
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p_btm_space">
          <div class="section-header header-details p0">
            <p class="textColor-black p_inner_div_5 fontSizeR-2 textAlign-center"><?php echo $gshec['title'] ?></p>
          </div>
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach ($gshec['data'] as $key => $value) {
                      echo '
                        <tr>
                          <th scope="row">'.++$key.'</th>
                          <td>'.$value['name'].'</td>
                          <td>'.$value['designation'].'</td>
                        </tr>
                      ';
                    } 
                  ?>
                </tbody>
              </table>
            </div>
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