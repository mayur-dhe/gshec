<?php
  $title = "National Education Policy 2020";
  $title_url = "#";
  require 'layout/top-header.php';
?>
<body>
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "National Education Policy 2020";
  $isCardsPage = true;
  $getUrlID = 1;
  require 'layout/site-map.php'; 
  include 'data/nep.php';
?>
<style>
  section.heading-page {
    background-image: url(assets/images/nep/intro-cover-img.png);
    padding-bottom: 472px;
    background-color: #c0c3c2;
    background-size: contain;
    min-width: 100%;
    min-height: 90vh;
    max-width: 100%;
    max-height: 100vh;
  }
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
  .layout_border-title {
    /* top: 640px; */
    top: 100vh;
  }
</style>
  <div class="layout_border-left"></div>
  <div class="layout_border-title textColor-black"><?php echo $title; ?></div>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section textColor-black">
    <div class="container mb30">
      <div class="row">
        <div class="col-md-10">
          <h3 class="textColor-black intro-title mb40">
            The core of new National Education Policy (NEP) 2020 is to develop a Learner-centric education system that will provide quality and truly holistic education for all-round  growth of Learners. 
          </h3>
        </div>
        <div class="col-md-12 col-lg-6">
          Looking at the successful institutions that make at the top of the World Rankings, two common features emerge:  
          <div class="pl20">
            <strong class="list-number">
              <ol>
                <li>They are all research institutions, and </li>
                <li>They are large in terms of student population, often with more than 10,000 students on a single campus, and providing UG, PG, and PhD programs on a single campus.</li>
              </ol>
            </strong>
          </div>
          These characteristics of top institutions make their campus vibrant, and provide students even at UG level, an unique opportunity to interact with PhD students, Postdoctoral fellows, researchers, and faculty. Furthermore, the use of common infrastructure, and access to the state-of-the art facilities becomes feasible.
        </div>
        <div class="col-md-12 col-lg-6 pl30">
          <video class="mb40" width="auto" height="285" controls autoplay muted loop>
            <source src="assets/video/nep/NEP page video.mp4" type="video/mp4">
            <!-- <source src="movie.ogg" type="video/ogg"> -->
            Your browser does not support the video tag.
          </video>
        </div>

        <div class="col-md-12 col-lg-7 pr90">
          The above successful model of education is not too different from India’s ancient campuses like Nalanda University which was catering to about 10,000 students and providing truly multidisciplinary education in Buddhist studies, fine arts, medicine,  mathematics, politics, astronomy, and art of war.
          <div class="pt15">
            Thus, the implementation of NEP 2020 in true spirit needs to be done focusing on such successful models. Above all, focusing on Research in all HEIs including at UG level is a must because it is only through Research, we can produce enthusiastic teachers, and experiential teaching-Learning process for students. Research is the backbone of any developed nation, and only research can enhance the standards of living of our society. 
          </div>
          <div class="pt15">
            Finally, and most importantly, preparing students both mentally and physically, for life-long learning will be a major milestone to be achieved through NEP 2020.
          </div>
        </div>
        <div class="col-md-12 col-lg-5 pl30">
          <?php if ($linksData && $linksData['code']=='200') { ?>
            <div class="fontWt-6">Resources</div>
            <ol>
              <?php foreach ($linksData['data'] as $key => $link) { ?>
                <li class="ref-links"><?php echo $link['id'] ?> <a href="<?php echo $link['url'] ?>" class="textDeco-underline" target="<?php echo $link['target']?>"><?php echo $link['title'] ?></a></li>
              <?php } ?>
            </ol>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <?php 
    if ($data) { 
      foreach ($data as $key => $value) { 
        ?>
        <section class="layout_border-top textColor-black">
          <div class="container mb30">  
            <div class="row">
              <div class="col-md-12">
                <p class="intro-title auto_height mb0 layout_border-top-title px30"><?php echo $value['title'] ?></p>
              </div>
              <div class="col-md-12 col-lg-7 pr90">
                <?php 
                  if ($value['isContent']== true) { 
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
                          echo '<li>'.$list.'</li>';
                        }
                    echo '
                        </ul>
                      </div>
                    ';
                  }
                ?>
              </div>
              <div class="col-md-12 col-lg-5 pl30">
                <?php 
                  if ($value['isLinks']== true) { 
                    echo '<div class="fontWt-6">Resources</div>';
                      ?>
                      <ol>
                        <?php 
                          foreach ($value['links'] as $key => $link) {  
                            ?>
                            <li class="ref-links"><?php echo $link['id'] ?> <a href="<?php echo $link['url'] ?>" class="textDeco-underline" target="<?php echo $link['target']?>"><?php echo $link['title'] ?></a></li>
                            <?php 
                          } 
                        ?>
                      </ol>
                    <?php 
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
  <script>
    // show more list
    function showMore() {
      $(".list_items").toggleClass("d-none");
    }
    function showMoreSalient() {
      $(".list_items_salient").toggleClass("d-none");
    }
    
  </script>
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>