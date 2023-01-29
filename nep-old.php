<?php
  $title = "National Education Policy";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "National Education Policy";
  require 'layout/site-map.php'; 
  include 'data/nep.php';
?>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
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
            <h4><?php echo $introduction['title'] ?></h4>
            <?php foreach ($introduction['data'] as $key => $value) { ?>
              <div><?php echo $value ?></div>
            <?php } ?>
          </div>

          <div id="tab1" class="tabcontent">
            <h4><?php echo $enhancing_quality_in_res_edu['title'] ?></h4>
            <?php foreach ($enhancing_quality_in_res_edu['data'] as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value['title'] ?></h5>
              <div><?php echo $value['desc'] ?></div>
            <?php } ?>
          </div>

          <div id="tab2" class="tabcontent">
            <h4><?php echo $energized_motivated_faculty['title'] ?></h4>
            <?php foreach ($energized_motivated_faculty['data'] as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value['title'] ?></h5>
              <div><?php echo $value['desc'] ?></div>
            <?php } ?>
          </div>

          <div id="tab3" class="tabcontent">
            <h4><?php echo $governance['title'] ?></h4>
            <?php foreach ($governance['data'] as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value['title'] ?></h5>      
              <?php foreach ($value['data'] as $key1 => $value2) { ?>
                <p><?php echo '- '.$value2 ?></p>
            <?php 
                }
              } 
            ?>
          </div>

          <div id="tab4" class="tabcontent">
            <h4><?php echo $access_to_quality_edu['title'] ?></h4>
            <?php foreach ($access_to_quality_edu['data'] as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value['title'] ?></h5>
              <div><?php echo $value['desc'] ?></div>
              <?php foreach ($value['data'] as $key1 => $value2) { ?>
                <p><?php echo '- '.$value2 ?></p>
            <?php 
                }
              } 
            ?>
          </div>

          <div id="tab5" class="tabcontent">
            <h4><?php echo $skill_enhancement_emp['title'] ?></h4>
            <?php foreach ($skill_enhancement_emp['data'] as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value['title'] ?></h5>
              <div><?php echo $value['desc'] ?></div>
            <?php } ?>
          </div>

          <div id="tab6" class="tabcontent">
            <h4><?php echo $academic_restructuring['title'] ?></h4>
            <?php foreach ($academic_restructuring['data'] as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value ?></h5>
            <?php } ?>
          </div>

          <div id="tab7" class="tabcontent">
            <h4><?php echo $activities_for_immediate_action['title'] ?></h4>
            <?php foreach ($activities_for_immediate_action['data'] as $key => $value) { ?>
              <h5><?php echo ++$key.') '.$value ?></h5>
            <?php } ?>
          </div>

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