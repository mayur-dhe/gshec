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

  

  <!-- -------------------------------------------------------- -->
  <!-- ------------- Main Content Start---------------------- -->
  <!-- -------------------------------------------------------- -->
  <section class="page-section features rdi">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-0">

          <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'tab1')" id="defaultOpen">Vision</button>
            <button class="tablinks" onclick="openCity(event, 'tab2')">Mission</button>
            <button class="tablinks" onclick="openCity(event, 'tab3')">Research, Development & Innovations</button>
            <button class="tablinks" onclick="openCity(event, 'tab4')">Teaching, Learning and Educational Technology</button>
            <button class="tablinks" onclick="openCity(event, 'tab5')">Infrastructure Development</button>
            <button class="tablinks" onclick="openCity(event, 'tab6')">Community</button>
          </div>

          <div id="tab1" class="tabcontent">
            <h4>Vision</h4>
            <?php foreach ($vision as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
          </div>

          <div id="tab2" class="tabcontent">
            <h4>Mission</h4>
            <?php foreach ($mission as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
          </div>
          
          <div id="tab3" class="tabcontent">
            <h4>Research, Development & Innovations</h4>
            <?php foreach ($research_dev_innovation as $key => $value) { ?>
              <div data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3><?php echo $value ?></h3>
                </div>
              </div>
            <?php } ?>
          </div>
          
          <div id="tab4" class="tabcontent">
            <h4>Teaching, Learning and Educational Technology</h4>
            <?php foreach ($tlet as $key => $value) { ?>
              <div data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3><?php echo $value ?></h3>
                </div>
              </div>
            <?php } ?>
          </div>
          
          <div id="tab5" class="tabcontent">
            <h4>Infrastructure Development</h4>
            <?php foreach ($infrastructure_dev as $key => $value) { ?>
              <div data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3><?php echo $value ?></h3>
                </div>
              </div>
            <?php } ?>
          </div>

          <div id="tab6" class="tabcontent">
            <h4>Community</h4>
            <?php foreach ($community as $key => $value) { ?>
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
  <!-- -------------------------------------------------------- -->
  <!-- ------------- Main Content End---------------------- -->
  <!-- -------------------------------------------------------- -->


  
  

  <script>
    function openCity(evt, selectedTab) 
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
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
  

  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  
  </body>
</html>