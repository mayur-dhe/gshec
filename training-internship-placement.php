<?php
  $title = "Training, Internship and Placement";
  $title_url = "#";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Training, Internship and Placement";
  $isCardsPage = true;
  $getUrlID = 5;
  require 'layout/site-map.php'; 
  include 'data/tip.php';
?>
<style>
  /* section.heading-page {
    background-image: url(assets/images/tip/cover-img.jpg);
    padding-bottom: 430px;
  } */
  .page-section .container {
    margin-bottom: 2rem;
    background: #f2f2f2;
  }
  .tab button:hover {
    color: var(--yellow);
  }
</style>
<!-- ------------- Main Content Start---------------------- -->
  <section class="mt_n132">
    <div class="row">
      <div class="col-lg-12 p-0">
        <!-- corosal ---------------------- -->
        <div id="demo" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
              <?php foreach ($tip_images['data'] as $key => $image){  ?>
                      <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
              <?php } ?>  
          </ul>
          <!-- The slideshow -->
          <div class="carousel-inner">
              <?php foreach ($tip_images['data'] as $key => $image) { ?>
                      <div class="carousel-item carouselHeight <?php echo $key==0 ?  'active' : '' ?>">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" >
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
        <!-- corosal ---------------------- -->
      </div>
    </div>
  </section>
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-0">
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
              <div class="col-md-12">
                <?php foreach ($about['data'] as $key => $value) { ?>
                  <p class="p0 fontSize-14">
                    <?php echo $value ?>
                  </p>
                <?php } ?>
              </div>              
            </div>
          </div>
          <div id="tab1" class="tabcontent">
            <h4><?php echo $vision['title']?></h4>
            <?php foreach ($vision['data'] as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
          </div>
          <div id="tab2" class="tabcontent">
            <h4><?php echo $mission['title']?></h4>
            <?php foreach ($mission['data'] as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
          </div>
          <div id="tab3" class="tabcontent">
            <h4><?php echo $objectives['title'] ?></h4>
            <div class="row gy-1">
              <div class="col-12 list-number">
                <ul>
                  <?php 
                    foreach ($objectives['data'] as $key => $value) {
                  ?>
                    <li>
                      <?php echo $value ?></h3>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
          <div id="tabA1" class="tabcontent">
            <h4><?php echo $tip_installation['title'] ?></h4>
            <div class="row">
              <div class="col-md-12">
                <p class="p0 fontSize-14">
                  <?php echo $tip_installation['data'] ?>
                </p>
              </div>
              <div class="col-md-12">
                <div class="gallery_img_box gib_bg">
                  <?php
                    $counter0 = 1; 
                    foreach ($tip_images['data'] as $key => $value) {
                      if ($value['type'] == 'tcs') {
                        ?>
                        <figure class="gallery__item gallery__item_5--<?php echo $counter0++; ?>">
                          <a href="">
                            <img src="<?php echo $value['url'] ?>" alt="Gallery image 1" class="gallery__img g_img_cover" style="background-color:#000;">
                            <div class="gallery__item-overlay-background"></div>
                          </a>
                        </figure>
                        <?php
                      }
                    }
                  ?>
                </div>
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