<?php
  $title = "Center for Teaching, Learning and Education Technology";
  $title_url = "#";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Center for Teaching, Learning and Education Technology";
  $isCardsPage = true;
  $getUrlID = 3;
  require 'layout/site-map.php'; 
  include 'data/tlet.php';
?>
<style>
  section.heading-page {
    /* background-image: url(assets/images/tle/cover-img.jpg); */
    /* padding-bottom: 430px; */
  }
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
            <button class="tablinks" onclick="showActivity(1)">Activity <span class="dd-icon"> <i class="fa fa-caret-right dd-selected-right"></i> <i class="fa fa-caret-down dd-selected-down d-none"></i></span></button>
            <?php 
              foreach ($activity as $key => $value) 
              {
            ?>
                <button class="d-none activities tablinks <?php echo $class0 ?>" onclick="openTabSection(event, 'tabA<?php echo ++$key ?>')"><?php echo $value ?></button>
            <?php } ?>
          </div>
            
          <div id="tab0" class="tabcontent">
            <h4><?php echo $title ?></h4>
            <div class="row gy-1">
              <?php 
                foreach ($teaching_learning as $key => $value) {
              ?>
                  <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                    <div class="row listing-box d-flex align-items-center">  
                      <h3 class="col-10"><?php echo $value ?></h3>
                    </div>
                  </div>
              <?php } ?>
            </div>
          </div>
          <!-- pending ----------------------------------------------------------------- -->
          <div id="tab1" class="tabcontent">
            <h4><?php echo $vision['title']?></h4>
            <?php foreach ($vision['data'] as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
          </div>
          <!-- pending ----------------------------------------------------------------- -->
          <div id="tab2" class="tabcontent">
            <h4><?php echo $mission['title']?></h4>
            <?php foreach ($mission['data'] as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
          </div>
          <!-- pending UP ----------------------------------------------------------------- -->
          <div id="tabA1" class="tabcontent">
            <h4>Outcome Based Education</h4>
            <div class="row">
              <div class="col-md-12">
                <p class="p0 fontSize-14">
                  Outcome Based Education (OBE) is a flexible, empowerment-oriented approach to learning. It aims to equip learners with the knowledge, competence, and orientation needed for success after graduating from the institution. Hence, OBE is a powerful education strategy based on Bloom’s Taxonomy designed to achieve higher-order thinking. To impart high quality in the Higher Education Institutes (HEIs) in the state. Goa State Higher Education Council in the Directorate of Higher Education conducted a comprehensive and statewide faculty orientation programme focussed on outcome-based education. Prof Niyan Marchon, Professor, Teaching, learning and Educational Technology, GSHEC was the resource person for the workshops at all HEIs. Through this workshops, 1,619 faculty from 33 colleges were trained in “Outcome Based Education - Attainment of Program and Course outcomes”.  From three major sections of Goa University i.e., Science, Humanities and Goa Business School,175 faculty were also  trained.
                </p>
              </div>
              <div class="col-md-12">
                <div class="gallery_img_box gib_bg">
                  <?php
                    $counter0 = 1; 
                    foreach ($teaching_learning_images['data'] as $key => $value) {
                      if ($value['type'] == 'obe') {
                        ?>
                        <figure class="gallery__item gallery__item_7--<?php echo $counter0++; ?>">
                          <a href="">
                            <img src="<?php echo $value['url'] ?>" alt="Gallery image 1" class="gallery__img g_img_cover" style="background-color:#000;">
                            <div class="gallery__item-overlay-background"></div>
                          </a>
                        </figure>
                        <?php
                      }
                    }
                  ?>
                </div>
              </div>

            </div>
          </div>
          <div id="tabA2" class="tabcontent">
            <h4>Massive Open Online Course Development at DHE</h4>
            <div class="row list-number">
              <div class="col-md-12">
                <p class="p0 fontSize-14">
                  With an intent to facilitate seamless integration of Massive Open Online Courses (MOOC)s into the academic structure of higher education in Goa, the Directorate of Higher Education has launched Mentoring and Nurturing Digital and Virtual Initiatives 
                  <strong>(MANDAVI) </strong>
                  program for mentoring, training and supporting faculty from higher education institutions towards design and development of the MOOC content. The unique characteristic of this program is to carry out all MOOC development activities in collaborative mode. The production-based training and recording of video content of the course has been done with the creative directors and experts from the film industry to produce high-quality educational content. Eminent scientists and practitioners from research institutions and industries have been involved at various stages of the MOOC development process. 
                </p>
                <p class="p0 fontSize-14">
                  Currently phase-1 is in progress and five MOOC courses are under development which includes Music, Analytical Chemistry, Geology, Microbiology and Biochemistry. The courses are based on University Grants Commission (UGC) curriculum and Choice based Credit System (CBCS) and are proposed to be offered in credit transfer mode on the Study Webs of Active Learning for Young Aspiring Minds (SWAYAM) platform managed by Consortium for Educational Communication (CEC), the national coordinator designated by Ministry of Education (MoE). 
                </p>
                <p class="p0 fontSize-14">
                  On September 26, 2022, Goa's Directorate of Higher Education launched the 
                  <strong>“MANDAVI”</strong>
                  (Mentoring and Nurturing Digital and Virtual Initiatives) flagship program. On this occasion, the Directorate of Higher Education (DHE) and Consortium for Educational Communication (CEC) signed a Memorandum of Understanding (MoU). 
                </p>
                <p class="p0 fontSize-14">
                  For any details please feel free to contact Dr. Kavita Asnani, Nodal Officer (MOOC Project) Govt. of Goa, State Higher Education Council (SHEC),Directorate of Higher Education, Porvorim, Goa.
                </p>
              </div>
              <div class="col-md-12">
                <div class="gallery_img_box gib_bg">
                  <?php
                    $counter1 = 1; 
                    foreach ($teaching_learning_images['data'] as $key => $value) {
                      if ($value['type'] == 'mooc') {
                        ?>
                        <figure class="gallery__item gallery__item_6--<?php echo $counter1++; ?>">
                          <a href="">
                            <img src="<?php echo $value['url'] ?>" alt="Gallery image 1" class="gallery__img g_img_cover" style="background-color:#000;">
                            <div class="gallery__item-overlay-background"></div>
                          </a>
                        </figure>
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
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <script src="assets/js/frontend.js"></script>

  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>