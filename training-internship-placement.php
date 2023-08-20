<?php
$title = "Training, Internship and Placement";
$title_url = "#";
require 'layout/top-header.php';
?>
<!-- courosal -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


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
  @media (min-width: 1400px) {
    .header-area .main-nav .nav {
      width: 978px;
    }
  }
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
                      <!-- <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li> -->
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
            <button class="tablinks" onclick="showActivity(1)">
              Activity 
              <span class="dd-icon"> <i class="fa fa-caret-right dd-selected-right"></i> <i class="fa fa-caret-down dd-selected-down d-none"></i>  </span> 
            </button>
            <?php 
              foreach ($activity_year_wise as $key => $value) 
              {
                $yearId = ++$key;
            ?>
                <button class="d-none activities tablinks <?php echo $class0 ?>" onclick="showSubActivity(<?php echo $yearId ?>)">
                  <?php echo $value ?>
                  <span class="dd-icon dd-icon2"> 
                    <i class="fa fa-caret-right dd-selected-right2<?php echo $yearId; ?> "></i> 
                    <i class="fa fa-caret-down dd-selected-down2<?php echo $yearId; ?>  d-none"></i>
                  </span>
                </button>

                <?php 
                  $subTabCount = 0;
                  foreach ($activities as $key1 => $activity) 
                  {
                    if ($activity['year'] == $value) {
                      $subTabCount += 1;
                ?>
                      <button class="d-none sub_activities sub_activity<?php echo $yearId; ?> tablinks <?php echo $class0 ?>" onclick="openTabSection(event, 'tabA<?php echo $yearId.''.$subTabCount ?>')"><?php echo $activity['title'] ?></button>
                <?php 
                    }
                  }
              }
            ?>
          </div>
            
          <div id="tab0" class="tabcontent">
            <h4><?php echo $about['title'] ?></h4>
            <?php foreach ($about['data'] as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
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
          <div id="tab4" class="tabcontent">
            <h4><?php echo $team['title']?></h4>
            <div class="row gy-4">
              <?php 
                foreach ($team['data'] as $key => $value) {
              ?>
                  <div class="col-12 col-md-5 col-xl-4">
                    <div class="profile-thumb">
                      <img class="profile-thumb-img img_bgColor" src="<?php echo $value['url']; ?>" alt="">
                      <div class="profile-thumb-gradient"></div>
                      <div class="profile-thumb-anim">
                        <h5 class="profile-thumb-title ptt-2"><?php echo $value['name']; ?></h5>
                        <p class="profile-thumb-description fontSize-12 textAlign-left" style="font-size: 12px !important;">
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

          <!-- 2022 -->
          <!-- not using -->
          <div id="tabA11-hidden" class="tabcontent">
            <h4><?php echo $tip_installation['title'] ?></h4>
            <div><?php echo $tip_installation['data'] ?></div>
            <div class="col-md-12 p0">  
              <div class="gallery_img_box gib_bg">
                <?php
                  $counter0 = 1; 
                  foreach ($tip_images['data'] as $key => $value) {
                    if ($value['type'] == 'tcs') {
                      ?>
                      <figure class="gallery__item gallery__item_6--<?php echo $counter0++; ?>">
                        <img src="<?php echo $value['url'] ?>" loading="lazy" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                        <!-- <div class="gallery__item-overlay-background"></div>  --> 
                      </figure>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <!-- not using above-->
          <div id="tabA11" class="tabcontent list-number">
            <h4><?php echo $installation_of_tip['title'] ?></h4>
            <?php 
              foreach ($installation_of_tip['data'] as $key => $value) {
                echo '<div>'.$value.'</div>';
              }
            ?>
            <?php 
              if ($installation_of_tip['list']) 
              { 
            ?>
                <div class="mb0">
                  <strong> <?php echo $installation_of_tip['list']['title'] ?> </strong>
                </div>
                <ol class="pl20">
                  <?php 
                    foreach ($installation_of_tip['list']['content'] as $key => $itemValue) 
                    {
                  ?>
                      <li><?php echo $itemValue ?></li>
                  <?php 
                    }
                  ?>
                </ol>
            <?php 
              } 
            ?>
            <div class="col-md-12 p0">  
              <div class="gallery_img_box gib_bg">
                <?php
                  $counter0 = 1; 
                  foreach ($tip_images['data'] as $key => $value) {
                    if ($value['type'] == 'installation_of_tip') {
                      ?>
                      <figure class="gallery__item gallery__item_2--<?php echo $counter0++; ?>">
                        <img src="<?php echo $value['url'] ?>" loading="lazy" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                        <!-- <div class="gallery__item-overlay-background"></div>  --> 
                      </figure>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <div id="tabA12" class="tabcontent">
            <h4><?php echo $ibm['title'] ?></h4>
            <?php 
              foreach ($ibm['data'] as $key => $value) {
                echo '<div>'.$value.'</div>';
              }
            ?>
            <div class="col-md-12 p0">  
              <div class="gallery_img_box gib_bg">
                <?php
                  $counter0 = 1; 
                  foreach ($tip_images['data'] as $key => $value) {
                    if ($value['type'] == 'ibm') {
                      ?>
                      <figure class="gallery__item gallery__item_2--<?php echo $counter0++; ?>">
                        <img src="<?php echo $value['url'] ?>" loading="lazy" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                        <!-- <div class="gallery__item-overlay-background"></div>  --> 
                      </figure>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <div id="tabA13" class="tabcontent list-number">
            <h4><?php echo $placement_drive['title'] ?></h4>
            <?php 
              foreach ($placement_drive['data1'] as $key => $value) {
                echo '<div>'.$value.'</div>';
              }
            ?>
            <?php 
              if ($placement_drive['list-college']) 
              { 
            ?>
                <div class="mb0">
                  <?php echo $placement_drive['list-college']['title'] ?>
                </div>
                <ol class="pl20">
                  <?php 
                    foreach ($placement_drive['list-college']['content'] as $key => $itemValue) 
                    {
                  ?>
                      <li><?php echo $itemValue ?></li>
                  <?php 
                    }
                  ?>
                </ol>
            <?php 
              }
              if ($placement_drive['list-company']) 
              { 
            ?>
                <div class="mb0">
                  <?php echo $placement_drive['list-company']['title'] ?>
                </div>
                <ol class="pl20">
                  <?php 
                    foreach ($placement_drive['list-company']['content'] as $key => $itemValue) 
                    {
                  ?>
                      <li><?php echo $itemValue ?></li>
                  <?php 
                    }
                  ?>
                </ol>
            <?php 
              }
              foreach ($placement_drive['data2'] as $key => $value) {
                echo '<div>'.$value.'</div>';
              }
            ?>
            <!-- add Image Gallery -->
            <div class="col-md-12 p0">  
              <div class="gallery_img_box gib_bg">
                <?php
                  $counter0 = 1; 
                  foreach ($tip_images['data'] as $key => $value) {
                    if ($value['type'] == 'placement_drive') {
                      ?>
                      <figure class="gallery__item gallery__item_2--<?php echo $counter0++; ?>">
                        <img src="<?php echo $value['url'] ?>" loading="lazy" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                        <!-- <div class="gallery__item-overlay-background"></div>  --> 
                      </figure>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <div id="tabA14" class="tabcontent">
            <h4><?php echo $tcs_drive['title'] ?></h4>
            <?php 
              foreach ($tcs_drive['data'] as $key => $value) {
                echo '<div>'.$value.'</div>';
              }
            ?>
            <!-- add Image Gallery -->
            <div class="col-md-12 p0">  
              <div class="gallery_img_box gib_bg">
                <?php
                  $counter0 = 1; 
                  foreach ($tip_images['data'] as $key => $value) {
                    if ($value['type'] == 'tcs_drive') {
                      ?>
                      <figure class="gallery__item gallery__item_2--<?php echo $counter0++; ?>">
                        <img src="<?php echo $value['url'] ?>" loading="lazy" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                        <!-- <div class="gallery__item-overlay-background"></div>  --> 
                      </figure>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <!-- 2023 -->
          <div id="tabA21" class="tabcontent list-number">
            <h4><?php echo $unlu['title'] ?></h4>
            <?php 
              foreach ($unlu['data1'] as $key => $value) {
                echo '<div>'.$value.'</div>';
              }
              if ($unlu['list']) 
              { 
            ?>
                <div class="mb0">
                  <?php echo $unlu['list']['title'] ?>
                </div>
                <ol class="pl20">
                  <?php 
                    foreach ($unlu['list']['content'] as $key => $itemValue) 
                    {
                  ?>
                      <li><?php echo $itemValue ?></li>
                  <?php 
                    }
                  ?>
                </ol>
            <?php 
              }
              foreach ($unlu['data2'] as $key => $value) {
                echo '<div>'.$value.'</div>';
              }
            ?>

            <div class="col-md-12 p0">  
              <div class="gallery_img_box gib_bg">
                <?php
                  $counter0 = 1; 
                  foreach ($tip_images['data'] as $key => $value) {
                    if ($value['type'] == 'unlu') {
                      ?>
                      <figure class="gallery__item gallery__item_2--<?php echo $counter0++; ?>">
                        <img src="<?php echo $value['url'] ?>" loading="lazy" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                        <!-- <div class="gallery__item-overlay-background"></div>  --> 
                      </figure>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <div id="tabA22" class="tabcontent list-number">
            <h4><?php echo $newton['title'] ?></h4>
            <?php 
              foreach ($newton['data1'] as $key => $value) {
                echo '<div>'.$value.'</div>';
              }
              if ($newton['list']) 
              { 
            ?>
                <div class="mb0">
                  <?php echo $newton['list']['title'] ?>
                </div>
                <ol class="pl20">
                  <?php 
                    foreach ($newton['list']['content'] as $key => $itemValue) 
                    {
                  ?>
                      <li><?php echo $itemValue ?></li>
                  <?php 
                    }
                  ?>
                </ol>
            <?php 
              }
              foreach ($newton['data2'] as $key => $value) {
                echo '<div>'.$value.'</div>';
              }
            ?>
            <div class="col-md-12 p0">  
              <div class="gallery_img_box gib_bg">
                <?php
                  $counter0 = 1; 
                  foreach ($tip_images['data'] as $key => $value) {
                    if ($value['type'] == 'newton') {
                      ?>
                      <figure class="gallery__item gallery__item_2--<?php echo $counter0++; ?>">
                        <img src="<?php echo $value['url'] ?>" loading="lazy" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                        <!-- <div class="gallery__item-overlay-background"></div>  --> 
                      </figure>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <div id="tabA23" class="tabcontent list-number">
            <h4><?php echo $mou_signing_DHE_GSHEC['title'] ?></h4>
            <?php 
              foreach ($mou_signing_DHE_GSHEC['data1'] as $key => $value) {
                echo '<div>'.$value.'</div>';
              }
            ?>
            <div class="col-md-12 p0">  
              <div class="gallery_img_box gib_bg">
                <?php
                  $counter0 = 1; 
                  foreach ($tip_images['data'] as $key => $value) {
                    if ($value['type'] == 'mou_signing_DHE_GSHEC') {
                      ?>
                      <figure class="gallery__item gallery__item_3--<?php echo $counter0++; ?>">
                        <img src="<?php echo $value['url'] ?>" loading="lazy" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                        <!-- <div class="gallery__item-overlay-background"></div>  --> 
                      </figure>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <div id="tabA24" class="tabcontent list-number">
            <h4><?php echo $shiksha_sangam['title'] ?></h4>
            <?php 
              foreach ($shiksha_sangam['data'] as $key => $value) {
                echo '<div>'.$value.'</div>';
              }
            ?>
            <div class="col-md-12 p0">  
              <div class="gallery_img_box gib_bg">
                <?php
                  $counter0 = 1; 
                  foreach ($tip_images['data'] as $key => $value) {
                    if ($value['type'] == 'shiksha_sangam') {
                      ?>
                      <figure class="gallery__item gallery__item_3--<?php echo $counter0++; ?>">
                        <img src="<?php echo $value['url'] ?>" loading="lazy" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                        <!-- <div class="gallery__item-overlay-background"></div>  --> 
                      </figure>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <div id="tabA25" class="tabcontent list-number">
            <h4><?php echo $inspire_to_aspire_2['title'] ?></h4>
            <div class="text-center"><strong>
              <?php 
                foreach ($inspire_to_aspire_2['subtitle'] as $key => $value) {
                  echo $value.'<br>';
                }
              ?>
            </strong></div>
            <?php 
              foreach ($inspire_to_aspire_2['schedule'] as $key => $value) {
                echo '<p style="font-size:18px!important; padding: 0!important;">'.$value.'</p>';
              }
              // chart
              echo '<img src="'.$inspire_to_aspire_2['chart_url'].'" loading="lazy" alt="TCS PLACEMENT DRIVE 2023 (Students Attended _ Placed)" class="pt20 pb20" >';
              echo '
              <br>
              <div>
                <strong>'.$inspire_to_aspire_2['data1_title'].'</strong>'.
                $inspire_to_aspire_2['data1_subtitle'].'
              </div>';
                foreach ($inspire_to_aspire_2['data1'] as $key => $value) {
                  echo '<div>'.$value.'</div>';
                }
                echo '
              <img src="'.$inspire_to_aspire_2['data1_img_url'].'" loading="lazy" alt="Gallery image 1" class="" style="background-color:#000;">
              <p style="font-size:16px!important; padding: 0!important;">'.$inspire_to_aspire_2['data1_img_caption'].'</p>
                
              <br><br>
              <div>
              <strong>'.$inspire_to_aspire_2['data2_title'].'</strong>'.
              $inspire_to_aspire_2['data2_subtitle'].'
              </div>';
                foreach ($inspire_to_aspire_2['data2'] as $key => $value) {
                  echo '<div>'.$value.'</div>';
                }
              echo '
              <img src="'.$inspire_to_aspire_2['data2_img_url'].'" loading="lazy" alt="Gallery image 1" class="" style="background-color:#000;">
              <p style="font-size:16px!important; padding: 0!important;">'.$inspire_to_aspire_2['data2_img_caption'].'</p>
              ';
            ?>
          </div>


          <!-- Image Viewer -->
          <div class="expandContainer d-none" id="expandContainer">
            <div class="grid_size">
              <span onclick="this.parentElement.style.display='none'; closeExpandedImage();" class="closebtn">&times;</span>
              <img id="expandedImg">
              <div id="imgtext" class="d-none"></div>
            </div>
          </div>
        
        </div>
      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <script src="assets/js/custom_frontend.js"></script>

  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
  <script>

</script>
</html>