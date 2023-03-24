<?php
  $title = "Council Members";
  $title_url = "#";
  $page = "2";
  require 'layout/top-header.php';
?>
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  // $subtitle = "Council Members";
  require 'layout/site-map.php'; 
  include 'data/council.php';
  // DFA($council_members);
?>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section">
    <div class="container">
      <div class="row">

        <div class="col-lg-12">
          <h2 class="content-title">Constitution of Goa State Higher Education Council</h2>
          <div class="row">
            <?php 
              foreach ($council_members as $key => $value) {
            ?>
              <div class="col-lg-3 col-md-4 col-6 council m_auto" data-aos="fade-up" data-aos-delay="100">
                <div class="member auto_height ">
                  <div class="member-img">
                    <img src="<?php echo $value['image']?>" style="height:300px; width:auto" alt="<?php echo $value['name']?>">
                  </div>
                  <div class="member-info">
                    <h4><?php echo $value['name']; ?></h4>
                    <span><?php echo $value['designation']; ?></span>
                    <p><?php echo $value['title']; ?></p>
                  </div>
                </div>
              </div>
            <?php
                break;
              } 
            ?>
          </div>

          <h2 class="content-title mt20">Council Members</h2>
          <div class="row">
            <div class="col-md-12" style="padding: 0 60px 60px">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="min-width: 150px;">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col" style="min-width: 140px;">Nominated As</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach ($council_members as $key => $value) {
                      echo '
                        <tr>
                          <th scope="row">'.++$key.'</th>
                          <td>'.$value['name'].'</td>
                          <td>'.$value['designation'].'</td>
                          <td>'.$value['title'].'</td>
                        </tr>
                      ';
                    } 
                  ?>
                </tbody>
              </table>
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