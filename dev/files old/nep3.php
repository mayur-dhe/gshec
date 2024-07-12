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
</style>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4 class="innerpage-title">About NEP</h4>
          <div class="row text-align-justify pt30 textColor-black">
            <div class="col-md-7">
              The core of new National Education Policy (NEP) 2020 is to develop a Learner-centric education system that will provide quality and truly holistic education for all-round  growth of Learners. Looking at the successful institutions that make at the top of the World Rankings, two common features emerge: 
              <br>
              <div class="pl20">
                <strong class="list-number">
                  <ol>
                    <li>They are all research institutions, and </li>
                    <li>They are large in terms of student population, often with more than 10,000 students on a single campus, and providing UG, PG, and PhD programs on a single campus.</li>
                  </ol>
                  <br>
                </strong>
              </div>
              These characteristics of top institutions make their campus vibrant, and provide students even at UG level, an unique opportunity to interact with PhD students, Postdoctoral fellows, researchers, and faculty. Furthermore, the use of common infrastructure, and access to the state-of-the art facilities becomes feasible.
              <div class="pt30">
                The above successful model of education is not too different from India’s ancient campuses like Nalanda University which was catering to about 10,000 students and providing truly multidisciplinary education in Buddhist studies, fine arts, medicine,  mathematics, politics, astronomy, and art of war.
              </div>
              <div class="pt30">
                Thus, the implementation of NEP 2020 in true spirit needs to be done focusing on such successful models. Above all, focusing on Research in all HEIs including at UG level is a must because it is only through Research, we can produce enthusiastic teachers, and experiential teaching-Learning process for students. Research is the backbone of any developed nation, and only research can enhance the standards of living of our society. Finally, and most importantly, preparing students both mentally and physically, for life-long learning will be a major milestone to be achieved through NEP 2020.
              </div>
            </div>
            <div class="col-md-5">
              <h5>Resources</h5>
              <div class="pl20 list-number">
                <ol>
                  <?php 
                    if ($linksData && $linksData['code']=='200') {
                      foreach ($linksData['data'] as $key => $value) { 
                  ?>
                        <li><a href="<?php echo $value['url'] ?>" target="<?php echo $value['target']?>"><?php echo $value['title'] ?></a></li>
                <?php   
                      }
                    } else {
                ?>
                      <li>No Data Found</li>
                <?php   
                    }
                ?>
                </ol>
              </div>

              <img class="py40" src="assets/images/nep/action-plan/uucms.jpg" alt="UUCMS">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <script src="assets/js/custom_frontend.js"></script>
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