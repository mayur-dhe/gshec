<?php
  $title = "NEP";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "NEP";
  require 'layout/site-map.php'; 

  include 'data/nep.php';
  
  // DFA($aca_rest);
?>



  

  <!-- -------------------------------------------------------- -->
  <!-- ------------- Main Content Start---------------------- -->
  <!-- -------------------------------------------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-0">
          
          <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'tab0')" id="defaultOpen">Introduction</button>
            <button class="tablinks" onclick="openCity(event, 'tab1')">Enhancing Quality in Research and Education</button>
            <button class="tablinks" onclick="openCity(event, 'tab2')">Energized and Motivated Faculty</button>
            <button class="tablinks" onclick="openCity(event, 'tab3')">Governance</button>
            <button class="tablinks" onclick="openCity(event, 'tab4')">Access to Quality Education</button>
            <button class="tablinks" onclick="openCity(event, 'tab5')">Skill Enhancement and Employability</button>
            <button class="tablinks" onclick="openCity(event, 'tab6')">Academic Restructuring</button>
            <button class="tablinks" onclick="openCity(event, 'tab7')">Ongoing/Planned Activities for Immediate Action</button>
          </div>

          
          <div id="tab0" class="tabcontent">
            <h4>Brief report on implementation of new National Education Policy <br>(NEP 2020)</h4>
            <?php foreach ($intro as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
          </div>

          <div id="tab1" class="tabcontent">
            <h4>Enhancing Quality in Research and Education to the world standards</h4>
            <?php foreach ($eqrae as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value['title'] ?></h5>
              <div><?php echo $value['desc'] ?></div>
            <?php } ?>
          </div>

          <div id="tab2" class="tabcontent">
            <h4>Energized and Motivated Faculty</h4>
            <?php foreach ($eamf as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value['title'] ?></h5>
              <div><?php echo $value['desc'] ?></div>
            <?php } ?>
          </div>

          <div id="tab3" class="tabcontent">
            <h4>Governance</h4>
            <?php foreach ($governance as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value['title'] ?></h5>      
              <?php foreach ($value['data'] as $key => $value2) { ?>
                <p><?php echo '- '.$value2 ?></p>
            <?php 
                }
              } 
            ?>
          </div>

          <div id="tab4" class="tabcontent">
            <h4>Access to Quality Education</h4>
            <?php foreach ($atqe as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value['title'] ?></h5>
              <div><?php echo $value['desc'] ?></div>
              <?php foreach ($value['data'] as $key => $value2) { ?>
                <p><?php echo '- '.$value2 ?></p>
            <?php 
                }
              } 
            ?>
          </div>

          <div id="tab5" class="tabcontent">
            <h4>Skill Enhancement and Employability</h4>
            <?php foreach ($seae as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value['title'] ?></h5>
              <div><?php echo $value['desc'] ?></div>
            <?php } ?>
          </div>

          <div id="tab6" class="tabcontent">
            <h4>Academic Restructuring</h4>
            <?php foreach ($aca_rest as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value ?></h5>
            <?php } ?>
          </div>

          <div id="tab7" class="tabcontent">
            <h4>Ongoing/Planned Activities for Immediate Action</h4>
            <?php foreach ($opafia as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value ?></h5>
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