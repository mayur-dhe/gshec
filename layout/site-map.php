<section class="heading-page">
    <div class="container contains-sitemap">
        <div class="row">
            <div class="col-lg-12">
                <ul class="site-map">
                    <?php 
                        $index_url = 'href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home';
                        if ($isCardsPage == true) {
                            echo '<li><a class="show_cards" '.$index_url.' <i class="fa fa-caret-down"></i></a></li>';
                        } else {
                            echo '<li><a '.$index_url.'</a></li>';
                        }
                        echo '<li><a href="#"> > </a></li>';
                        if ($title) { 
                            if ($isGalleryPage == true) {
                                echo '<li><a class="show_gallery" href="'.$title_url.'">'.$title.' <i class="fa fa-caret-down"></i></a></li>';
                            } else {
                                echo '<li><a href="'.$title_url.'">'.$title.'</a></li>';
                                // if ($isCardsPage == true) { echo 'class="show_cards" ';}
                            }
                        } 
                        if ($title_2) { 
                            echo '<li><a href=""> > </a></li>';
                            if ($isInitiativesPage == true) {
                                echo '<li><a class="show_initiatives" href="#">'.$title_2.' <i class="fa fa-caret-down"></i></a></li>';
                            } else {
                    ?>
                                <li><a href="<?php echo $title_3 ? $title_2 : '#';?>"><?php echo $title_2;?></a></li>
                    <?php 
                            } 
                        } 
                        if ($title_3) { ?>
                        <li><a href=""> > </a></li>
                        <li><a href="<?php echo $title_4 ? $title_3 : '#';?>"><?php echo $title_3;?></a></li>    
                    <?php } 
                        if ($title_4) { ?>
                        <li><a href=""> > </a></li>
                        <li><a href="<?php echo $title_5 ? $title_4 : '';?>"><?php echo $title_4;?></a></li>    
                    <?php } ?>


                    <!-- <li class="page-back"><a class="back_btn" href="index">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
                    </li> -->
                </ul>
                <?php
                    if ($isCardsPage == true) {
                ?>
                        <div class="list_box cards_link d-none">
                            <ul class="sub-menu">
                                <?php
                                    include 'data/cards.php';
                                    foreach ($cards as $key => $value) {
                                        if ($value['id'] == $getUrlID) {
                                        } else {
                                            echo '<li><a href="'.$value['url'].'">'.$value['title'].'</a></li>';
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                <?php
                    }
                    if ($isInitiativesPage == true) {
                ?>
                        <div class="list_box initiatives_link d-none">
                            <ul class="sub-menu">
                                <?php
                                    include 'data/initiatives.php';
                                    foreach ($initiatives as $key => $value) {
                                        if ($value['id'] == $getUrlID) {
                                        } else {
                                            echo '<li><a href="initiative.php?jnhsdwmxifkd='.$value['id'].'">'.$value['short_name'].'</a></li>';
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                <?php
                    }
                    if ($isGalleryPage == true) {

                ?>
                        <div class="list_box gallery_link d-none">
                            <ul class="sub-menu">
                            </ul>
                        </div>
                <?php 
                    }
                ?>
                <!-- <h6></h6> -->
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