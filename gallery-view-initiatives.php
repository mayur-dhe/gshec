<?php
  $title = 'Gallery';
  $title_url = "gallery.php";
  $title_2 = "All Initiatives";
  $title_3 = $_GET['jnhstrefbd'];
  require 'layout/top-header.php';
?>
<!-- courosal -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->

<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = $title." - ".$title_3;
  $isGalleryPage = true;
  require 'layout/site-map.php';
  include 'data/initiatives.php';
?>

  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <?php 
          foreach ($images as $key => $value) 
          {
            if ($value['title']==$title_3) 
            {
              foreach ($value['data'] as $key => $valueImage) 
              {
                $imageCount = $key+1;
        ?>
                  <div class="col-lg-3 col-md-6 p0">
                    <div class="gallery">
                      <a href="#" type="button" onclick="showModel('<?php echo $imageCount ?>'); return false;" title="<?php echo $valueImage['alt']?>" class="gallery_item">
                        <img class="img_bgColor"  src="<?php echo $valueImage['url']?>" alt="<?php echo $valueImage['alt']?>">
                      </a>
                    </div>
                  </div>
        <?php
              }
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
                  foreach ($images as $key => $image_list) 
                  {
                    if ($image_list['title']==$title_3) 
                    {
                      foreach ($image_list['data'] as $key => $value) 
                      { 
              ?>
                        <div class="mySlides">
                            <div class="numbertext"><?php echo  ++$key.'/'.count($image_list); ?></div>
                            <img class="img_bgColor"  src="<?php echo $value['url']?>" alt="<?php echo $value['alt']?>" style="width:100%; height: 500px; object-fit: contain;">
                        </div>
              <?php 
                      } 
                    } 
                  } 
              ?>

              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>

              <div class="row" style="padding: inherit;">
                <?php
                    foreach ($images as $key => $image_list) 
                    {
                      if ($image_list['title']==$title_3) 
                      {
                        foreach ($image_list['data'] as $key => $value) 
                        { 
                          $modelImageCount = $key+1;

                ?>
                            <div class="column">
                              <img class="img_bgColor"  class="demo cursor" src="<?php echo $value['url']?>" alt="<?php echo $value['alt']?>" style="width:100%" onclick="currentSlide('<?php echo $modelImageCount ?>')" >
                            </div>
                <?php 
                        } 
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
        showSlides(slideIndex);
    });

    function showModel(count) {
      slideIndex = count;
      showSlides(slideIndex);
      $('#exampleModal').toggle();
    }


    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    function showSlides(n) {
      slideIndex = n;
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
      // dots[slideIndex-1].className += " active";
    }
  </script>
  </body>
</html>