<?php
  $title = "National Education Policy";
  require 'layout/top-header.php';
?>
<body>
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "National Education Policy";
  require 'layout/site-map.php'; 
  include 'data/nep.php';
?>
<style>
  section.heading-page {
    background-image: url(assets/images/nep/nep4.jpg);
    padding-bottom: 400px;
  }
  
  .read-more,
  .border-button-yellow a {
    color: var(--greyReadableTextColor) !important;
  }
  
</style>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-0">
          <div class="tab">
            <button class="tablinks title">NEP</button>
            <button class="tablinks" onclick="openTabSection(event,'tab1')" id="defaultOpen">Action Plan</button>
            <button class="tablinks" onclick="openTabSection(event,'tab2')">Summary of NEP 2020</button>
            <button class="tablinks" onclick="openTabSection(event,'tab3')">Salient Features</button>
          </div>

          <!-- ---- Tab 1 start ---------------------------------------------------------------------------- -->
          <div id="tab1" class="tabcontent">
            <h4>Higher Education (Goa)</h4>

            <h5>1. Karnataka system of KLMS and UUCMS (Unified University & College Mgt. System) to be adopted.</h5>
            <div class="row">
              <div class="col-md-7">
                <strong>Status:</strong> A team from Goa consisting of academicians and technical experts visited the State of Karnataka to study KLMS and UUCMS. Our team found that 
                <strong>Goa’s existing common academic management system is more comprehensive,</strong> 
                with 34  different modules, some of which are:
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
              <!-- List -->
              <div class="col-md-12">
                <ul>
                  <li>
                    <strong>Online Admission: </strong>  We processed complete admission modalities of all the colleges centrally including preparation of merit list, and online fees payment. One of the greatest advantages of the online application system is that applicants can choose to submit their applications for multiple colleges or multiple courses free of cost. 
                  </li>
                  <li>
                    <strong>Faculty Module: </strong> It keeps all the information of the teachers in the school/college.
                  </li>
                  <li>
                    <strong>Student Module: </strong> It comprises of student’s Personal details, family (Guardian) details, contact details, Class attendance and scholarship.
                  </li>
                  <li class="list_items d-none">
                    <strong>Course Management: </strong> Faculties keeps the digital records of daily lecture diary.
                  </li>
                  <li class="list_items d-none">
                    <strong>Cashless Campus: </strong> Students/Parents can make your institute fees payment through Net Banking, Credit Card, Debit Card, UPI etc. Track easily the fee collection, fee dues through dashboard.
                  </li>
                  <li class="list_items d-none">
                    <strong>Academic Records: </strong> This stores all the present and past academic records of all the students.
                  </li>
                  <li class="list_items d-none">
                    <strong>Attendance Management: </strong> This will keep track of real time biometric attendance details of faculty and staff members of the colleges.
                  </li>
                  <li class="list_items d-none">
                    <strong>Examination module: </strong> This processes all the Semester End Assessment and Final grade sheet Generation. 
                  </li>
                  <li class="list_items d-none">
                    <strong>Finance Module: </strong> This menages a common book of accounts and pattern of assistance in a Common accounts software for all the colleges.
                  </li>
                  <li class="list_items d-none">
                    <strong>Library Module: </strong> A centralized Koha Library Software is installed to maintain the library records of all colleges under one framework. It has common catalogue book records of all the colleges
                  </li>
                </ul>
                <div class="border-button-yellow">
                  <a href="#" onclick="showMore(); return false;">
                    <span class="list_items">Read More</span>
                    <span class="list_items d-none">Show Less</span>
                  </a>
                </div>
              </div>
              <div class="col-md-5">
                <!-- <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS"> -->
              </div>
              <!-- conclusion -->
              <div class="col-md-12">
                Currently <strong>38 (62%)</strong> higher education institutions (HEIs) from Goa are already onboard on a single academic management system. Bringing remaining 23 HEIs onboard is already in progress, and will be completed by the end of 2023.
              </div>
            </div>

            <h5>2. Karnataka’s State Scholarship Portal (SSP) covering 12 post-matric schemes to be adopted in toto.</h5>
            <div class="row only-so-big">
              <div class="col-md-7">
                <strong>Status:</strong> Team from Goa visited Karnataka to study the State Scholarship portal. We are currently in the stage of data collection for developing the State Scholarship portal. 
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
              <div class="col-md-7">
                Karnataka’s SSP is an entitlement-based scheme, where students do not apply for the scholarship; they are automatically selected based on their eligibility, and the scholarships are disbursed through the Direct Benefit Transfer (DBT) process. The data for this selection is obtained from the existing academic management system, and various other departments including the State Welfare and Tax Departments where essential data of the students can be obtained.
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
              <div class="col-md-12">
                In Goa, we have now formed a team to design such a Portal, and the initial work of design is in progress.
              </div>
            </div>
            
            <h5>3. Industry-Internship Portal to be adopted (Andhra Pradesh)</h5>
            <div class="row only-so-big">
              <div class="col-md-7">
                <strong>Status:</strong> Internships are now a mandatory part of the Undergraduate Degree Program. To understand the Industry-Internship Portal developed by Andhra Pradesh State Council of Higher Education (APSCHE), Academic and Technical team from Goa also visited Andhra Pradesh. Currently, APSCHE is providing internships to about 3.75 Lakh students.
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
              <div class="col-md-7">
                In order to generate such a large number of internships, the Govt. of Adhra Pradesh has brought onboard all Govt. departments, several industries including Microsoft.
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
              <div class="col-md-7">
                In Goa, we are developing  a similar portal, and currently in the initial stage of designing and data collection. Data from various Government departments who are/can provide internships is being collated.
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
            </div>

            <h5>4. Faculty positions in colleges to be filled up completely.</h5>
            <div class="row only-so-big">
              <div class="col-md-7">
                <strong>Status:</strong> Faculty positions in colleges are filled completely with either Permanent, contract-basis, or visiting-lecture-basis faculty. 
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
            </div>

            <h5>5. NAAC accreditations to be a must – link grants. 100% done in J&K. Order issued in AP – Mentor-mentee linkage established.</h5>
            <div class="row only-so-big">
              <div class="col-md-7">
                <strong>Status:</strong> In Goa, Currently, 26 HEIs are NAAC accredited at least once. Following the Mentor-Mentee model, we have already assigned Mentor institutions for handholding of 13 HEIs which are not yet NAAC accredited. In addition, we recently organized an online NAAC training program for HEIs that are yet to go for NAAC accreditation. These institutions include engineering, medicine and other technical and professional HEIs
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
              <div class="col-md-7">
                For strategizing to achieve 100% NAAC accreditation in the State of Goa, our team also visited NAAC headquarters for discussion, and we have drawn a tentative roadmap starting NAAC accreditation of all HEIs by December 2023.
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
            </div>

            <h5>6. Regular Principals in all colleges to be there by March, 2023 latest.</h5>
            <div class="row only-so-big">
              <div class="col-md-7">
                <strong>Status:</strong> We have already instructed all HEIs having vacant Principal’s position to fill the vacancy on regular basis.
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
            </div>

            <h5>7. Minimum Common Syllabus in UP for 74 subjects – replicate to assure minimum standards</h5>
            <div class="row only-so-big">
              <div class="col-md-7">
                <strong>Status:</strong> In order to maintain quality and some standardization of the academic degrees among different HEIs, it is required that in a given State, minimum common syllabus be adopted. In Goa, Goa University and Chowgule College are the only autonomus instructions who can frame their syllabus. Therefore, in Goa, the minimum common syllabus is already adopted.  
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
            </div>

            <h5>8. Optional Skill system embedded in degree (ref. J&K)</h5>
            <div class="row only-so-big">
              <div class="col-md-7">
                <strong>Status:</strong> Optional Skill embedded courses and programs are recommended by NEP 2020. Along this line, in Goa, we are already in process of introducing Optional Skill Courses. These courses are being implemented by the Tata Consultancy Services, and IBM.  
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
              <div class="col-md-7">
                Furthermore, many HEIs are in the process of forming HEI Clusters to offer multidisciplinary education and for the implementation of NEP 2020. Once, the Clusters are formed, the Optional Skill embedded degree programs will be offered.
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
            </div>

            <h5>9. Institutional Development Plans (IDPs) to be framed by all HEIs by March, 2023.</h5>
            <div class="row only-so-big">
              <div class="col-md-7">
                <strong>Status:</strong> As part of the implementation of NEP 2020, and to ensure accelerated progress of HEIs, IDPs are being mandated for all HEIs. In this regard, in Goa, we have already directed all HEIs to develop and submit IDPs before March 2023.
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
            </div>

            <h5>10. Internships to be made compulsory in all Polytechnics as in Karnataka.</h5>
            <div class="row only-so-big">
              <div class="col-md-7">
                <strong>Status:</strong> Currently, Polytechnics comes under the ambit of Directorate of Technical Education.
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
            </div>

            <h5>11. Replicate upgradation of all ITIs through CSR as done in Karnataka  through its partnership with Tata Technologies Ltd. (Govt. funding was 20% approx)</h5>
            <div class="row only-so-big">
              <div class="col-md-7">
                <strong>Status:</strong> ITIs are currently under the Directorate of Skill Development.
              </div>
              <div class="col-md-5">
                <!-- <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS"> -->
              </div>
            </div>
            
            <h5>12. Internships to be made mandatory component of curriculum in technical courses.</h5>
            <div class="row only-so-big">
              <div class="col-md-7">
                <strong>Status:</strong> Currently, all engineering programs have Internships as part of the curriculum.
              </div>
              <div class="col-md-5">
                <!-- <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS"> -->
              </div>
            </div>
            
            <h5>13. DRONE Policy of Himachal Pradesh to be studied for replication. DRONE policy is being framed by the Civil Aviation Department, Govt. of Goa.</h5>
            <div class="row only-so-big">
              <div class="col-md-7">
                <!-- <strong>Status:</strong>  -->
              </div>
              <div class="col-md-5">
                <!-- <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS"> -->
              </div>
            </div>



          </div>
          <!-- ---- Tab 1 end ---------------------------------------------------------------------------- -->
          <!-- ---- Tab 2 start ---------------------------------------------------------------------------- -->
          <div id="tab2" class="tabcontent">
            <h4>Summary of NEP 2020 and Status & Plan of NEP implementation in these thematic areas</h4>
            <div class="row only-so-big">
              <div class="col-md-7">
                The core of new National Education Policy (NEP) 2020 is to develop a Learner-centric education system that will provide quality and truly holistic education for all-round  growth of Learners. Looking at the successful institutions that make at the top of the World Rankings, two common features emerge: 
                <strong>(1) they are all research institutions, and (2) they are large in terms of student population, often with more than 10,000 students on a single campus, and providing UG, PG, and PhD programs on a single campus.</strong>
                These characteristics of top institutions make their campus vibrant, and provide students even at UG level, an unique opportunity to interact with PhD students, Postdoctoral fellows, researchers, and faculty. Furthermore, the use of common infrastructure, and access to the state-of-the art facilities becomes feasible.
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
              <div class="col-md-7 pt30">
                The above successful model of education is not too different from India’s ancient campuses like Nalanda University which was catering to about 10,000 students and providing truly multidisciplinary education in Buddhist studies, fine arts, medicine,  mathematics, politics, astronomy, and art of war.
              </div>
              <div class="col-md-5 pt30">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
              <div class="col-md-7 pt30">
                Thus, the implementation of NEP 2020 in true spirit needs to be done focusing on such successful models. Above all, focusing on Research in all HEIs including at UG level is a must because it is only through Research, we can produce enthusiastic teachers, and experiential teaching-Learning process for students. Research is the backbone of any developed nation, and only research can enhance the standards of living of our society. Finally, and most importantly, preparing students both mentally and physically, for life-long learning will be a major milestone to be achieved through NEP 2020.
              </div>
              <div class="col-md-5 pt30">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
            </div>

            <h5>1. THEME: ACCESS</h5>
            <div class="row only-so-big">
              <div class="col-md-12">
                <span class="sub-theme">Sub-themes:</span>
                <ul>
                  <li><a href="#thm1-equity">Equity, including Gender Parity</a></li>
                  <li><a href="#thm1-inclusion">Inclusion including SEDGs</a></li>
                  <li><a href="#thm1-measures">Measures for increasing Access including Online & ODL education</a></li>
                  <li><a href="#thm1-increasing">Increasing Access through Indian Languages </a></li>
                </ul>
              </div>
              <div id="thm1-equity">
                <span class="theme-subtitle">a) Equity, including Gender Parity</span>
                <span class="sub-theme">Status:</span>
                Goa has a very good equity as well as gender parity in Higher Education. As can be seen from Table 1, for the last three years, the enrollment of Female students is significantly higher than the male students. 
                <br>
                <br>
                <strong>Table 1: Student enrollment in Goa for the last three years.</strong>
                <table class="table table-light table-border">
                  <thead>
                    <tr>
                      <td>Year</td>
                      <td>Female</td>
                      <td>Male</td>
                      <td>Total</td>
                      <td>Ratio(Female/Male)</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2017-2018</td>
                      <td>24,898</td>
                      <td>24,743</td>
                      <td>49,641</td>
                      <td>1.006</td>
                    </tr>
                    <tr>
                      <td>2018-2019</td>
                      <td>27,713</td>
                      <td>26,967</td>
                      <td>54680</td>
                      <td>1.03</td>
                    </tr>
                    <tr>
                      <td>2019-2020</td>
                      <td>47,727</td>
                      <td>25,055</td>
                      <td>52,782</td>
                      <td>1.11</td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <br>
                <strong>Table 2: GER of Goa and comparison with overall GER of India.</strong>
                <table class="table table-light table-border">
                  <thead>
                    <tr>
                      <td></td>
                      <td>GER (%)</td>
                      <td>Female (%)</td>
                      <td>Male (%)</td>
                      <td>SC (%)</td>
                      <td>ST (%)</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>India</td>
                      <td>27.1</td>
                      <td>27.3</td>
                      <td>26.9</td>
                      <td>23.4</td>
                      <td>18</td>
                    </tr>
                    <tr>
                      <td>Goa</td>
                      <td>28.4</td>
                      <td>34.6</td>
                      <td>23.8</td>
                      <td>31.7</td>
                      <td>26.4</td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <br>
                Enrollment of female students in Goa has seen  quite an increase of up to 11% in the year 2019-2020,  compared with the male students. This is likely attributed to the encouragement of female students for higher education as well as because of the conducive  academic environment for female students. 
                <br>
                <br>
                Similarly, the GER of Goa is significantly higher compared to the overall GER of India, especially for SC and ST students. This can be attributed to the access to higher educational institutions (HEIs): all government colleges in Goa are strategically built in rural areas providing easy access to quality higher education.
                <br>
                <br>
                Goa University, the only state university, has a full fledged hostel on campus. Construction and planning  of hostel accommodation in a few other HEIs  are in progress.
                <br>
                <br>
                <span class="sub-theme">Strategies</span>
                <ul>
                  <li>
                    While Goa’s GER is higher compared with the national GER, a detailed study is needed to identify the reasons why students are unable to pursue higher education.
                  </li>
                  <li>
                    Further, to improve GER, appropriate Degree/Skill-based program should be introduced. This again requires a detailed study.
                  </li>
                  <li>
                    Identifying skill gaps and introducing appropriate skills for SC & ST students.
                  </li>
                  <li>
                    Continuous sensitization to faculties and students about the reservation-identity issue faced by the SC & ST students.
                  </li>
                </ul>

                <span class="theme-subtitle">b) Inclusion including SEDGs</span>
                <span class="sub-theme">Status:</span>
                <ul>
                  <li>
                    For inclusion of students and faculty belonging to SEDGs, all HEIs in Goa adhere to the reservation policy, and admission for students and recruitment of teaching faculty is being done accordance to the State reservation policy.
                  </li>
                  <li>
                    Establishment of Tribal skill development and Research Centre in one of the Govt. Colleges is underway.
                  </li>
                  <li>
                    Tuition Fee waiver scheme for SC and ST students is already being implemented.
                  </li>
                  <li>
                    Bhausaheb Bandodkar scheme for orphan students is also being implemented.
                  </li>
                  <li>
                    In addition, interest free loan is being given to pursue higher education.
                  </li>
                </ul>
                <span class="sub-theme">Strategies:</span>
                <ul>
                  <li>  
                    Introduction of Education Degree programs in Special Education as part of the courses through Goa University and other HEIs.
                  </li>
                  <li>  
                    Mitigating fees, especially for socio-economically disadvantaged groups,  for pursuing higher education.
                  </li>
                  <li>  
                    Providing special research fund to systematically study areas specific to SDGs.
                  </li>
                </ul>
                
                <span class="theme-subtitle">c) Measures for increasing Access including Online & ODL education </span>
                <span class="sub-theme">Status:</span>
                Goa has been very proactive in promoting online education. Following the MOOCs standards, the Directorate of Higher Education, Goa had put a framework in place to develop e-content focused on the actual syllabus of Undergraduate Degree Programs. For this purpose, an online platform named DISHTAVO (Digital Integrated System for Holistic Teaching And Virtual Orientation) was developed. 
                <br>
                <br>
                DISHTAVO is an online e-content web portal, entirely developed in-house,  for  providing free access to UG academic content in Arts, Commerce, Science, Music, Law, Home Science,  Agriculture, & Education, and currently accessible at 
                <br>
                <a href="https://www.dishtavo.dhe.goa.gov.in/">https://www.dishtavo.dhe.goa.gov.in/</a>
                <br>
                Some features of DISHTAVO
                <ul>
                  <li>
                    Six temporary studios have been setup for training, recording of the video lectures.
                  </li>
                  <li>
                    More than 1500 teaching faculty are involved in producing about 16,000 lecture videos.
                  </li>
                  <li>
                    E-content available, that strictly adheres to the academic syllabus prescribed by the Goa University for UG programs.
                  </li>
                </ul>
                MoU signing with SWAYAM for the production of MOOCs is in progress. For this purpose, development of  MOOCs is already in progress. Unlike traditional MOOC production by individual faculties, an unique thing that we have adopted is that we have provided centralized facilities and a dedicated team for coordination of such MOOC courses. In the first phase 5 MOOCs are being developed. A few film directors have also been hired to give MOOC production direction to improve the presentation quality of MOOC content.
                <br>
                <br>
                For ODL, and credit transfer, we  have collaborated with IIT Mumbai. In the first phase, computer courses are being offered for BSc Computer Science degree program in Credit Transfer mode in all government colleges, where blended teaching mode is being currently adopted.
                <br>
                <br>
                <span class="sub-theme">Strategies:</span>
                <ul>
                  <li>
                    Creating MOOCs for PG level.
                  </li>
                  <li>
                    Encourage and provide support for creating more MOOCs in all disciplines.
                  </li>
                  <li>
                    Convert DISHTAVO E-content into Konkani language
                  </li>
                </ul>

                <span class="theme-subtitle">d) Increasing Access through Indian Languages </span>
                <span class="sub-theme">Status:</span>
                <ul>
                  <li>Currently, the language of instruction in HEIs in Goa is primarily English.</li>
                </ul>
                <br>
                <span class="sub-theme">Strategies:</span>
                <ul>
                  <li>While English is the primary medium of instruction in all HEIs in Goa, introduction of Konkani for communicating with students should be promoted.</li>
                  <li>Some SWAYAM courses, especially related to history, arts can be converted to Konkani.</li>
                </ul>


              </div>
              <div class="col-md-7">
                
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>

              <div class="col-md-7">
                
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>

              <div class="col-md-7">
                
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>


            </div>

          </div>
          <!-- ---- Tab 2 end ---------------------------------------------------------------------------- -->
          <!-- ---- Tab 3 start ---------------------------------------------------------------------------- -->
          <div id="tab3" class="tabcontent">
            <h4>Salient features of NEP 2020 for higher education</h4>
            <!-- <h5>1.</h5> -->
            <div class="row">
              <div class="col-md-7 list-number">
                <ul>
                  <li>
                    recognizing, identifying, and fostering the unique capabilities of each student, by sensitizing teachers as well as parents to promote each student’s holistic development in both academic and non-academic spheres. 
                  </li>
                  <li>
                    according the highest priority to achieving Foundational Literacy and Numeracy by all students by Grade 3.; 
                  </li>
                  <li>
                    flexibility, so that learners have the ability to choose their learning trajectories and programmes, and thereby choose their own paths in life according to their talents and interests; 
                  </li>
                  <li>
                    no hard separations between arts and sciences, between curricular and extra-curricular activities, between vocational and academic streams, etc. in order to eliminate harmful hierarchies among, and silos between different areas of learning. 
                  </li>
                  <li>
                    multidisciplinarity and a holistic education across the sciences, social sciences, arts, humanities, and sports for a multidisciplinary world in order to ensure the unity and integrity of all knowledge; 
                  </li>
                  <li>
                    emphasis on conceptual understanding rather than rote learning and learning-for-exams.
                  </li>
                  <li>
                    creativity and critical thinking to encourage logical decision-making and innovation
                  </li>
                  <li class="list_items_salient d-none">
                    ethics and human & Constitutional values like empathy, respect for others, cleanliness, courtesy, democratic spirit, spirit of service, respect for public property, scientific temper, liberty, responsibility, pluralism, equality, and justice
                  </li>
                  <li class="list_items_salient d-none">
                    promoting multilingualism and the power of language in teaching and learning
                  </li>
                  <li class="list_items_salient d-none">
                    life skills such as communication, cooperation, teamwork, and resilience
                  </li>
                  <li class="list_items_salient d-none">
                    focus on regular formative assessment for learning rather than the summative assessment that encourages today’s ‘coaching culture’
                  </li>
                  <li class="list_items_salient d-none">
                    extensive use of technology in teaching and learning, removing language barriers, increasing access for Divyang students, and educational planning and management
                  </li>
                  <li class="list_items_salient d-none">
                    respect for diversity and respect for the local context in all curriculum, pedagogy, and policy, always keeping in mind that education is a concurrent subject
                  </li>
                  <li class="list_items_salient d-none">
                    full equity and inclusion as the cornerstone of all educational decisions to ensure that all students are able to thrive in the education system
                  </li>
                  <li class="list_items_salient d-none">
                    synergy in curriculum across all levels of education from early childhood care and education to school education to higher education
                  </li>
                  <li class="list_items_salient d-none">
                    teachers and faculty as the heart of the learning process – their recruitment, continuous professional development, positive working environments and service conditions
                  </li>
                  <li class="list_items_salient d-none">
                    a ‘light but tight’ regulatory framework to ensure integrity, transparency, and resource efficiency of the educational system through audit and public disclosure while encouraging innovation and out-of-the-box ideas through autonomy, good governance, and empowerment
                  </li>
                  <li class="list_items_salient d-none">
                    outstanding research as a corequisite for outstanding education and development
                  </li>
                  <li class="list_items_salient d-none">
                    continuous review of progress based on sustained research and regular assessment by educational experts
                  </li>
                  <li class="list_items_salient d-none">
                    a rootedness and pride in India, and its rich, diverse, ancient and modern culture and knowledge systems and traditions. 
                  </li>
                  <li class="list_items_salient d-none">
                    education is a public service; access to quality education must be considered a basic right of every child
                  </li>
                  <li class="list_items_salient d-none">
                    substantial investment in a strong, vibrant public education system as well as the encouragement and facilitation of true philanthropic private and community participation.
                  </li>
                </ul>
                <div class="border-button-yellow">
                  <a href="#" onclick="showMoreSalient(); return false;">
                    <span class="list_items_salient">Read More</span>
                    <span class="list_items_salient d-none">Show Less</span>
                  </a>
                </div>
              </div>
              <div class="col-md-5">
                <img src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
              </div>
            </div>

          </div>
          <!-- ---- Tab 3 end ---------------------------------------------------------------------------- -->


        </div>
      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <script src="assets/js/frontend.js"></script>
  <script>
    
  </script>
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>