<?php
  $title = "Research, Development and Innovation";
  $title_url = "#";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Research, Development and Innovation";
  $isCardsPage = true;
  $getUrlID = 2;
  require 'layout/site-map.php'; 
  include 'data/rdi.php';
?>
<style>
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
    <video autoplay muted loop id="bg-video" class="bg-screen-height" poster="assets/images/rdi/intro-cover-img.png">
      <source src="assets/video/rdi/Research, Development & Innovation.mp4" type="video/mp4" />
    </video>
  </section>
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-0">
          <!-- tabs -->
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
            <?php 
              }
            ?>
            <button class="tablinks" onclick="showActivity(1)">
              Activity 
              <span class="dd-icon"> <i class="fa fa-caret-right dd-selected-right"></i> <i class="fa fa-caret-down dd-selected-down d-none"></i></span> 
            </button>
            <?php 
              foreach ($activity_year_wise as $key => $value) 
              {
                $yearId = ++$key;
            ?>
                <button class="d-none activities tablinks <?php echo $class0 ?>" onclick="showSubActivity(<?php echo $yearId ?>)">
                  <?php echo $value ?>
                  <span class="dd-icon dd-icon2"> 
                    <i class="fa fa-caret-right dd-selected-right2<?php echo $yearId; ?> "></i> 
                    <i class="fa fa-caret-down dd-selected-down2<?php echo $yearId; ?>  d-none"></i>
                  </span>
                </button>

                <?php 
                  $subTabCount = 0;
                  foreach ($activities as $key1 => $activity) 
                  {
                    if ($activity['year'] == $value) {
                      $subTabCount += 1;
                ?>
                      <button class="d-none sub_activities sub_activity<?php echo $yearId; ?> tablinks <?php echo $class0 ?>" onclick="openTabSection(event, 'tabA<?php echo $yearId.''.$subTabCount ?>')"><?php echo $activity['title'] ?></button>
                <?php 
                    }
                  }
              }
            ?>
          </div>

          <!-- Tab Content -->
          <div id="tab0" class="tabcontent list-number">
            <h4><?php echo $about['title']?></h4>
            <ol>
              <?php foreach ($about['data'] as $key => $value) { ?>
                <li>
                  <?php echo $value ?>
                </li>
              <?php } ?>
            </ol>
          </div>
          <div id="tab1" class="tabcontent">
            <h4><?php echo $vision['title']?></h4>
            <?php foreach ($vision['data'] as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
          </div>
          <div id="tab2" class="tabcontent">
            <h4><?php echo $mission['title']?></h4>
            <?php foreach ($mission['data'] as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
          </div>
          <!-- 2022 -->
          <div id="tabA11" class="tabcontent">
            <h4>Goa Science Lecture Series 2022</h4>
            <div class="row">
              <div class="col-md-12">
                <p class="p0 ">
                  Exchange of knowledge is imperative for both the teachers and learners to uphold life-long learning. With an objective to provide the youth of Goa the opportunities to enhance their versa of knowledge and to interact with leading intellectuals across the State of Goa, the State Higher Education Council (SHEC) (Govt. of Goa) made a maiden attempt to institute the “Goa Science Lecture Series 2022” to bring in prominent faculty & scientists who can inspire the postgraduate, undergraduate, and Higher Secondary Schools students of various disciplines and serve as role models in various spheres of education and careers. 
                </p>
                <p class="p0 ">
                  Thus, the ever first SHEC’s ten days long Science Lecture Series was organised in collaboration with all the Science Colleges in Goa from <strong>07 March to 16 March, 2022</strong> to create an appropriate platform for the students to update their knowledge and keep abreast with the modern developments in various fields of
                  Science and Technology across the world. 
                </p>
                <p class="p0 ">
                  The lectures were delivered by accomplished experts and academicians working at various Science Colleges in Goa, Goa University, the State Higher Education Council, and Scientists from CSIR-National Institute of Oceanography (CSIR-NIO) who have achieved pre-eminence in the fields of Science and Technology, followed by interactive sessions. Students from various disciplines including Arts, Science, Commerce, and Education attended the lecture series, who otherwise have rare opportunities to listen to experts in various domains of Sciences and technology. Based on the feedback received from the resource person, audience and the host institutions, this even had overwhelming response, and we intend to continue the Science Lecture Series on a much bigger scale in the coming years.
                </p>
                <a class="btn p-0 mb20 pdf-ref" href="assets/documents/rdi/Goa Science Lecture Series 1/ScienceLectureSeriesReport.pdf" target="_blank">
                  <i class="icon fa fa-download"></i>
                  Click to see Science Lecture Series Report
                </a>
              </div>
              <div class="col-md-12">
                <div class="gallery_img_box gib_bg">
                  <?php
                    foreach ($rdi_images['data'] as $key => $value) {
                      if ($value['type'] == 'Goa Science Lecture Series 1') {
                        ?>
                        <figure class="gallery__item gallery__item_1--<?php echo ++$key?>">
                            <img src="<?php echo $value['url'] ?>" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                            <!-- <div class="gallery__item-overlay-background"></div>  --> 
                        </figure>
                        <?php
                        }
                      }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div id="tabA12" class="tabcontent">
            <h4>Two Day Research Grant Writing Workshop 2021</h4>
            <div class="row list-number">
              <div class="col-md-12">
                <p class="p0 ">
                  As part of the research capacity building, and to provide skills to Researchers and Faculty in Goa, the Goa State Higher Education Council (SHEC) 
                  and Directorate of Higher Education has organize 
                  <strong>Two Day Research Grant Writing workshop </strong>
                  on 16-17th  March 2021.  Total 36 Faculties working at various Higher Education Institutions from Goa were participated in the workshop. 
                  The renowned experts: Prof Sumit Biswas, Prof Mainak Banerjee, Dr Hari Kadam, Prof Vithal Tilvi and Dr Mahesh Majik working at various research Institutes such as BITs Goa, Goa University, GSHEC served as resource person. One of the main objectives of these initiatives is to develop vibrant research culture by training the Researchers and attracting grant from the Central funding agencies which in turn will help to develop research infrastructure in the State of Goa. 
                  These funds and facilities will allow conducting world-class research in the State of Goa, which further enhance not only the fundamental research but also boost the socio-economic development of the State of Goa. Moreover, this enables submission of large number of quality research proposals to various funding agency.
                </p>
                <p class="p0 mb0 ">
                  <strong>
                    The following Topic was covered during this 2 day workshop: 
                  </strong>
                </p>
                <ol class="fontSize-18">
                  <li>
                    An Overview on process for writing a grant or proposal
                  </li>
                  <li>
                    The real work of writing a successful proposal in Biological Sciences
                  </li>
                  <li>
                    Keys to successful proposal and grant submissions
                  </li>
                  <li>
                    Idea generation and choosing research topic 
                  </li>
                  <li>
                    The real work of writing a successful proposal in Chemical Sciences
                  </li>
                  <li>
                    Hands-on training: Take home exercise based  on day 1
                  </li>
                  <li>
                    Hands-on training (Start-up Research Grant)
                  </li>
                </ol>
              </div>
              <div class="col-md-12">
                <div class="gallery_img_box gib_bg">
                  <?php
                  $counter1 = 1; 
                    foreach ($rdi_images['data'] as $key => $value) {
                      if ($value['type'] == 'Grant Writing Workshop 1') {
                        ?>
                        <figure class="gallery__item gallery__item_2--<?php echo $counter1++; ?>">
                          <img src="<?php echo $value['url'] ?>" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                          <!-- <div class="gallery__item-overlay-background"></div>  --> 
                        </figure>
                        <?php
                        }
                      }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div id="tabA13" class="tabcontent">
            <h4>Research Grant Writing Workshop for Science and Engineering Faculty of Goa</h4>
            <div class="row">
              <div class="col-md-12">
                <p class="p0 ">
                  A One Day “Research Grant Writing Workshop” was organized by the Goa State Higher Education Council 
                  <strong>(Goa-SHEC)</strong>, 
                  Directorate of Higher Education, Alto-Porvorim Goa on 9th September 2022 at New SCERT Building, Porvorim. The workshop was attended by 
                  <strong>40 faculties from Science and engineering colleges </strong>
                  40 faculties from Science and engineering colleges across Goa. 
                  The main objective of this workshop was to train and provide guidance to faculty on improving the grant proposals in order to increase the chances of acceptance from funding sources. 
                  Funds from such successful proposals will allow conducting world-class research in the State of Goa.   
                </p>
                <p class="p0 m10 mb0 ">
                  <strong>
                    The important features of this workshop is: 
                  </strong>
                </p>
                <ol class="fontSize-18">
                  <li>
                    (i) Hands-on sessions on writing attractive and innovative proposals with outcomes that address immediate needs of India (societal & technological); 
                  </li>
                  <li>
                    (ii) Interactions with Project Investigators who have recently succeeded in getting SERB projects; 
                  </li>
                  <li>
                    (iv) Training to identify researchable problems.
                  </li>
                  <li>
                    (iii) Review of the preliminary draft of Proposal by a team of the experts; 
                  </li>
                </ol>
                <p class="p0 ">
                  The 30 research proposals have been prepared by the participants with the help of the respective resource person is the outcome of this workshop. These projects will be submitted to SURE Scheme of SERB (Govt. of India) for seeking research funding.  Prof Vithal Tilvi, Dr Mahesh Majik, Dr Bhakti Salgaokar, Dr Siddhi Jalmi, Dr Prajesh Volvoikar and Dr Anjani Nagvenkar served as resource person for this workshop. 
                </p>
              </div>
              <div class="col-md-12">
                <div class="gallery_img_box gib_bg">
                  <?php
                  $counter2 = 1; 
                    foreach ($rdi_images['data'] as $key => $value) {
                      if ($value['type'] == 'Grant Writing Workshop 2') {
                        ?>
                        <figure class="gallery__item gallery__item_3--<?php echo $counter2++; ?>">
                          <img src="<?php echo $value['url'] ?>" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                          <!-- <div class="gallery__item-overlay-background"></div>  --> 
                        </figure>
                        <?php
                        }
                      }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div id="tabA14" class="tabcontent">
            <h4>One Day Workshop for Librarians on “Guide to identify Fake/ Predatory/ Cloned Journals in Academics”</h4>
            <div class="row">
              <div class="col-md-12">
                <p class="p0 mb0 ">
                  The number of research articles published in reputed journals, is one of the globally-accepted indicators considered for various academic purposes including institutional ranking, appointments and promotions of faculty members, and award of research degrees. Academic publishing has changed tremendously with the spread of open access journals and the shift to online publishing. Publications in dubious/sub-standard journals reflect adversely leading to long-term academic damage and a tarnished image. Thus, it becomes important to learn how to identify fake/cloned and predatory journals and avoid predatory publishing. In order to identify UGC CARE (Group I & II) listed journals, Goa State Higher Education Council (SHEC) and Directorate of Higher Education had organized a hands-on training program cum workshop for Librarians on 
                  <strong>“Guide to identify Fake/Predatory/Cloned Journals in Academics”</strong>
                  , which is scheduled to be held on 
                  <strong> 12th April 2022 </strong>
                  at the Directorate of Higher Education, Porvorim Goa. 
                </p>
                <br>
                <p class="p0 mb0 ">
                  During this workshop, total 51 Librarians/Librarian Grade-I working at Higher Educational Institutes (HEIs) in Goa were provided
                </p>
                <ol class="fontSize-18">
                  <li>
                    (i) hands-on training for identifying clone/fake and predatory journals, 
                  </li>
                  <li>
                    (ii) Checking Databases such as UGC CARE, SCOPUS, Web of Science, etc. 
                  </li>
                  <li>
                    (iii) To discriminate between dubious and reputable journals, and 
                  </li>
                  <li>
                    (iv) To create awareness about ethical research paper publications.
                  </li>
                </ol>
                <p class="p0 ">
                  As follow-up activity, Librarians were asked to provide similar training to all faculty in their HEIs to identify only UGC CARE listed journals. Librarians are requested to send the compliance report of their activities which are conducted in their colleges to guide faculties and researchers “to identify Fake/Predatory/Cloned Journals in Academics”.
                </p>
              </div>
              <div class="col-md-12">
                <div class="gallery_img_box gib_bg">
                  <?php
                  $counter3 = 1; 
                    foreach ($rdi_images['data'] as $key => $value) {
                      if ($value['type'] == 'Librarian Workshop 1') {
                        ?>
                        <figure class="gallery__item gallery__item_4--<?php echo $counter3++; ?>">
                          <img src="<?php echo $value['url'] ?>" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                          <!-- <div class="gallery__item-overlay-background"></div>  --> 
                        </figure>
                        <?php
                        }
                      }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div id="tabA15" class="tabcontent">
            <h4>New Faculty Orientation & Mentoring Programme 2021</h4>
            <div class="row list-number">
              <div class="col-md-12">
                <p class="p0 ">
                  In the contemporary world of modern education and knowledge, a teacher is not only a source of knowledge-creation but also the instrument required to sharpen the intellect of students. Good teaching learning processes are at the heart of good education. Teaching is an ethically and intellectually demanding profession. As consequence, new teachers need rigorous preparation and opportunities for continuous professional development along with academic and professional support. Unlike teachers in school education, faculty in higher education usually join the teaching profession without any formal training in teaching, learning or assessment. Recently, several faculties joined Government colleges in the State of Goa through GPSC (Goa Public Service Commission) recruitment. The newly joint faculty members need for a formal training course at the beginning of their careers to prepare themselves for their professional journey. Looking beyond basic orientation, the need is of a broad-based but focused programme that would prepare the teachers with pedagogical skills and techniques, research methodologies, methods of curriculum development, with the latest in information technology both for the gathering of knowledge as well as its dispensation and acquaint them with the processes of institutional administration and self- development.
                </p>
                <p class="p0 ">
                  Therefore, the Goa State Higher Education Council and Directorate of Higher Education organized a 
                  <strong>“New Faculty Orientation & Mentoring” </strong> 
                  program for period of three half days sessions from 6-8th October 2021. In this regards, the experienced faculties of Goa State Higher Education Council (SHEC) served as Resource persons to train the college faculty participants. Total 50 faculty members working at various HEIs in Goa participated in this workshop.
                </p>
                <p class="p0 mb0 ">
                  <strong>
                    The Aim and Objectives of the programme
                  </strong>
                </p>
                <ol class="fontSize-18">
                  <li>
                    To provide tools to the faculty in order to enhance their teaching skills, management skills & research skills. 
                  </li>
                  <li>
                    To assist new faculties in meeting their career goals by honing new capabilities.
                  </li>
                  <li>
                    To impart skills among the faculties systematically so that they may learn quickly & use it effectively in their academic carrier.  
                  </li>
                  <li>
                    To prepare the academic research community to be at par with international benchmarks for research quality, integrity, and excellence. 
                  </li>
                </ol>
                <!-- <img src="assets/images/rdi/NFOMP Workshop 1/Photo.png" alt="Gallery" class="m10"> -->
              </div>
              <div class="col-md-12">
                <div class="gallery_img_box gib_bg">
                  <?php
                    $counter4 = 1; 
                    foreach ($rdi_images['data'] as $key => $value) {
                      if ($value['type'] == 'NFOMP Workshop 1') {
                        ?>
                        <figure class="gallery__item gallery__item_5--<?php echo $counter4++; ?>">
                          <img src="<?php echo $value['url'] ?>" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                          <!-- <div class="gallery__item-overlay-background"></div>  --> 
                        </figure>
                        <?php
                        }
                      }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div id="tabA16" class="tabcontent">
            <h4>Follow-up Workshop on “New Faculty Orientation & Mentoring Programme 2021”</h4>
            <div class="row">
              <div class="col-md-12">
                <p class="p0 mb0 ">
                  As part of the “Motivated, energized and capable faculty” under the new National education Policy (NEP 2020), The Goa State Higher Education Council and Directorate of Higher Education has organised the 3rd Follow-up Workshop entitled 
                  <strong> “New Faculty Orientation & Mentoring Programme”, on 23 September 2022 </strong>
                  from 9.00 am to 5.30 pm at New SCERT building, Porvorim Goa for newly recruited faculty (joined from academic year 2019 to Oct. 2021).
                </p>
                <p class="p0 mb0 ">
                  GSHEC successfully organized 1st and 2nd workshop in this series during 6 -8th October 2021, and 2nd December 2021 respectively for these faculty. The key objective of this programme is to provide tools to the faculty that will enhance their teaching, management and research skills. The series of follow-up workshops were conducted to monitor the actual implementation of the tools provided in the previous workshop and to guide the faculty of the colleges. The faculty members of Goa SHEC was the resource person for these workshops.
                </p>
              </div>
              <div class="col-md-12">
                <div class="gallery_img_box gib_bg">
                  <?php
                    $counter5 = 1;
                    foreach ($rdi_images['data'] as $key => $value) {
                      if ($value['type'] == 'NFOMP Workshop 3') {
                        ?>
                        <figure class="gallery__item gallery__item_3--<?php echo $counter5++; ?>">
                          <img src="<?php echo $value['url'] ?>" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                          <!-- <div class="gallery__item-overlay-background"></div>  --> 
                        </figure>
                        <?php
                        }
                      }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div id="tabA17" class="tabcontent">
            <h4>Opportunities for Research, Development & Innovation: Meetings with College Faculty</h4>
            <div class="row list-number">
              <div class="col-md-12">
                <p class="p0 mb0 ">
                  Faculty meetings serve as one way to improve capability of HEIs by enhancing teaching and learning, as well as building a collaborative research culture. Improving HEIs includes staff members feeling valued, engaging in purposeful peer interactions, learning every day, and experiencing transparency. In order to develop research culture and creative thinking, interactive sessions were conducted in various colleges by the faculty members of Goa State Higher Education Council.  
                </p>
                <br>
                <p class="p0 mb0 ">
                  <strong>
                    The key objective of this programme is:
                  </strong>
                </p>
                <ol class="fontSize-18">
                  <li>
                    To mentor HEIs to raise their profiles on a global scale and become top performers in education and research.
                  </li>  
                  <li>
                    provide meaningful and actionable inputs, to refine the strategies and to apply course corrections and to prepare “Roadmap” to further enhance ranking position, recognition, accreditation and grading process and its links with Quality Research. 
                  </li>
                  <li>
                    To provide strategies to develop best practices, to improve research activities, academic performance and enhance the institution's reputation among stakeholders.
                  </li>
                </ol>
              </div>
              <div class="col-md-12">
                <div class="gallery_img_box gib_bg">
                  <?php
                  $counter6 = 1;
                    foreach ($rdi_images['data'] as $key => $value) {
                      if ($value['type'] == 'RDI Meeting in Colleges') {
                        ?>
                        <figure class="gallery__item gallery__item_3--<?php echo $counter6++; ?>">
                          <img src="<?php echo $value['url'] ?>" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                          <!-- <div class="gallery__item-overlay-background"></div>  --> 
                        </figure>
                        <?php
                        }
                      }
                  ?>
                </div>
              </div>
            </div>
          </div>
          
          <!-- 2023 -->
          <div id="tabA21" class="tabcontent">
            <h4>Vidnyan Dhara' Mega Science Series 2023</h4>
            <div class="row list-number">
              <div class="col-md-12">
                <p class="p0 mb0 ">
                  The Goa State Higher Education Council (GSHEC) and the Directorate of Higher Education (DHE) of the Government of Goa have organized a mega science series called 'Vidnyan Dhara' from
                  <strong>January 12th, 2023 to February 28th, 2023,</strong> 
                  spanning from National Youth Day to National Science Day. The event was coordinated by Dr. Mahesh Majik, Dr. Vithal Tilvi, and Ms. Vandana Sawant from the Goa State Higher Education Council (GSHEC). This series is 
                  <strong>unique in India,</strong> 
                  where scientists from research institutes guided students and faculty from University; University faculty interacted with colleges, and college faculty motivated Higher Secondary and High School Students and teachers. This is a first of its kind initiative and an apt way of spreading knowledge - in a true sense "Vidnyan Dhara".
                </p>
                <br>
                <p class="p0 mb0 ">
                  A total of 253 events were held, featuring 204 experts in the field of science and technology over a period of one and a half months. These events were held across 105 Higher Secondary Schools (HSS), 103 High Schools, 42 Colleges/Goa University, as well as four public events. The public events covered topics such as astronomy, pollinators for food security, Antarctica, and climate change, and were attended by teachers, students, and their parents. 19 senior scientists from central research laboratories, such as the National Institute of Oceanography (NIO) and the National Centre for Polar and Ocean Research (NCPOR), participated in the event and conducted sessions in various colleges across Goa. They discussed ongoing research in areas such as Oceanography, Antarctica, Himalaya, climate change, drug discovery, remote sensing, and highlighted the benefits of research for society and India's economic growth. 185 Science faculty of Goa University and Colleges in Goa served as resource persons and covered several hot topics such as research in agriculture, medical science, solar energy, mathematical models, astronomy, nanotechnology, natural language processing, and computers in scientific research. Vidnyan Dhara covered sessions in all disciplines of science, including Chemistry, Physics, Mathematics, Biotechnology, Microbiology, Botany, and more. Faculty members from colleges had the opportunity to interact with young minds studying in secondary and higher secondary schools across all the Talukas of Goa, including remote areas such as Sattari, Quepem and Canacona. This is the first-of-its-kind initiative where our in-house resource persons visited schools and conducted 200 plus sessions.
                </p>
              </div>
              <div class="col-md-12">
                <div class="gallery_img_box gib_bg">
                  <?php
                  $counter6 = 1;
                    foreach ($rdi_images['data'] as $key => $value) {
                      if ($value['type'] == 'Vidnyan Dhara') {
                        ?>
                        <figure class="gallery__item gallery__item_9--<?php echo $counter6++; ?>">
                          <img src="<?php echo $value['url'] ?>" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                          <!-- <div class="gallery__item-overlay-background"></div>  --> 
                        </figure>
                        <?php
                        }
                      }
                  ?>
                </div>
              </div>
            </div>
          </div>

          <div class="expandContainer d-none" id="expandContainer">
            <div class="grid_size">
              <span onclick="this.parentElement.style.display='none'; closeExpandedImage();" class="closebtn">&times;</span>
              <img id="expandedImg">
              <div id="imgtext" class="d-none"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <script src="assets/js/custom_frontend.js"></script>

  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>