<?php
  $title = "National Education Policy 2020";
  $title_url = "national-education-policy.php";
  require 'layout/top-header.php';
?>
<body>
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "National Education Policy 2020";
  $title_2 = "Salient Features of NEP 2020";
  $page_title = "Salient Features of NEP 2020";
  require 'layout/site-map.php'; 
  include 'data/nep_links.php';
?>
<style>
 * {
    font-family: MessinaSans,sans-serif;
    line-height: 1.6;
  }
  .page-section {
    padding: 40px 100px 40px 110px;
  }
  section.footer-box {
    padding: 0 100px 0 120px;
  }
</style>
  <div class="layout_border-left"></div>
  <div class="layout_border-title textColor-black"><?php echo $page_title; ?></div>
  <!-- ------------- Main Content Start---------------------- -->
  <?php 
    if ($salient_features) { 
      foreach ($salient_features as $key => $value) { 
        $border = "";
        if ($key!=0) {
          $border = "layout_border-top-title ";
        }
        ?>
        <section class="layout_border-top textColor-black">
          <div class="container mb30">  
            <div class="row">
              <div class="col-md-10">
                <p class="intro-title auto_height mb0 <?php echo $border?> px30"><?php echo $value['title'] ?></p>
              </div>
              <div class="col-md-12 col-lg-10 pr90">
                <?php 
                  if ($value['isContent']== true) { 
                    echo '<strong>Status : </strong>';
                    foreach ($value['content'] as $key => $content) { 
                      if ($key>0) {
                        echo '<div class="pt15">'.$content.'</div>';
                      } else {
                        echo $content;
                      }
                    }
                  }
                  if ($value['isContent']== true && $value['isList']== true) { 
                    echo '<div class="pt15"></div>';
                  }
                  if ($value['isList']== true) { 
                    echo '
                      <div class="list-dot pl20">
                        <ul>';
                        foreach ($value['list'] as $key => $list) {  
                          echo '<li class="pb5">'.ucfirst("$list").'</li>';
                        }
                    echo '
                        </ul>
                      </div>
                    ';
                    if ($value['isContent2']== true) { 
                      foreach ($value['content2'] as $key => $content) { 
                        if ($key>0) {
                          echo '<div class="pt15">'.$content.'</div>';
                        } else {
                          echo $content;
                        }
                      }
                    }

                  }
                ?>
              </div>
            </div>
          </div>
        </section>
        <?php 
      } 
    } 
  ?>
  <!-- ------------- Main Content End---------------------- -->
  <script src="assets/js/custom_frontend.js"></script>
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>