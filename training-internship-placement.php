<?php
  $title = "Training Internship and Placement";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Training Internship and Placement";
  require 'layout/site-map.php'; 
  include 'data/tip.php';
?>
<style>
  section.heading-page {
    background-image: url(assets/images/tip/cover-img.jpg);
    padding-bottom: 430px;
  }
  .page-section .container {
    margin-bottom: 2rem;
    background: #f2f2f2;
  }
  .tab button:hover {
    color: var(--yellow);
  }
</style>
<!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-0">
          <div class="">
          <!-- image fit -->
          <!-- corosal ---------------------- -->
          </div>

          <div class="tab">
            <?php 
              foreach ($tabs as $key => $value) 
              {
                $id_name = "";
                $class0 = "";
                if ($key==0) {
                  $id_name = "defaultOpen";
                  $class0 = "title";
                }
            ?>
                <button class="tablinks <?php echo $class0 ?>" onclick="showActivity(0); openTabSection(event, 'tab<?php echo $key ?>')" id="<?php echo $id_name ?>"><?php echo $value ?></button>
            <?php } ?>
            <button class="tablinks" onclick="showActivity(1)">Activity <span class="dd-icon"> <i class="fa fa-caret-right dd-selected-right"></i> <i class="fa fa-caret-down dd-selected-down d-none"></i>  </span> </button>
            <?php 
              foreach ($activity as $key => $value) 
              {
            ?>
                <button class="d-none activities tablinks <?php echo $class0 ?>" onclick="openTabSection(event, 'tabA<?php echo ++$key ?>')"><?php echo $value ?></button>
            <?php } ?>
          </div>
            
          <div id="tab0" class="tabcontent">
            <h4><?php echo $about['title'] ?></h4>
            <div class="row">
              <div class="col-md-7">
                <p class="p0 fontSize-14">
                  <?php echo $about['data'] ?>
                </p>
              </div>
              <div class="col-md-5">
                <?php
                  // foreach ($teaching_learning_images['data'] as $key => $value) {
                  //   if ($value['type'] == 'obe') {
                  //     echo '<img src="'.$value['url'].'" alt="" class="py-10">';
                  //     if (++$key > 4) {
                  //       break;
                  //     }
                  //   }
                  // }
                ?>
              </div>
            </div>
          </div>
          
          <div id="tab1" class="tabcontent">
            <h4><?php echo $vision['title'] ?></h4>
            <div class="row">
              <div class="col-md-7">
                <p class="p0 fontSize-14">
                  <?php echo $vision['data'] ?>
                </p>
              </div>
              <div class="col-md-5">
                <?php
                  // foreach ($teaching_learning_images['data'] as $key => $value) {
                  //   if ($value['type'] == 'obe') {
                  //     echo '<img src="'.$value['url'].'" alt="" class="py-10">';
                  //     if (++$key > 4) {
                  //       break;
                  //     }
                  //   }
                  // }
                ?>
              </div>
            </div>
          </div>
          <div id="tab2" class="tabcontent">
            <h4><?php echo $mission['title'] ?></h4>
            <div class="row list-number">
              <div class="col-md-7">
                <p class="p0 fontSize-14">
                  <?php echo $mission['data'] ?>
                </p>
              </div>
              <div class="col-md-5">
                <?php
                  // foreach ($teaching_learning_images['data'] as $key => $value) {
                  //   if ($value['type'] == 'mooc') {
                  //     echo '<img src="'.$value['url'].'" alt="" class="py-10">';
                  //   }
                  // }
                ?>
              </div>
            </div>
          </div>
          <div id="tab3" class="tabcontent">
            <h4><?php echo $objectives['title'] ?></h4>
            <div class="row gy-1">
              <?php 
                foreach ($objectives['data'] as $key => $value) {
              ?>
                  <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                    <div class="row listing-box d-flex align-items-center">
                      <div class="col-2 listing-box-center">
                        <img src="assets/images/book.gif" alt="">
                      </div>  
                      <h3 class="col-10"><?php echo $value ?></h3>
                    </div>
                  </div>
              <?php } ?>
            </div>
          </div>
          <div id="tabA1" class="tabcontent">
            <h4><?php echo $tip_installation['title'] ?></h4>
            <div class="row list-number">
              <div class="col-md-7">
                <p class="p0 fontSize-14">
                  <?php echo $tip_installation['data'] ?>
                </p>
              </div>
              <div class="col-md-5">
                <?php
                  // foreach ($teaching_learning_images['data'] as $key => $value) {
                  //   if ($value['type'] == 'mooc') {
                  //     echo '<img src="'.$value['url'].'" alt="" class="py-10">';
                  //   }
                  // }
                ?>
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <script src="assets/js/frontend.js"></script>
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>