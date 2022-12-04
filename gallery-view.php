<?php
  $title = $_GET['jnhsdwmxifkd'];
  $title_2 = $_GET['jnhstrefbd'];
  $title_3 = $_GET['kihdfhsfkd'];
  $gallery_status = 1;
  require 'layout/top-header.php';
?>
<style>
/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}
.column img {
  margin-top: 12px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "Gallery - ".$title;
  require 'layout/site-map.php'; 
  include 'data/rusa.php';
  include 'data/council.php';
  include 'data/initiatives.php';
  include 'data/teaching_learning.php';
?>

  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-0">
          <div class="row">
            <div class="col-lg-12 mt-5 mt-lg-0 d-flex px-5">
              <div class="row align-self-center gy-1">

                <?php 
                  if ($title == "Initiatives" && $title_2 == "") {
                ?>
                  <!-- 1 mou_images -->
                  <div class="col-lg-3" style="height: fit-content;">
                    <a href="gallery-view?jnhsdwmxifkd=<?php echo $title?>&jnhstrefbd=<?php echo $mou_images['title']?>">
                      <div class="gallery-item">
                        <div class="thumb">
                          <img src="<?php echo $mou_images['data'][0]['url'] ?>" alt="<?php echo $mou_images['data'][0]['alt'] ?>">
                        </div>
                        <div class="down-content">
                          <h4><?php echo concat_string($mou_images['title']);?></h4>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- 2 obe -->
                  <div class="col-lg-3" style="height: fit-content;">
                    <a href="gallery-view?jnhsdwmxifkd=<?php echo $title?>&jnhstrefbd=<?php echo $obe['title'] ?>">
                      <div class="gallery-item">
                        <div class="thumb">
                          <img src="<?php echo $obe['data'][0]['url'] ?>" alt="<?php echo $obe['data'][0]['alt'] ?>">
                        </div>
                        <div class="down-content">
                          <h4><?php echo concat_string($obe['title']);?></h4>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- 3 job_drive -->
                  <div class="col-lg-3" style="height: fit-content;">
                    <a href="gallery-view?jnhsdwmxifkd=<?php echo $title?>&jnhstrefbd=<?php echo $job_drive['title'] ?>">
                      <div class="gallery-item">
                        <div class="thumb">
                          <img src="<?php echo $job_drive['data'][0]['url'] ?>" alt="<?php echo $job_drive['data'][0]['alt'] ?>">
                        </div>
                        <div class="down-content">
                          <h4><?php echo concat_string($job_drive['title']);?></h4>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- 4 aip -->
                  <div class="col-lg-3" style="height: fit-content;">
                    <a href="gallery-view?jnhsdwmxifkd=<?php echo $title?>&jnhstrefbd=<?php echo $aip['title'] ?>">
                      <div class="gallery-item">
                        <div class="thumb">
                          <img src="<?php echo $aip['data'][0]['url'] ?>" alt="<?php echo $aip['data'][0]['alt'] ?>">
                        </div>
                        <div class="down-content">
                          <h4><?php echo concat_string($aip['title']);?></h4>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- 5 dhe -->
                  <div class="col-lg-3" style="height: fit-content;">
                    <a href="gallery-view?jnhsdwmxifkd=<?php echo $title?>&jnhstrefbd=<?php echo $dhe['title'] ?>">
                      <div class="gallery-item">
                        <div class="thumb">
                          <img src="<?php echo $dhe['data'][0]['url'] ?>" alt="<?php echo $dhe['data'][0]['alt'] ?>">
                        </div>
                        <div class="down-content">
                          <h4><?php echo concat_string($dhe['title']);?></h4>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- 6 tip -->
                  <div class="col-lg-3" style="height: fit-content;">
                    <a href="gallery-view?jnhsdwmxifkd=<?php echo $title?>&jnhstrefbd=<?php echo $tip['title'] ?>">
                      <div class="gallery-item">
                        <div class="thumb">
                          <img src="<?php echo $tip['data'][0]['url'] ?>" alt="<?php echo $tip['data'][0]['alt'] ?>">
                        </div>
                        <div class="down-content">
                          <h4><?php echo concat_string($tip['title']);?></h4>
                        </div>
                      </div>
                    </a>
                  </div>
                  
                <?php 
                  } else if ($title == "RUSA" || $title == "Teaching, Learning and Educational Technology" ) {
                    switch ($title) {
                      case 'RUSA': $image_list = $rusa_images['data']; break;
                      case 'Teaching, Learning and Educational Technology': $image_list = $teaching_learning_images['data']; break;
                    }
                    foreach ($image_list as $key => $value) 
                    {
                ?>
                      <div class="column">
                        <a href="#" title="<?php echo $value['alt']?>" class="gallery_item">
                          <img src="<?php echo $value['url']?>" alt="<?php echo $value['alt']?>">
                        </a>
                      </div>
                <?php
                    }

                  } else {
                    switch ($title_2) {
                      case 'Memorandum of Understanding': $image_list = $mou_images['data']; break;
                      case 'Outcome-Based Education': $image_list = $obe['data']; break;
                      case 'Job Placement Drive': $image_list = $job_drive['data']; break;
                      case 'Academic Interface Programme': $image_list = $aip['data']; break;
                      case 'DHE': $image_list = $dhe['data']; break;
                      case 'Training Internship and Placement Cell': $image_list = $tip['data']; break; 
                    }
                    foreach ($image_list as $key => $value) 
                    {
                ?>
                      <div class="column">
                        <a href="#" title="<?php echo $value['alt']?>" class="gallery_item">
                          <img src="<?php echo $value['url']?>" alt="<?php echo $value['alt']?>">
                        </a>
                      </div>
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
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>