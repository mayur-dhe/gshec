<?php
  $title = "Organization";
  $page = "2";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Organization";
  require 'layout/site-map.php'; 
  include 'data/council.php';
  // DFA($council_members);
?>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12" >
              <h2 class="content-title">Organization Chart</h2>
              <div class="image fit">
                <img src="<?php echo $org_chart['image']?>" alt="<?php echo $org_chart['alt']?>" style="object-fit: contain;" />
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>