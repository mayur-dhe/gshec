<?php
  $title = "Archives";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "Archives";
  require 'layout/site-map.php'; 
  include 'data/archives.php';
  // DFA($council_members);
?>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
      <div class="container p-4">
        <div class="row">
          <?php 
            foreach ($archives as $key => $value) {
          ?>
            <div class="card">
              <a href="<?php echo $value['url'] ?>" class="btn p-0" target="_blank">
                <img src="assets/images/pdf.png" class="card-img-top" alt="...">
                <?php echo $value['title'] ?>
              </a>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <!-- ------------- Main Content End---------------------- -->
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>