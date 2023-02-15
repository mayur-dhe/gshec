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
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  <div class="image fit">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ul class="carousel-indicators">
                        <?php if ( $id == 1) { ?>
                          <?php foreach ($mou_images['data'] as $key => $image){  ?>
                                  <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
                          <?php } ?>

                        <?php  } else if ( $id == 2) {   ?>
                          <?php foreach ($obe['data'] as $key => $image){ ?>
                                <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
                          <?php } ?>

                        <?php  } else if ( $id == 3) {   ?>
                          <?php foreach ($job_drive['data'] as $key => $image){ ?>
                                <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
                          <?php } ?>

                        <?php  } else if ( $id == 4) {   ?>
                          
                          <?php foreach ($aip['data'] as $key => $image){ ?>
                                <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
                          <?php } ?>

                        <?php  } else if ( $id == 5) {   ?>
                          
                          <?php foreach ($dhe['data'] as $key => $image){ ?>
                                <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
                          <?php } ?>

                        <?php  } else if ( $id == 6) {   ?>

                          <?php foreach ($tip['data'] as $key => $image){ ?>
                              <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
                          <?php } ?>
                        <?php } ?>
                      </ul>

                      <!-- The slideshow -->
                      <div class="carousel-inner">
                        <?php if ( $id == 1) { ?>
                          <?php foreach ($mou_images['data'] as $key => $image) { ?>
                            <div class="carousel-item <?php echo $key==0 ?  'active' : '' ?>">
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="1100" height="500">
                            </div> 
                          <?php } ?>

                        <?php  } else if ( $id == 2) {  ?>

                          <?php foreach ($obe['data'] as $key => $image) { ?>
                            <div class="carousel-item <?php echo $key==0 ?  'active' : '' ?>">
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="1100" height="500">
                            </div> 
                          <?php } ?>

                        <?php  } else if ( $id == 3) {  ?>

                          <?php foreach ($job_drive['data'] as $key => $image) { ?>
                            <div class="carousel-item <?php echo $key==0 ?  'active' : '' ?>">
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="1100" height="500">
                            </div> 
                          <?php } ?>
                        <?php  } else if ( $id == 4) {  ?>

                          <?php foreach ($aip['data'] as $key => $image) { ?>
                            <div class="carousel-item <?php echo $key==0 ?  'active' : '' ?>">
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="1100" height="500">
                            </div> 
                          <?php } ?>

                        <?php  } else if ( $id == 5) {  ?>

                          <?php foreach ($dhe['data'] as $key => $image) { ?>
                            <div class="carousel-item <?php echo $key==0 ?  'active' : '' ?>">
                              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="1100" height="500">
                            </div> 
                          <?php } ?>
                        
                        <?php  } else if ( $id == 6) {  ?>

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
                <div class="down-content para">
                  <?php if ( $id == 1) { ?>
                    <p class="para-title" style="text-align: center;"><strong><span style="font-size: 14pt; color: rgb(0, 0, 0);">Memorandum of Understanding (MoU)&nbsp;&nbsp;&nbsp;</span></strong></p>
                    <p class="para-title" style="text-align: center;"><strong><span style="font-size: 14pt; color: rgb(0, 0, 0);">between</span></strong></p>
                    <p class="para-title" style="text-align: center;"><strong><span style="font-size: 14pt; color: rgb(0, 0, 0);">Goa State Higher Education Council (GSHEC) &nbsp; &nbsp; &amp;&nbsp;</span></strong></p>
                    <p class="para-title" style="text-align: center;"><strong><span style="font-size: 14pt; color: rgb(0, 0, 0);">Directorate of Higher Education, Goa</span></strong></p>
                    <p class="para-title" style="text-align: center;"><strong><span style="font-size: 14pt; color: rgb(0, 0, 0); text-decoration: underline; text-decoration-skip-ink: none;">AND&nbsp;</span></strong></p>
                    <p class="para-title" style="margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><span style="font-size: 14pt; color: rgb(0, 0, 0);">1. Navgurukul Foundation For Social Welfare, Haryana</span></strong></p>
                    <p class="para-title" style="text-align: center; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 14pt; color: rgb(0, 0, 0);">2. NEWTON SCHOOL,&nbsp;Bengaluru</span></strong></p>
                    <p class="para-title" style="text-align: center; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 14pt; color: rgb(0, 0, 0);">3. Beunlu Pvt Ltd, Haryana</span></strong></p>
                    <p class="para-title" style="text-align: center; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 14pt; color: rgb(0, 0, 0);">4. ENTRI , Kerala&nbsp;</span></strong></p>
                    
                    <p style="text-align: center; border-bottom: 0.5pt solid rgb(0, 0, 0); margin-top: 0pt; margin-bottom: 0pt;">&nbsp;</p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 8pt;"><span style="font-size: 14pt; color: rgb(34, 34, 34); background-color: rgb(255, 255, 255);">The Directorate of Higher Education and Goa State Higher Education Council has taken the initiative to coordinate with the skilling Startups to create customized programs for Goa with free boot camps ranging from 4 weeks to 15 months for all participating students. This collaboration would</span><span style="font-size: 14pt; color: rgb(0, 0, 0);"> provide the required skills to the students of Higher Education Institutions of General Institutions and Engineering colleges. It would also be empowered and prepare the students for the future, which is one of the recommendations of the new </span><strong><span style="font-size: 14pt; color: rgb(0, 0, 0);">National Education Policy (NEP 2020).</span></strong></p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; color: rgb(0, 0, 0);">Rolling out these Educational project initiatives in our State by skilling and training the students would result in the overall development of our Goan students and would be the first of its kind step towards achieving our goal for quality education.</span></p>
                    <p><span style="font-size: 14pt; color: rgb(0, 0, 0);">The State Higher Education Council, Directorate of Higher Education signs a </span><strong><span style="font-size: 14pt; color: rgb(0, 0, 0);">Memorandum of Understanding</span></strong><span style="font-size: 14pt; color: rgb(0, 0, 0);"> </span><strong><span style="font-size: 14pt; color: rgb(0, 0, 0);">(MoU)</span></strong><span style="font-size: 14pt; color: rgb(0, 0, 0);"> with </span><strong><span style="font-size: 14pt; color: rgb(0, 0, 0);">1) NAVGURUKUL FOUNDATION FOR SOCIAL WELFARE 2)NEWTON SCHOOL 3) Be Unlu 4) Entri </span></strong><span style="font-size: 14pt; color: rgb(0, 0, 0);">on 6th October 2022 at Seminar hall, Secretariate Porvorim.</span></p>
                  
                  <?php  } else if ( $id == 2) {  ?>

                    <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><span style="font-size: 18pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">STATE HIGHER EDUCATION COUNCIL</span></strong></p>
                    <p style="line-height: 1.2; text-align: center; margin-top: 0pt; margin-bottom: 0pt; padding-left: 96px;"><strong><span style="font-size: 18pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;&nbsp;Directorate of Higher Education</span></strong><strong><span style="font-size: 16pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></strong></p>
                    <p style="line-height: 1.2; text-align: center; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Government of Goa</span></strong></p>
                    <p>&nbsp;</p>
                    <p style="line-height: 1.2; text-align: center; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 15pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Faculty Development Programme (FDP) on &lsquo;Outcome based Education&rsquo;&nbsp;</span></strong></p>
                    <p style="line-height: 1.2; text-align: center; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">[CO , PO , PSO and CO assignment and attainment measurements]</span></strong></p>
                    <p>&nbsp;</p>
                    <p style="line-height: 1.8; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);">&nbsp;Outcome Based Education (OBE) is a flexible, empowerment-oriented approach to learning. It aims to equip learners with the knowledge, competence, and orientation needed for success after graduating from the institution. Hence, OBE is a powerful education strategy based on Bloom&rsquo;s Taxonomy designed to achieve higher-order thinking.</span></p>
                    <p style="line-height: 1.8; background-color: rgb(255, 255, 255); margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);">To impart high quality in the Higher Education Institutes in Goa, the State Higher Council in the Directorate of Higher Education is planning a comprehensive and statewide faculty orientation programme focussed on outcome-based education. Through this programme, 1,145 faculty from 22 colleges were trained in </span><strong><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);">&ldquo;Outcome Based Education&rdquo;. </span></strong><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);">In order to</span><strong><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);"> </span></strong><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);">assess and evaluate the effectiveness and progress of the teaching-learning process, a centralized digital repository would be generated. Through this unique initiative we aim to achieve the following </span><em><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);">five objectives</span></em><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);"> :</span></p>
                    <p style="line-height: 1.8; text-align: justify; background-color: rgb(255, 255, 255); margin-top: 0pt; margin-bottom: 0pt;"><em><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);">(a) Programme, Course and individual student attainment.</span></em></p>
                    <p style="line-height: 1.8; text-align: justify; background-color: rgb(255, 255, 255); margin-top: 0pt; margin-bottom: 0pt;"><em><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);">(b) Improvement in NAAC accreditation.</span></em></p>
                    <p style="line-height: 1.8; text-align: justify; background-color: rgb(255, 255, 255); margin-top: 0pt; margin-bottom: 0pt;"><em><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);">(c) Higher ranking in NIRF.</span></em></p>
                    <p style="line-height: 1.8; text-align: justify; background-color: rgb(255, 255, 255); margin-top: 0pt; margin-bottom: 0pt;"><em><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);">(d) Providing high-quality education in line with the NEP recommendation</span></em></p>
                    <p style="line-height: 1.8; text-align: justify; background-color: rgb(255, 255, 255); margin-top: 0pt; margin-bottom: 0pt;"><em><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);">(e) Creating an ecosystem of motivated faculty and students.</span></em></p>
                    <p style="line-height: 1.8; text-align: justify; background-color: rgb(255, 255, 255); margin-top: 0pt; margin-bottom: 0pt;"><em><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);">&nbsp;</span></em></p>
                    <p style="line-height: 1.8; text-align: justify; background-color: rgb(255, 255, 255); margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; font-family: Arial; color: rgb(34, 34, 34);">This was the first time through such an initiative all faculty from HEIs are being trained in high-quality Teaching-Learning practices.</span></p>
                  
                  <?php  } else if ( $id == 3) {  ?>

                    <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0); text-decoration: underline; text-decoration-skip-ink: none;">Common placement drive &ldquo;Inspire to Aspire&rdquo; for BSc (Co</span><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0); text-decoration-skip-ink: none;">mputers )&nbsp; Science graduates from HEIs under the purview of DHE, Goa.</span></strong></p>
                    <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: center;">&nbsp;</p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">The</span><strong><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> Directorate of Higher Education (DHE)</span></strong><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> in association with </span><strong><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Government colleges of Arts, Science and Commerce (Quepem, Sanquelim and Khandola)</span></strong><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> centrally is organizing a Job placement drive titled </span><strong><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&ldquo;Inspire to Aspire&rdquo;.</span></strong><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> The placement drive is one of the objective for the implementation of </span><strong><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">National Education Policy (NEP) 2020.</span></strong><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> The placement drive is also an initiative to not only </span><strong><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">strengthen the Industry &ndash; Institute Interactions</span></strong><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> but also to </span><strong><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">provide career opportunities and enable employment</span></strong><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> among students who have taken Computer Science courses from various colleges in Goa.</span></p>
                    <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: center;">&nbsp;</p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">The placement drive was held at the Government College of Arts, Science and Commerce, Quepem Goa on 22</span><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"><sup>nd</sup></span><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> July 2022. The drive was for the BSc final year students of Computer Science graduating in August 2022. The IT based companies from Goa have agreed to participate in the drive. A total of 59 students from the BSc. in Computer Science course registered on the day of the drive. The students were given transportation facilities from their respective colleges to the venue of the placement drive at Government College Quepem.</span></p>
                    <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: center;">&nbsp;</p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">The IT companies participating in the drive will interview students for positions as software developer trainee, testers, UI/UX developers, analysts, and other jobs. There is a wide opportunity to students of TYBSC Computer Science to get the desired type of job with good salary packages in Goa. Some of the IT companies have agreed to interview students from Physics and Mathematics disciplines provided they have taken computer science course during their first and second year of the UG program.</span></p>
                    <p style="line-height: 1.8; margin-right: 14.4pt; text-align: justify; margin-top: 14pt; margin-bottom: 0pt;"><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Following is the time-line for the placement drive:</span></p>
                    <p style="line-height: 1.8; margin-right: 14.4pt; text-align: justify; margin-top: 14pt; margin-bottom: 0pt;"><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">A one day soft skill training session will be conducted by resource persons for the participating students of all colleges. The training sessions will prepare the students to be successful for the recruitment drive.</span></p>
                    <p style="line-height: 1.8; margin-right: 14.4pt; text-align: justify; margin-top: 14pt; margin-bottom: 0pt;"><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Aptitude training sessions are scheduled on </span><strong><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">18</span></strong><strong><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"><sup>th</sup></span></strong><strong><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> July 2022 from 9:00 to 1:30p.m</span></strong><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> at the New SCERT building, Porvorim Goa. The resource person invited to deliver the sessions is </span><strong><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Ms. Sarita D&rsquo;Souza </span></strong><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">among others. The students will be guided how to answer interviews, participate in Group discussions and build resumes. The students also will be&nbsp;</span></p>
                    <p style="line-height: 1.8; margin-right: 14.4pt; text-align: justify; margin-top: 14pt; margin-bottom: 0pt;"><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Registration : Eligible students from each college who wish to participate in the drive will&nbsp; fill out an online Google form before the placement drive.</span></p>
                    <p style="line-height: 1.8; margin-right: 14.4pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Each company will also share their Job description (JD) with the college placement coordinators and the students before the drive.&nbsp;</span></p>
                    <p style="line-height: 1.8; margin-right: 14.4pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">On the day of the placement drive, the companies will present their company profile to the students.</span></p>
                    <p style="line-height: 1.8; margin-right: 14.4pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Aptitude tests (online or offline) will be conducted, followed by technical and personal&nbsp; interviews.&nbsp;</span></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">In this regard, it is required to train the students participating in the Job Placement drive. Two aptitude training sessions are scheduled on </span><strong><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">18</span></strong><strong><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"><sup>th</sup></span></strong><strong><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> July 2022 from 9:00 to 1:30p.m</span></strong><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> at the New SCERT building, Porvorim Goa. The resource person invited to deliver the sessions is </span><strong><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Ms. Sarita D&rsquo;Souza</span></strong><span style="font-size: 13.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">. The biodata is placed in the file at page 3/C.</span></p>
                    <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: center;">&nbsp;</p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Principal,</span><span style="font-size: 14.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Government College of Arts, Science and Commerce, Quepem</span></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Principal, </span><span style="font-size: 14.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Government College of Arts, Science and Commerce, Khandola.</span></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Principal,</span><span style="font-size: 14.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Government College of Arts, Science and Commerce, Sanquelim.</span></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Dnyanprassarak Mandal&rsquo;s College and Research Centre, Assagao, Bardez-Goa.</span></strong></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Parvatibai Chowgule College of Arts and Science, Margao Goa.</span></strong></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">St. Xavier&rsquo;s College of Arts, Science &amp; Commerce, Mapusa -Goa.</span></strong></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Dempo Charities Trust's Dhempe College of Arts &amp; Science, Miramar, Panaji - G</span></strong><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">oa.</span></p>
                    <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><br><br><br></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 14.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Names of companies:</span></strong></p>
                    <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: center;">&nbsp;</p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Umang software</span></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Genora Infotech Pvt Ltd</span></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Creative Capsule</span></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Zimetrics Technology Pvt Ltd</span></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Tangentia</span></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Open Destinations Infotech Pvt Ltd</span></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Helix Tech Pvt Ltd</span></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Anant Info Media Pvt Ltd</span></p>
                    <p style="line-height: 1.2; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14.5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Xerviz Wlobal</span></p>
                    <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><br><br><br></p>
                  
                  <?php  } else if ( $id == 4) {  ?>
                  
                    <p style="line-height: 1.8; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></strong></p>
                    <p style="line-height: 1.8; text-align: center; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0); text-decoration: underline; text-decoration-skip-ink: none;">Academic Interface Program (AIP) by TCS and Goa Academia Engagement</span></strong></p>
                    <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: center;">&nbsp;</p>
                    <p style="line-height: 1.8; text-indent: 43.1pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">As part of implementation of </span><strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">National Education Policy (NEP 2020), </span></strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">the </span><strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Training, Internship &amp; Placement (TIP) Cell</span></strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> of </span><strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Directorate of Higher Education (DHE)</span></strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> will strengthen the Industry-Institute Interaction, bridge the gap between curriculum and industry, and facilitate the employability of </span><strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Commerce graduates across the State of Goa.</span></strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
                    <p style="line-height: 1.8; text-indent: 43.1pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Keeping this in mind, TIP Cell is organizing a two day meeting with all stakeholders including Principals, Commerce faculty, and students. This meeting will also be attended by Tata Consultancy Services (TCS) officials under the Academic Interface Program (AIP) as part of their Corporate Social Responsibility. TCS members including Mr. Chandra Koduru, the General Manager &amp; Head of Academia Interface Program and Mr. Ravikumar Murthy, Academic Relationship Manager will also participate in the meetings.</span></p>
                    <p style="line-height: 1.8; text-indent: 43.1pt; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">TCS is currently conducting various skill based courses across various States. These courses are identified and designed keeping in mind the current and future needs of banking and Finance sectors. In view of this, TIP is organising a two day meeting tentatively on 20</span><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"><sup>th</sup></span><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> September 2022 at the Directorate of Art &amp; Culture Hall. Subsequently, on the 21</span><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"><sup>st</sup></span><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> September 2022, an interaction of TCS officials with students &amp; faculty in S.S. Dempo College of Commerce &amp; Economics, Cujira. The meeting will discuss and deliberate upon details regarding offering similar courses in the State of Goa:</span></p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">3-year full time Degree program on Business Process Services which includes a few TCS domains along with the regular B.Com syllabus in more than 30 colleges across India.&nbsp;</span></p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">3-year full time Degree Program on Cognitive Systems has been developed integrating IT Infrastructure contents including modern topics Virtualisation &amp; Cloud Computing, Dev Ops, CRM, Process Management and IT Cognition, to name a few.</span></p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">In specific regions, one or more subjects from the Degree programs are offered in addition to their 3-year degree program during 5</span><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"><sup>th</sup></span><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> Semester.</span></p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">A portion from one of the subjects like Banking, Insurance, Capital Markets, Finance &amp; Accounts chosen by TCS AIP delivered as a session for 2 to 4 hrs. in a day or multiple days by TCS Subject Matter Experts</span></p>
                    <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: center;">&nbsp;</p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Prof Niyan Marchon , TIP Nodal Officer&nbsp;</span></strong></p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Professor , Teaching , Learning and Education Technology</span></strong></p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Goa State Higher Education Council (GSHEC)</span></strong></p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><strong><span style="font-size: 14pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Directorate of Higher Education&nbsp;</span></strong></p>
                    <p style="line-height: 1.2; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><br><br><br><br><br></p>
                  
                  <?php  } else if ( $id == 5) {  ?>
                  
                    <p style="line-height: 1.8; margin-top: 0pt; margin-bottom: 0pt; text-align: center;"><strong><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">DHE collaboration with IBM</span></strong></p>
                    <p style="line-height: 1.8; margin-top: 0pt; margin-bottom: 0pt; text-align: center;">&nbsp;</p>
                    <p style="line-height: 1.8; text-align: justify; margin-top: 0pt; margin-bottom: 0pt;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">DHE has started collaborating with </span><strong><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">SkillsBuild program by IBM</span></strong><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">, which aims at providing job seekers role-based skills, Job essential &amp; professional Skills, Web Developers, and essential skills for small business owners. It promises to build entrepreneurs and hands-on projects to facilitate the employment of skills build learners. This project is commencing by September end.</span></p>
                    <p style="line-height: 1.8; margin-top: 0pt; margin-bottom: 0pt;"><br><br><br></p>
                  
                  <?php  } else if ( $id == 6) {  ?>
                    <h2>
                      Unified TIP portal as per NEP for technical and non-technical colleges
                    </h2>
                    <p>
                      As the NEP 2020 focuses on skill improvement and competency development of the students. Under NEP 2020, an industry- internship portal is getting developed by the software development team at GSHEC, DHE which will allow students to choose their internship through a single portal. The internship will be a part of the academic curriculum under NEP 2020. The objective of Unified TIP portal is to bridge the gap between the corporate requirements and student’s knowledge and skill sets.
                    </p>
                    <p>
                      Some of the features are as follows :
                    </p>
                    <div class="list-inside">
                      <ul>
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

                      </ul>
                    </div>

                  <?php } ?>

                </div>
              </div>
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