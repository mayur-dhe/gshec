<?php
  $id = $_GET['jnhsdwmxifkd'];
  $title = "Initiatives";
  
  include 'data/initiatives.php';
  foreach ($initiatives as $key => $value) {
    if ($value == $id) {
      $title_2 = $value['short_name'];
    }
  }
  require 'layout/top-header.php';
?>
<body>
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "";
  require 'layout/site-map.php'; 
?>
<style>
 * {
    font-family: 'Roboto' !important;
  }
  h2,
  p {
    color: var(--greyReadableTextColor);
  }
  .image.fit {
    margin: 0 !important;
  }
  .image.fit img {
    height: 500px !important;
  }

</style>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="meeting-single-item">
            <div class="thumb">
              <div class="image fit">
                <div id="demo" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <?php if ( $id == 1) {   ?>
                      <?php foreach ($dhe['data'] as $key => $image){ ?>
                            <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
                      <?php } ?>

                    <?php } else if ( $id == 2) { ?>
                      <?php foreach ($mou_images['data'] as $key => $image){  ?>
                              <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
                      <?php } ?>

                    <?php  } else if ( $id == 3) {   ?>                      
                      <?php foreach ($aip['data'] as $key => $image){ ?>
                            <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
                      <?php } ?>

                    <?php  } else if ( $id == 4) {   ?>
                      <?php foreach ($tip['data'] as $key => $image){ ?>
                          <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
                      <?php } ?>
                    <?php } ?>
                  </ul>

                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <?php if ( $id == 1) {  ?>
                      <?php foreach ($dhe['data'] as $key => $image) { ?>
                        <div class="carousel-item <?php echo $key==0 ?  'active' : '' ?>">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="1100" height="500">
                        </div> 
                      <?php } ?>

                    <?php  } else if ( $id == 2) { ?>
                      <?php foreach ($mou_images['data'] as $key => $image) { ?>
                        <div class="carousel-item <?php echo $key==0 ?  'active' : '' ?>">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="1100" height="500">
                        </div> 
                      <?php } ?>

                    <?php  } else if ( $id == 3) {  ?>
                      <?php foreach ($aip['data'] as $key => $image) { ?>
                        <div class="carousel-item <?php echo $key==0 ?  'active' : '' ?>">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="1100" height="500">
                        </div> 
                      <?php } ?>
                    
                    <?php  } else if ( $id == 4) {  ?>
                      <?php foreach ($tip['data'] as $key => $image) { ?>
                        <div class="carousel-item <?php echo $key==0 ?  'active' : '' ?>">
                          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="1100" height="500">
                        </div> 
                      <?php } ?>

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
              </div>
            </div>
            <div class="down-content text-align-justify textColor-black">
              <?php if ( $id == 1) {  ?>
                <h2>
                  IBM Certification Course
                </h2>
                <br>
                <p>
                  The TIP cell with IBM and its implementation partner REACHA (Research and Extension Association for Conservation Horticulture and Agro-forestry) has collaborated for a SkillsBuild program, which aims to serve and foster the capability and development of learners. It's a self-paced course and open to all students as well as faculty. IBM SkillsBuild has a broad variety of courses categorized into Role- based skills, Essential skills, professional skills, web developer skills, job readiness skills and other certification preparation courses. Total of 2000+ learners have registered for this program. 
                </p>
                <div class="row">
                  <?php
                    foreach ($ibmCourses as $key => $value) {
                      echo '
                      <div class="col-6 col-md-6 col-lg-3 list-number ibm-courses">
                        <h5 class="ibm-course-title">'.$value['title'].'</h5>
                        <hr class="title">
                        <ol class="pl-10">';
                          foreach ($value['skills'] as $key => $skills) {
                            echo '<li>'.$skills.'</li>';
                          }
                      echo '
                        </ol>
                        <h5 class="ibm-course-title">'.$value['subtitle'].'</h5>
                        <hr class="subtitle">
                        <ol class="pl-10">';
                            foreach ($value['essentials'] as $key => $essentials) {
                              echo '<li>'.$essentials.'</li>';
                            }
                      echo '
                        </ol>
                      </div>';
                    }
                  ?>
                </div>  
              <?php } else if ( $id == 2) { ?>
                <h2>
                  MoU signing with 4 skilling startups
                </h2>
                <p>
                  The Directorate of Higher Education and Goa State Higher Education Council has taken the initiative to coordinate with the skilling organizations to create customized programs for Goa with free bootcamps ranging from 4 weeks to 15 months for all participating students. This collaboration will provide the required skills to the students of HEIs of General Institutions and Engineering colleges. It will also empower and prepare the students for the future, which is one of the recommendations of the new NEP 2020. In this regard, The TIP cell of GSHEC and DHE signed an MoU on 6th October 2022 with the below-mentioned skilling organizations that are Newton School, Beunlu Pvt Ltd, Navgurukul Foundation for social welfare and ENTRI. This collaboration will strengthen the Industry-Institute Interaction as well as help to bridge the gap between curriculum and industrial demands as well as increase the employability of students across the State of Goa. Each skilling organization on board has a specific objective to empower and enhance students’ skills. 
                </p>
                <p class="height_130">
                  <img class="img-float-right" src="assets/images/initiatives/mou/Newton school.JPG" alt="Newton School">
                  <span class="fontWt-6">
                    Objective of Newton School: 
                  </span>
                  This MoU is the capacity development of the students from all Higher Education Institutions (HEIs) with a special focus on upskilpng the youth of Goa with industry-focused, skill-oriented education in software development and providing 100 per cent placements to these trained students. The role of Newton School is to introduce a specially designed Full Stack Web Development program to selected students from various Technical and Non- Technical backgrounds from Goa every year.
                </p>
                <p class="height_130">
                  <img class="img-float-right" src="assets/images/initiatives/mou/Be Unlu.JPG" alt="Benunlu Pvt Ltd">
                  <span class="fontWt-6">
                    Benunlu Pvt Ltd
                  </span>
                  goal is to provide extensive training to students aspiring to become writers and musicians across the state of Goa by giving them the opportunity to learn from the best-in-industry mentors and teachers across the Media & Entertainment industry and eventually to create content Intellectual Property (IP) which can make them earn from their art across different mediums.
                </p>
                <p class="height_130">
                  <img class="img-float-right" src="assets/images/initiatives/mou/Entri.JPG" alt="ENTRI">
                  <span class="fontWt-6">
                    ENTRI 
                  </span>
                  is India’s fastest-growing app for job skills with 10M users. The objective of this MoU is to provide a free scholarship for 250 students from all HEIs across Goa which will provide the selected student's different types of content, mock exam and podcast to upskill them for private and government jobs using the local language learning App in Konkani.
                </p>
                <p class="height_130">
                  <img class="img-float-right" src="assets/images/initiatives/mou/NavGurukul.JPG" alt="NavGurukul Foundation for social welfare">
                  <span class="fontWt-6">
                    NavGurukul Foundation for social welfare 
                  </span>
                  role is to work with girl child from the marginal communities and place them in the tech industry. The objective of this MoU is to set up a new learning campus in the State of Goa which will have a training capacity for up to 300 students in each cycle (for a period of 5 cycles) in Software Programming, Advanced Graphic Design, and/ or Management courses of 15 months duration and providing placement assistance to the cohort on completion of their course.
                </p>
              <?php  } else if ( $id == 3) {  ?>
                <h2>
                  TCS initiative 
                </h2>
                <p>
                  The Academic Interface Program (AIP) by Tata Consultancy Services is one of their activities under CSR has been institutionalized with defined processes, performance metrics and deployment structure. This has facilitated a robust, high-quality, long- term relationship between TCS and Academia which improves the skills and employability of students.
                </p>
              
              <?php  } else if ( $id == 4) {  ?>
                <h2>
                  Unified TIP portal as per NEP for technical and non-technical colleges
                </h2>
                <br>
                <p>
                  As the NEP 2020 focuses on skill improvement and competency development of the students. Under NEP 2020, an industry- internship portal is getting developed by the software development team at GSHEC, DHE which will allow students to choose their internship through a single portal. The internship will be a part of the academic curriculum under NEP 2020. The objective of Unified TIP portal is to bridge the gap between the corporate requirements and student’s knowledge and skill sets.
                </p>
                <br>
                <p class="m_0">
                  Some of the features are as follows :
                </p>
                <div class="list-number pl-20">
                  <ol class="fontSize-14">
                    <li>
                      It will provide Internship/Job opportunities to the students.
                    </li>
                    <li>
                      Track Student related initiatives of the Colleges
                    </li>
                    <li>
                      Generate Portfolio of the student
                    </li>
                    <li>
                      Track Skill  of the Students
                    </li>
                    <li>
                      Bridge Gap between skill set and Company Requirement
                    </li>
                  </ol>
                </div>
              <?php } ?>
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>

  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>

  </body>
</html>