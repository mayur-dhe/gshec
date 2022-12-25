<?php
  $title = "Organization";
  $page = "2";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "Organization";
  require 'layout/site-map.php'; 
  include 'data/council.php';
  // DFA($council_members);
?>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="filters">
            <ul>
              <!-- <li data-filter=".all" class="active">All</li> -->
              <li class="active" onclick="changeTab(0); return false;" >Organization Chart</li>
              <li onclick="changeTab(1); return false;">Council Members</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="row grid">
            <div class="col-lg-12 templatemo-item-col all chart" id="chart">
              <h2 style="color:black; text-align:center;font-weight: 600;padding: 20px 100px;">Organization Chart</h2>
              <div class="image fit">
                <img src="<?php echo $org_chart['image']?>" alt="<?php echo $org_chart['alt']?>" style="object-fit: contain;" />
              </div>
            </div>

            <div class="col-lg-12 templatemo-item-col all members council d-none" id="members">
              <h2 style="color:black; text-align:center;font-weight: 600;padding: 20px 100px;">Council Members</h2>
              <div class="row gy-4">
                <?php 
                  foreach ($council_members as $key => $value) {
                ?>
                  <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                      <div class="member-img">
                        <img src="<?php echo $value['image']?>" class="img-fluid" alt="<?php echo $value['name']?>">
                      </div>
                      <div class="member-info">
                        <h4><?php echo $value['name']; ?></h4>
                        <span><?php echo $value['designation']; ?></span>
                        <p><?php echo $value['title']; ?></p>
                      </div>
                    </div>
                  </div>
                <?php   
                  } 
                ?>
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
  <script>
    function changeTab(no)
    {
      if (no == 1) {
        $("#chart").addClass("d-none");
        $("#members").removeClass("d-none");
      } else {
        $("#members").addClass("d-none");
        $("#chart").removeClass("d-none");
      }
    }

  </script>
  </body>
</html>