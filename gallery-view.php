<?php
  $title = 'Gallery';
  $title_2 = $_GET['jnhsdwmxifkd'];
  $title_3 = $_GET['jnhstrefbd'];
  $title_4 = $_GET['kihdfhsfkd'];
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = $title." - ".$title_2;
  require 'layout/site-map.php'; 
  include 'data/rusa.php';
  include 'data/council.php';
  include 'data/initiatives.php';
  include 'data/tlet.php';
?>

  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <?php 
          if ($title_2 == "Initiatives" && $title_3 == "") {
        ?>
          <!-- 1 mou_images -->
          <div class="col-lg-3 col-md-6 p0">
            <div class="gallery">
              <a href="gallery-view?jnhsdwmxifkd=<?php echo $title_2?>&jnhstrefbd=<?php echo $mou_images['title']?>">
                <div class="gallery-item">
                  <div class="thumb">
                    <img src="<?php echo $mou_images['data'][0]['url'] ?>" alt="<?php echo $mou_images['data'][0]['alt'] ?>">
                  </div>
                  <div class="down-content">
                    <h4><?php echo concat_string($mou_images['title']);?></h4>
                  </div>
                </div>
                <div class="overlay">
                  <div class="text">Open Folder</div>
                </div>
              </a>
            </div>
          </div>
          <!-- 2 obe -->
          <div class="col-lg-3 col-md-6 p0">
            <div class="gallery">
              <a href="gallery-view?jnhsdwmxifkd=<?php echo $title_2?>&jnhstrefbd=<?php echo $obe['title'] ?>">
                <div class="gallery-item">
                  <div class="thumb">
                    <img src="<?php echo $obe['data'][0]['url'] ?>" alt="<?php echo $obe['data'][0]['alt'] ?>">
                  </div>
                  <div class="down-content">
                    <h4><?php echo concat_string($obe['title']);?></h4>
                  </div>
                </div>
                <div class="overlay">
                  <div class="text">Open Folder</div>
                </div>
              </a>
            </div>
          </div>
          <!-- 3 job_drive -->
          <div class="col-lg-3 col-md-6 p0">
            <div class="gallery">
              <a href="gallery-view?jnhsdwmxifkd=<?php echo $title_2?>&jnhstrefbd=<?php echo $job_drive['title'] ?>">
                <div class="gallery-item">
                  <div class="thumb">
                    <img src="<?php echo $job_drive['data'][0]['url'] ?>" alt="<?php echo $job_drive['data'][0]['alt'] ?>">
                  </div>
                  <div class="down-content">
                    <h4><?php echo concat_string($job_drive['title']);?></h4>
                  </div>
                </div>
                <div class="overlay">
                  <div class="text">Open Folder</div>
                </div>
              </a>
            </div>
          </div>
          <!-- 4 aip -->
          <div class="col-lg-3 col-md-6 p0">
            <div class="gallery">
              <a href="gallery-view?jnhsdwmxifkd=<?php echo $title_2?>&jnhstrefbd=<?php echo $aip['title'] ?>">
                <div class="gallery-item">
                  <div class="thumb">
                    <img src="<?php echo $aip['data'][0]['url'] ?>" alt="<?php echo $aip['data'][0]['alt'] ?>">
                  </div>
                  <div class="down-content">
                    <h4><?php echo concat_string($aip['title']);?></h4>
                  </div>
                </div>
                <div class="overlay">
                  <div class="text">Open Folder</div>
                </div>
              </a>
            </div>
          </div>
          <!-- 5 dhe -->
          <div class="col-lg-3 col-md-6 p0">
            <div class="gallery">
              <a href="gallery-view?jnhsdwmxifkd=<?php echo $title_2?>&jnhstrefbd=<?php echo $dhe['title'] ?>">
                <div class="gallery-item">
                  <div class="thumb">
                    <img src="<?php echo $dhe['data'][0]['url'] ?>" alt="<?php echo $dhe['data'][0]['alt'] ?>">
                  </div>
                  <div class="down-content">
                    <h4><?php echo concat_string($dhe['title']);?></h4>
                  </div>
                </div>
                <div class="overlay">
                  <div class="text">Open Folder</div>
                </div>
              </a>
            </div>
          </div>
          <!-- 6 tip -->
          <div class="col-lg-3 col-md-6 p0">
            <div class="gallery">
              <a href="gallery-view?jnhsdwmxifkd=<?php echo $title_2?>&jnhstrefbd=<?php echo $tip['title'] ?>">
                <div class="gallery-item">
                  <div class="thumb">
                    <img src="<?php echo $tip['data'][0]['url'] ?>" alt="<?php echo $tip['data'][0]['alt'] ?>">
                  </div>
                  <div class="down-content">
                    <h4><?php echo concat_string($tip['title']);?></h4>
                  </div>
                </div>
                <div class="overlay">
                  <div class="text">Open Folder</div>
                </div>
              </a>
            </div>
          </div>
          
        <?php 
          } else if ($title_2 == "RUSA" || $title_2 == "Teaching, Learning and Education Technology" ) {
            switch ($title_2) {
              case 'RUSA': $image_list = $rusa_images['data']; break;
              case 'Teaching, Learning and Education Technology': $image_list = $teaching_learning_images['data']; break;
            }
            foreach ($image_list as $key => $value) 
            {
              $imageCount = $key+1;
        ?>
              <div class="col-lg-3 col-md-6 p0">
                <div class="gallery">
                  <a href="#" type="button" onclick="showModel('<?php echo $title_2 ?>',' <?php echo $imageCount ?>'); return false;" title="<?php echo $value['alt']?>" class="gallery_item">
                    <img src="<?php echo $value['url']?>" alt="<?php echo $value['alt']?>">
                  </a>
                </div>
              </div>
        <?php
            }

          } else {
            switch ($title_3) {
              case 'Memorandum of Understanding': $image_list = $mou_images['data']; break;
              case 'Outcome-Based Education': $image_list = $obe['data']; break;
              case 'Job Placement Drive': $image_list = $job_drive['data']; break;
              case 'Academic Interface Programme': $image_list = $aip['data']; break;
              case 'DHE': $image_list = $dhe['data']; break;
              case 'Training, Internship and Placement Cell': $image_list = $tip['data']; break; 
            }
            foreach ($image_list as $key => $value) 
            {
        ?>
              <div class="col-lg-3 col-md-6 p0">
                <div class="gallery">
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
  </section>
  <!-- ------------- Main Content End---------------------- -->

  <!-- Modal -->
  <div class="modal" id="exampleModal" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="background-color: #000000d1;">
    <div class="modal-dialog modal-xl" style="background-color: #000000;">
      <div class="modal-content" style="background-color: #61616152;">
        <button type="button" class="btn-close" style="background-color: #ffffffd1; margin-left: auto; padding-top: 15px; padding-right: 20px; margin-bottom: -17px; z-index: 99999;" onclick="showModel(0,0);" aria-label="Close"></button>

        <div class="modal-body">
          
          <div class="container">
              <?php
                if ($title_2 == "RUSA" || $title_2 == "Teaching, Learning and Education Technology" ) {
                  switch ($title_2) {
                    case 'RUSA': $image_list = $rusa_images['data']; break;
                    case 'Teaching, Learning and Education Technology': $image_list = $teaching_learning_images['data']; break;
                  }
                  foreach ($image_list as $key => $value) 
                  { 
              ?>
                    <div class="mySlides">
                        <div class="numbertext"><?php echo  ++$key.'/'.count($image_list); ?></div>
                        <img src="<?php echo $value['url']?>" alt="<?php echo $value['alt']?>" style="width:100%; height: 500px; object-fit: contain;">
                    </div>
              <?php 
                  } 
                } 
              ?>

              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>

              <div class="row" style="padding: inherit;">
                <?php
                  if ($title_2 == "RUSA" || $title_2 == "Teaching, Learning and Education Technology" ) {
                    switch ($title_2) {
                      case 'RUSA': $image_list = $rusa_images['data']; break;
                      case 'Teaching, Learning and Education Technology': $image_list = $teaching_learning_images['data']; break;
                    }
                    foreach ($image_list as $key => $value) 
                    { 
                      $modelImageCount = $key+1;

                ?>
                      <div class="column">
                        <img class="demo cursor" src="<?php echo $value['url']?>" alt="<?php echo $value['alt']?>" style="width:100%" onclick="currentSlide('<?php echo $modelImageCount ?>')" >
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

  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  <script>
    let slideIndex = 0;
    $(function () {
  
    });

    function showModel(type, count) {
      slideIndex = count;
      showSlides(slideIndex);
      $('#exampleModal').toggle();
    }

    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("demo");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
    }
  </script>
  </body>
</html>