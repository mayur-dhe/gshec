<?php
  $title = "Centre for Teaching, Learning & Educational Technology (TLET)";
  $title_url = "#";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Centre for Teaching, Learning & Educational Technology (TLET)";
  $isCardsPage = true;
  $getUrlID = 3;
  require 'layout/site-map.php'; 
  include 'data/tlet.php';
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
      <source src="assets/video/tlet/Teaching, Learning & Education Technology.mp4" type="video/mp4" />
    </video>
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
            
          <div id="tab0" class="tabcontent">
            <h4><?php echo $about['title']?></h4>
            <?php foreach ($about['data'] as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
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
          <div id="tab3" class="tabcontent list-number">
            <h4><?php echo $aims_obj['title']?></h4>
            <ol>
              <?php foreach ($aims_obj['data'] as $key => $value) { ?>
                <li>
                  <?php echo $value ?>
                </li>
              <?php } ?>
            </ol>
          </div>
          <!-- 2022 -->
          <div id="tabA11" class="tabcontent list-number">
            <h4>Outcome Based Education</h4>
            <div>
              <!-- Outcome Based Education (OBE) is a flexible, empowerment-oriented approach to learning. It aims to equip learners with the knowledge, competence, and orientation needed for success after graduating from the institution. Hence, OBE is a powerful education strategy based on Bloom’s Taxonomy designed to achieve higher-order thinking. To impart high quality in the Higher Education Institutes (HEIs) in the state. Goa State Higher Education Council in the Directorate of Higher Education conducted a comprehensive and statewide faculty orientation programme focussed on outcome-based education. Prof Niyan Marchon, Professor, Teaching, learning and Educational Technology, GSHEC was the resource person for the workshops at all HEIs. Through this workshops, 1,619 faculty from 33 colleges were trained in “Outcome Based Education - Attainment of Program and Course outcomes”.  From three major sections of Goa University i.e., Science, Humanities and Goa Business School,175 faculty were also  trained. -->
              Goa State Higher Education Council in the Directorate of Higher Education conducted a comprehensive and statewide faculty orientation programme focused on outcome-based education. Outcome Based Education (OBE) is a flexible, empowerment-oriented approach to learning. It aims to equip learners with the knowledge, competence, and orientation needed for success after graduating from the institution. Hence, OBE is a powerful education strategy based on Bloom’s Taxonomy designed to achieve higher-order thinking. 
            </div>
            <div class="mb0">
              <strong>
                The following modules/concepts were covered:
              </strong>
            </div>
            <ol>
              <li>Multiple Intelligence </li>
              <li>Bloom’s Taxonomy</li>
              <li>POs, PSOs, Cos, and assignment matrix</li>
              <li>Rubrics and assessments</li>
              <li>Attainment of POs and Cos.</li>
            </ol>
            <br>
            <div>
              Prof Niyan Marchon, Professor, Teaching, learning and Educational Technology, GSHEC, was the resource person for the workshops at all HEIs. Through these workshops, 1,619 faculty from 33 colleges were trained in “Outcome Based Education - Attainment of Program and Course Outcomes”.  From three major sections of Goa University, i.e., Science, Humanities and Goa Business School, 175 faculty were also trained.
            </div>

            <div class="col-md-12">
              <div class="gallery_img_box gib_bg">
                <?php
                  $counter0 = 1; 
                  foreach ($teaching_learning_images['data'] as $key => $value) {
                    if ($value['type'] == 'obe') {
                      ?>
                      <figure class="gallery__item gallery__item_1--<?php echo $counter0++; ?>">
                        <img src="<?php echo $value['url'] ?>" loading="lazy" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                        <!-- <div class="gallery__item-overlay-background"></div>  --> 
                      </figure>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <div id="tabA12" class="tabcontent">
            <h4>Massive Open Online Course Development at DHE</h4>
            <div>
              With an intent to facilitate seamless integration of Massive Open Online Courses (MOOC)s into the academic structure of higher education in Goa, the Directorate of Higher Education has launched Mentoring and Nurturing Digital and Virtual Initiatives 
              <strong>(MANDAVI) </strong>
              program for mentoring, training and supporting faculty from higher education institutions towards design and development of the MOOC content. The unique characteristic of this program is to carry out all MOOC development activities in collaborative mode. The production-based training and recording of video content of the course has been done with the creative directors and experts from the film industry to produce high-quality educational content. Eminent scientists and practitioners from research institutions and industries have been involved at various stages of the MOOC development process. 
            </div>
            <div>
              Currently phase-1 is in progress and five MOOC courses are under development which includes Music, Analytical Chemistry, Geology, Microbiology and Biochemistry. The courses are based on University Grants Commission (UGC) curriculum and Choice based Credit System (CBCS) and are proposed to be offered in credit transfer mode on the Study Webs of Active Learning for Young Aspiring Minds (SWAYAM) platform managed by Consortium for Educational Communication (CEC), the national coordinator designated by Ministry of Education (MoE). 
            </div>
            <div>
              On September 26, 2022, Goa's Directorate of Higher Education launched the 
              <strong>“MANDAVI”</strong>
              (Mentoring and Nurturing Digital and Virtual Initiatives) flagship program. On this occasion, the Directorate of Higher Education (DHE) and Consortium for Educational Communication (CEC) signed a Memorandum of Understanding (MoU). 
            </div>
            <div>
              For any details please feel free to contact Dr. Kavita Asnani, Nodal Officer (MOOC Project) Govt. of Goa, State Higher Education Council (SHEC),Directorate of Higher Education, Porvorim, Goa.
            </div>
            <div class="col-md-12">
              <div class="gallery_img_box gib_bg">
                <?php
                  $counter1 = 1; 
                  foreach ($teaching_learning_images['data'] as $key => $value) {
                    if ($value['type'] == 'mooc') {
                      ?>
                      <figure class="gallery__item gallery__item_6--<?php echo $counter1++; ?>">
                        <img src="<?php echo $value['url'] ?>" loading="lazy" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                        <!-- <div class="gallery__item-overlay-background"></div>  --> 
                      </figure>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <!-- 2023 -->
          <div id="tabA21" class="tabcontent">
            <h4>Reserve Bank of India, Panaji Regional Office, organized a Financial Literacy Program </h4>
            <div>
              The Directorate of Higher Education and Goa State Higher Education Council, Government of Goa in collaboration with Reserve Bank of India, Panaji Regional Office, Goa organized a Financial Literacy Program on 2nd February, 2023 at RBI, Panaji. A total of 41 faculty from 19 Higher Education Institutes offering Bachelors in Commerce across the State of Goa attended the program.The objective of the Government-Industry collaboration was to draw the attention of faculty towards latest developments in Banking and Technology.
            </div>
  
            <div class="mb0">
              <strong>
                The speakers for the program were: 
              </strong>
            </div>
            <ol class="">
              <li>
                Ms. Smita Chandramani Kumar – Regional Director Goa State, RBI Panaji
              </li>
              <li>
                Mr. Cassian Gomes – Manager, RBI Panaji
              </li>
              <li>
                Mr. Prafull Thakur – Asst. Manager, RBI Panaji
              </li>
              <li>
                Mr. Nimish Raje – Asst. Manager, RBI Panaji 
              </li>
            </ol>
            <br>
            <div>
              Topics such as Complaints redressal, Financial Inclusion, Currency Management and banking frauds were covered during the program.
            </div>
    
            <div class="col-md-12">
              <div class="gallery_img_box gib_bg">
                <?php
                  $counter1 = 1; 
                  foreach ($teaching_learning_images['data'] as $key => $value) {
                    if ($value['type'] == 'rbi') {
                      ?>
                      <figure class="gallery__item gallery__item_3--<?php echo $counter1++; ?>">
                        <img src="<?php echo $value['url'] ?>" loading="lazy" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                        <!-- <div class="gallery__item-overlay-background"></div>  --> 
                      </figure>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          <div id="tabA22" class="tabcontent">
            <h4>
              <!-- TCS conducts Faculty Development program (FDP) in Banking for Business Process for Commerce faculty from all HEIs -->
              Faculty Development Program (FDP) in Banking for Business Process for Commerce faculty from all HEIs – in collaboration with TCS
            </h4>
            <!-- <div>
              “Technology has completely changed the economic and business landscape in the entire world. Therefore, higher education faculty must be equipped with skills and knowledge to prepare students for this technology-driven future. This will enhance the quality of higher education”, said Prasad Lolayekar, Director of Higher Education.  He was speaking at the inaugural function of the 5-day Faculty Development Program (FDP) organized by the Directorate of Higher Education (DHE) and Goa State Higher Education Council (GSHEC), Government of Goa in collaboration with Tata Consultancy Services. The FDP for commerce faculty as Train the Trainer program was one of the objectives of the MoU to be signed between GSHEC, DHE and TCS in March 2023.
            </div>
            <div>
              This FDP is a part of a much bigger initiative under ”Motivated, Energized, and Capable Faculty”, one of the main themes of new National Education Policy (NEP 2020). Under this initiative, faculty in higher education are being continuously trained and upskilled.
            </div>
            <div>
              Retail Banking expert Jesal Kapadia, Manager BFSI Anupama Patil, and Domain Consultant Chandrakala B from TCS were the resource person for this FDP that was held  from 30th January to 3rd February, 2023 at Porvorim.
            </div>
            <div>
              The training was aimed at upskilling faculty from Commerce and economics disciplines, and focussed on Retail and Corporate Banking, electronic payment systems via Debit and Credit cards, Mortgages, Cash Managements and Trade Finances. A total of 46 faculty from 19 Colleges were trained during the FDP.
            </div>
            <div>
              This FDP will certainly help faculty to introduce new skill-based courses in higher education,  and build the Academic-Industry connect, one of the main goals under NEP 2020, said Prof. Niyan Marchon at the Valedictory function. Dr. Anson Albuquerque, Saurabh Naik and Ms. Vandana Sawant of Goa State Higher Education Council coordinated the event.
            </div> -->
            <div>
              “Technology has completely changed the economic and business landscape in the entire world. Therefore, higher education faculty must be equipped with skills and knowledge to prepare students for this technology-driven future. This will enhance the quality of higher education”, said Prasad Lolayekar, Director of Higher Education, at the inaugural function of the 5-day Faculty Development Program (FDP) organized by the Directorate of Higher Education (DHE) and Goa State Higher Education Council (GSHEC), Government of Goa, in collaboration with Tata Consultancy Services. The FDP for commerce faculty, Train the Trainer Program, was one of the objectives of the MoU, which was to be signed between GSHEC, DHE and TCS in March 2023.
            </div>
            <div>
              This FDP was part of a much bigger initiative, “Motivated, Energized, and Capable Faculty”, one of the main themes of the National Education Policy (NEP 2020). Under this initiative, the faculty in higher education were being continuously trained and upskilled.
            </div>
            <div>
              Retail Banking expert Jesal Kapadia, Manager BFSI Anupama Patil, and Domain Consultant Chandrakala B from TCS were the resource person for this FDP that was held from 30th January to 3rd February 2023 at Porvorim. 
            </div>
            <div>
              The training was aimed at upskilling faculty from the disciplines of Commerce and economics. The FDP focused on Retail and Corporate Banking, electronic payment systems via Debit and Credit cards, Mortgages, Cash Management and Trade Finances. A total of 46 faculty from 19 colleges were trained during the FDP.
            </div>
            <div>
              “This FDP will certainly help faculty to introduce new skill-based courses in higher education and build the Academic-Industry connect, one of the main goals under NEP 2020”, said Prof. Niyan Marchon at the Valedictory function. Dr Anson Albuquerque, Mr Saurabh Naik and Ms Vandana Sawant of Goa State Higher Education Council coordinated the event. 
            </div>
            <div class="col-md-12">
              <div class="gallery_img_box gib_bg">
                <?php
                  $counter1 = 1; 
                  foreach ($teaching_learning_images['data'] as $key => $value) {
                    if ($value['type'] == 'fdp') {
                      ?>
                      <figure class="gallery__item gallery__item_2--<?php echo $counter1++; ?>">
                        <img src="<?php echo $value['url'] ?>" loading="lazy" alt="Gallery image 1" onclick="isImageExpanded(this);" class="gallery__img g_img_cover" style="background-color:#000;">
                        <!-- <div class="gallery__item-overlay-background"></div>  --> 
                      </figure>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>
          </div>
          
          <!-- Image Viewer -->
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