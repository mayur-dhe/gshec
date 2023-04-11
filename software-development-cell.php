<?php
  $title = "Software Development Cell";
  $title_url = "#";
  require 'layout/top-header.php';
?>
<body>
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Software Development Cell";
  $isCardsPage = true;
  $getUrlID = 4;
  require 'layout/site-map.php'; 
  include 'data/sdc.php';
  include 'data/projects.php';
  include 'data/teams.php';
?>
<style>
  * {
    font-family: MessinaSans,sans-serif;
    line-height: 1.6rem;
  }
  .page-section {
    padding: 40px 100px 40px 110px;
  }
  section.footer-box {
    background-color: #1F262C;
    padding: 0 100px 0 120px;
  }
</style>
  <div class="layout_border-left"></div>
  <div class="layout_border-title textColor-black"><?php echo $title; ?></div>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section sdc">
    <div class="container mb30">
      <div class="row">
        <div class="col-md-10">
          <h3 class="textColor-black intro-title mb40">
            Software Development Cell, GSHEC, is an established cell, group of faculty members, who intend to put theory into practice and make use of their knowledge for implementation of technology in the field of education and the management of activities and initiatives by GSHEC.This team has been undertaking software projects since its creation in 2020. 
          </h3>
        </div>
        <div class="col-md-12 col-lg-6">
          <p class="p0 textAlign-left">
            Our software development team is a group of skilled professionals who are responsible for the design, development, and maintenance of various software applications. The team is composed of individuals with different roles, such as software engineers, developers, and programmers, who work together to deliver high-quality software products. The team uses a variety of programming languages and technologies like PHP, Node.JS, React.JS, MongoDB, MySQL, HTML5, CSS3, Code Igniter, Python, PWA, Flask, etc. to create software solutions that are tailored to the specific needs of our organization. The team is also responsible for testing and debugging the software to ensure that it is functioning correctly and is free of any bugs or errors. Overall, the software development team plays a crucial role in the success of the organization by providing reliable and efficient software solutions that help it achieve its goals. 
          </p>
        </div>
        <div class="col-md-12 col-lg-6">
          <video class="mb40" width="100%" height="285" controls autoplay muted loop>
            <source src="assets/video/sdc/SDC page video.mp4" type="video/mp4">
            <!-- <source src="movie.ogg" type="video/ogg"> -->
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </section>
  <!-- ======= features Section ======= -->
  <section class="layout_border-top">
    <div class="container mb30">  
      <div class="row">
        <div class="col-md-12">
          <p class="intro-title auto_height layout_border-top-title px30">Aims And Objectives</p>
        </div>
        <div class="col-lg-12 d-flex pl30 list-dot textColor-black">
          <ul>
            <?php 
              foreach ($objective as $key => $value) {
            ?>
              <li class="fontSize-18">
                <?php echo $value ?></h3>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Counts Section ======= -->
  <!-- <section id="counts" class="counts pxb30 layout_border-top">
    <div class="container mb30">
      <div class="row gy-4">
        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="fa fa-smile-o" aria-hidden="true"></i>
            <div>
              <span>6</span>
              <p>Project undertaken</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="fa fa-users" aria-hidden="true"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                class="purecounter">11</span>
              <p>SDC Members</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="fa fa-life-ring" aria-hidden="true"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                class="purecounter">2</span>
              <p>Supporting Staffs</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="fa fa-code" aria-hidden="true"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="151463" data-purecounter-duration="1"
                class="purecounter">Software</span>
              <p>Development Cell</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Counts Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team layout_border-top">
    <div class="container mb30" data-aos="fade-up">
      <div class="row gy-4">
        <div class="col-md-12">
          <p class="intro-title auto_height layout_border-top-title px30 textColor-black">Meet Our Team</p>
        </div>
        <?php 
          foreach ($members as $key => $value) {
        ?>
          <div class="col-12 col-md-4 col-xl-3">
            <div class="profile-thumb">
              <img class="profile-thumb-img" src="<?php echo $value['image']; ?>" alt="">
              <div class="profile-thumb-gradient"></div>
              <div class="profile-thumb-anim">
                <h5 class="profile-thumb-title"><?php echo $value['name']; ?></h5>
                <div class="profile-thumb-author"><?php echo $value['role'] ?? ''; ?></div>
                <p class="profile-thumb-description">
                  <?php echo $value['designation']; ?>
                  <br>
                  <?php if ($value['linkedin']) { ?>
                      <a href="<?php echo $value['linkedin'];?>" target="_blank" style="color: var(--white) !important;" class="fa fa-linkedin"> Click to open Linked-in Profile</a><br>
                  <?php } 
                    if ($value['google_link']) { ?>
                      <a href="<?php echo $value['google_link']; ?>" target="_blank" style="color: var(--white) !important;" class="fa fa-google"> Click to open Profile</a>
                  <?php } ?>
                </p>
              </div>
            </div>
          </div>
        <?php
          }
        ?>
      </div>
    </div>

  </section><!-- End Team Section -->


  <!-- ======= Team Section ======= -->
  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">
      <!-- <div class="section-header">
        <p>Our Projects</p>
      </div> -->
      <!-- <div class="row">
        <?php 
          foreach ($projects as $key => $value) {
        ?>
            <div class="col-6 col-lg-3 col-md-4">
              <a href="software-development-cell-projects?title=<?php echo $value['short-name']?>">
                <div class="project-box">
                  <img class="project-image" src="<?php echo $value['images'][0]['url'] ?>" alt="<?php echo $value['images'][0]['alt'] ?? $value['title'] ?>"> 
                  <div class="project-overlay"><span class="po-text"><?php echo $value['short-name']; ?></span></div>
                </div>
              </a>
            </div>
        <?php } ?>
      </div> -->
      
      <div class="gallery_img_box">
        <?php 
          foreach ($projects as $key => $value) {
        ?>
            <figure class="gallery__item gallery__item--<?php echo ++$key?>">
              <a href="software-development-cell-projects?title=<?php echo $value['short-name']?>">
                <img src="<?php echo $value['images'][0]['url'] ?>" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_opc" style="background-color:<?php echo $value['images'][0]['bgColor']?>">
                <!-- <div class="gallery__item-overlay-background"></div>  --> 
                <div class="gallery__item-overlay"><?php echo $value['short-name']; ?></div>
              </a>
            </figure>
        <?php } ?>
      </div>

    </div>
  </section><!-- End projects Section -->

<!-- ------------- Main Content End---------------------- -->
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>