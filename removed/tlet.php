
<section class="mt_n132">
<div class="row">
  <div class="col-lg-12 p-0">
    <!-- corosal ---------------------- -->
    <div id="demo" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ul class="carousel-indicators">
          <?php foreach ($teaching_learning_images['data'] as $key => $image){  ?>
                  <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
          <?php } ?>  
      </ul>
      <!-- The slideshow -->
      <div class="carousel-inner">
          <?php foreach ($teaching_learning_images['data'] as $key => $image) { ?>
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