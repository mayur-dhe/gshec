<section class="heading-page" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="site-map">
                    <li><a href="index"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    
                    <?php if ($gallery_status > 1) { ?>
                        <li><a href="gallery">Gallery</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <li><a href="#"><?php echo $title;?></a></li>
                    <?php } else { ?>
                        <li><a href="#"><?php echo $title;?></a></li>
                    <?php } ?>
                    <?php if ($title_2) { ?>
                    
                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <li><a href="#"><?php echo $title_2;?></a></li>
                    
                    <?php } else if ($title_3) { ?>
                    
                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <li><a href="#"><?php echo $title_3;?></a></li>    
                    
                    <?php } ?>
                    <!-- <li class="page-back"><a class="back_btn" href="index">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                    </li> -->
                </ul>
                <h6></h6>
                <h2 style="text-align: center"><?php echo $subtitle;?></h2>
            </div>
        </div>
    </div>
</section>

<div class="heading-div header-text" id="top">
    nav scroller
</div>