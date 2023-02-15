<section class="heading-page">
    <div class="container contains-sitemap">
        <div class="row">
            <div class="col-lg-12">
                <ul class="site-map">
                    <li><a href="index"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="#"> > </a></li>
                    
                    <?php if ($title) { ?>
                        <li><a href="<?php echo strtolower($title); ?>"><?php echo $title;?></a></li>
                    <?php } 
                        if ($title_2) { ?>
                        <li><a href=""> > </a></li>
                        <li><a href="<?php echo $title_3 ? strtolower($title_2) : '#';?>"><?php echo $title_2;?></a></li>
                    <?php } 
                        if ($title_3) { ?>
                        <li><a href=""> > </a></li>
                        <li><a href="<?php echo $title_4 ? strtolower($title_3) : '#';?>"><?php echo $title_3;?></a></li>    
                    <?php } 
                        if ($title_4) { ?>
                        <li><a href=""> > </a></li>
                        <li><a href="<?php echo $title_4 ? strtolower($title_4) : '';?>"><?php echo $title_4;?></a></li>    
                    <?php } ?>


                    <!-- <li class="page-back"><a class="back_btn" href="index">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                    </li> -->
                </ul>
                <h6></h6>
            </div>
        </div>
    </div>
</section>
<?php 
    if ($subtitle) {
        echo '<h3 class="page-title">'.$subtitle.'</h3>';
    }
?>
<div class="heading-div header-text" id="top">
    nav scroller
</div>


<!-- margin-top: -120px;
position: absolute;
width: 100%; -->