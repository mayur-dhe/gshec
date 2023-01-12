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
            <button class="tablinks" onclick="openTabSection(event,1)" id="<?php echo $id_name ?>">Higher Education (Goa)</button>
            <button class="tablinks" onclick="openTabSection(event,2)" id="<?php echo $id_name ?>">Summary of NEP 2020</button>
            <button class="tablinks" onclick="openTabSection(event,3)" id="<?php echo $id_name ?>">Salient features)</button>
          </div>


          <div id="tab1" class="tabcontent">
            <h4>Higher Education (Goa)</h4>
            <h5><?php echo ++$key.') '.$value['title'] ?></h5>
            <div><?php echo $value['desc'] ?></div>
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

      $(window).scrollTop(160);
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>