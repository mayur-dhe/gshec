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
?>





  <!-- -------------------------------------------------------- -->
  <!-- ------------- Main Content Start---------------------- -->
  <!-- -------------------------------------------------------- -->
  
  <section class="page-section sdc pt-0">
    <div class="container">
      <div class="row">
        <p>  
          Software Development Cell, SHEC, is an established cell, group of faculty members , who intend to put theory into practice and make use of their knowledge for implementation of technology in the field of education and Management of Activities/initiatives by SHEC.This cell has been undertaking software projects since its creation in 2022. 
        </p>
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
        <div class="col-lg-6">
          <img src="assets/images/free_icon_1.png" class="img-fluid" alt="" title="<a href='https://www.freepik.com/free-vector/happy-freelancer-with-computer-home-young-man-sitting-armchair-using-laptop-chatting-online-smiling-vector-illustration-distance-work-online-learning-freelance_10172825.htm#query=flat%20illustration&position=4&from_view=keyword'>Image by pch.vector</a> on Freepik ">
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0 d-flex px-5">
          <div class="row align-self-center gy-1">
            <?php 
              foreach ($sdc as $key => $value) {
            ?>
              <div class="col-md-12" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3><?php echo $value['title'] ?></h3>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
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
  </section>
  <!-- End Counts Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container" data-aos="fade-up">
      <div class="section-header header-details">
        <!-- <h2>Our Team</h2> -->
        <p>Meet Our Team</p>
      </div>

      <div class="row gy-4">
        <?php 
          include 'data/teams.php';
          foreach ($members as $key => $value) {
        ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo $value['image']; ?>" class="img-fluid" alt="">
                <!-- <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
              <div class="member-info">
                <h4><?php echo $value['name']; ?></h4>
                <span><?php echo $value['designation']; ?></span>
                <p><?php echo $value['role']; ?></p>
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
      <div class="section-header">
        <p>Our Projects</p>
      </div>
      <div class="row gy-4">
        <?php 
          include 'data/projects.php';
          foreach ($projects as $key => $value) {
        ?>
        <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box orange">
            <i class="ri-discuss-line icon"></i>
            <h3><?php echo $value['short-name']; ?></h3>
            <p class=""><?php echo concat_string($value['description'], 50);?></p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section><!-- End projects Section -->






  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>

  </body>
</html>