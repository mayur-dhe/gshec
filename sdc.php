<?php
  $title = "SDC";
  require 'layout/top-header.php';
?>
<body>
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "Software Development Cell";
  require 'layout/site-map.php'; 
  include 'data/sdc.php';
  include 'data/projects.php';
  include 'data/teams.php';
?>
<style>
  
</style>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section sdc">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="text-black align-justify">
            Software Development Cell, GSHEC, is an established cell, group of faculty members, who intend to put theory into practice and make use of their knowledge for implementation of technology in the field of education and the management of activities and initiatives by GSHEC.This team has been undertaking software projects since its creation in 2020. 
          </h4>
        </div>
        <div class="col-md-8">
          <p class="p0">
            Our software development team is a group of skilled professionals who are responsible for the design, development, and maintenance of various software applications. The team is composed of individuals with different roles, such as software engineers, developers, and programmers, who work together to deliver high-quality software products. The team uses a variety of programming languages and technologies like PHP, Node.JS, React.JS, MongoDB, MySQL, HTML5, CSS3, Code Igniter, Python, PWA, Flask, etc. to create software solutions that are tailored to the specific needs of our organization. The team is also responsible for testing and debugging the software to ensure that it is functioning correctly and is free of any bugs or errors. Overall, the software development team plays a crucial role in the success of the organization by providing reliable and efficient software solutions that help it achieve its goals. 
          </p>
        </div>
        <div class="col-md-4">
          <img src="assets/images/development_team.jpg" class="img-fluid" alt="" title="">
        </div>
      </div>
    </div>
  </section>
  <!-- ======= features Section ======= -->
  <section class="features">
    <div class="container">  
      <div class="row">
        <div class="col-lg-12 mt-5 mt-lg-0 d-flex px-5">
          <div class="row align-self-center gy-1">

          </div>
        </div>
      </div>

      <div class="row gy-2">
        <div class="section-header">
          <p>Aims And Objectives</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 d-flex">
          <div class="row align-self-center gy-1">
            <?php 
              foreach ($objective as $key => $value) {
            ?>
              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3><?php echo $value ?></h3>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-4">
          <img src="assets/images/free_icon_1.png" class="img-fluid" alt="" title="<a href='https://www.freepik.com/free-vector/happy-freelancer-with-computer-home-young-man-sitting-armchair-using-laptop-chatting-online-smiling-vector-illustration-distance-work-online-learning-freelance_10172825.htm#query=flat%20illustration&position=4&from_view=keyword'>Image by pch.vector</a> on Freepik ">
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Counts Section ======= -->
  <!-- <section id="counts" class="counts">
    <div class="container">
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
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">
      <div class="section-header header-details p_inner_div">
        <!-- <h2>Our Team</h2> -->
        <p>Meet Our Team</p>
      </div>

      <div class="row gy-4">
        <?php 
          foreach ($members as $key => $value) {
        ?>
          <!-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo $value['image']; ?>" class="img-fluid" alt=""> -->
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              <!-- </div>
              <div class="member-info">
                <h4><?php echo $value['name']; ?></h4>
                <span><?php echo $value['designation']; ?></span>
                <p><?php echo $value['role']; ?></p>
              </div>
            </div>
          </div> -->
          <div class="col-12 col-md-4 col-xl-3">
            <div class="profile-thumb">
              <img class="profile-thumb-img" src="<?php echo $value['image']; ?>" alt="">
              <div class="profile-thumb-gradient"></div>
              <div class="profile-thumb-anim">
                <h5 class="profile-thumb-title"><?php echo $value['name']; ?></h5>
                <p class="profile-thumb-description"><?php echo $value['designation']; ?></p>
              </div>
              <div class="profile-thumb-author"><?php echo $value['role'] ?? ''; ?></div>
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
      <div class="section-header">
        <p>Our Projects</p>
      </div>
      <!-- <div class="row">
        <?php 
          foreach ($projects as $key => $value) {
        ?>
            <div class="col-6 col-lg-3 col-md-4">
              <a href="sdc-projects?title=<?php echo $value['short-name']?>">
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
              <a href="sdc-projects?title=<?php echo $value['short-name']?>">
                <img src="<?php echo $value['images'][0]['url'] ?>" alt="Gallery image 1" class="gallery__img">
                <div class="gallery__item-overlay-background"></div>
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