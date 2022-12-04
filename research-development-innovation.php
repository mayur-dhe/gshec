<?php
  $title = "Research Dev and Innov....";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "Research Development and Innovation";
  require 'layout/site-map.php'; 
  include 'data/research_dev_innovation.php';
?>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section features rdi">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-0">

          <div class="tab">
            <?php foreach ($tabs as $key => $value) 
                { 
                  $id_name = "";
                  if ($key==0) {
                    $id_name = "defaultOpen";
                  }
              ?>
                <button class="tablinks" onclick="openTabSection(event, 'tab<?php echo $key ?>')" id="<?php echo $id_name ?>"><?php echo $value ?></button>
              <?php } ?>
          </div>

          <div id="tab0" class="tabcontent">
            <h4><?php echo $vision['title']?></h4>
            <?php foreach ($vision['data'] as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
          </div>

          <div id="tab1" class="tabcontent">
            <h4><?php echo $mission['title']?></h4>
            <?php foreach ($mission['data'] as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
          </div>
          
          <div id="tab2" class="tabcontent">
            <h4><?php echo $research_dev_innovation['title']?></h4>
            <?php foreach ($research_dev_innovation['data'] as $key => $value) { ?>
              <div data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3><?php echo $value ?></h3>
                </div>
              </div>
            <?php } ?>
          </div>
          
          <div id="tab3" class="tabcontent">
            <h4><?php echo $teach_learn_edu_tech['title']?></h4>
            <?php foreach ($teach_learn_edu_tech['data'] as $key => $value) { ?>
              <div data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3><?php echo $value ?></h3>
                </div>
              </div>
            <?php } ?>
          </div>
          
          <div id="tab4" class="tabcontent">
            <h4><?php echo $infrastructure_dev['title']?></h4>
            <?php foreach ($infrastructure_dev['data'] as $key => $value) { ?>
              <div data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3><?php echo $value ?></h3>
                </div>
              </div>
            <?php } ?>
          </div>

          <div id="tab5" class="tabcontent">
            <h4><?php echo $community['title']?></h4>
            <?php foreach ($community['data'] as $key => $value) { ?>
              <div data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3><?php echo $value ?></h3>
                </div>
              </div>
            <?php } ?>
          </div>

                
        </div>
      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->

  <script>
    function openTabSection(evt, selectedTab) 
    {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(selectedTab).style.display = "block";
      evt.currentTarget.className += " active";

      $(window).scrollTop(0);
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>