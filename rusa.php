<?php
  $title = "RUSA";
  require 'layout/top-header.php';
?>
  
<body class="reading-pages">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php';
  $subtitle = "";
  require 'layout/site-map.php'; 
  include 'data/rusa.php';
?>
  <!-- ------------- Main Content Start---------------------- -->
  <section class="page-section rusa pt-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-0">
          <div class="image fit">
            <div id="demo" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ul class="carousel-indicators">
                <?php foreach ($rusa_images['data'] as $key => $value){  ?>
                        <li data-target="#demo" data-slide-to="<?php echo $key?>" <?php echo $key==0 ?? 'class="active"' ?> ></li>                            
                <?php } ?>  
              </ul>

              <!-- The slideshow -->
              <div class="carousel-inner">
                <?php foreach ($rusa_images['data'] as $key => $value) { ?>
                        <div class="carousel-item <?php echo $key==0 ?  'active' : '' ?>">
                          <img src="<?php echo $value['url']; ?>" alt="<?php echo $value['alt']; ?>" width="1100" height="500">
                        </div> 
                <?php } ?>
                <!-- <div class="carousel-item carousel_item_overlay"></div> -->
              </div>
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>

          <div class="align-center">
            <h2>Rashtriya Uchchatar Shiksha Abiyan(RUSA)</h2>
            <p class="sub_title"> In the relentless pursuit of excellence to strengthen the core of our nation’s universities</p>
          </div>
          <hr />
          <p>
          Rashtriya Uchchatar Shiksha Abiyan(RUSA) Scheme is launched in 2013. The Scheme receives funding from the centre and the State in the ratio of 60:40. The objectives of the scheme RUSA are to improve access, equity and quality in higher education. The objectives include expanding and upgrading the existing infrastructure of the higher educational institutions.
          </p>
          <p>
            The Scheme is implemented in two phases RUSA 1.0 and RUSA 2.0. Under the first phase RUSA 1.0, 18 Colleges and University are the beneficiaries under the component “Infrastructure”. Each college received 2.00 crores and Goa University received 20.00 crores. When the scheme was extended in 2018, under RUSA 2.0 five colleges and Goa University are the beneficiaries. Quantum of funds remained same. The State is benefited during the extended period under the component “Equity Initiative” 5.00 crores. The State has decided to construct three hostels in the premises of three Government Colleges in Sanquelim, Khandola and Quepem for the benefit of underprivileged students. Construction work of hostel building is in progress. All beneficiary institutions have utilized funds for new constructions, upgrading existing infrastructure and purchase  of new equipments.
          </p>
          <p>
            The Scheme is implemented in two phases RUSA 1.0 and RUSA 2.0. Under the first phase RUSA 1.0, 18 Colleges and University are the beneficiaries under the component “Infrastructure”. Each college received 2.00 crores and Goa University received 20.00 crores. When the scheme was extended in 2018, under RUSA 2.0 five colleges and Goa University are the beneficiaries. Quantum of funds remained same. The State is benefited during the extended period under the component “Equity Initiative” 5.00 crores. The State has decided to construct three hostels in the premises of three Government Colleges in Sanquelim, Khandola and Quepem for the benefit of underprivileged students. Construction work of hostel building is in progress. All beneficiary institutions have utilized funds for new constructions, upgrading existing infrastructure and purchase  of new equipments.
          </p>
          <p>
            The institutions under RUSA 1.0 have utilised funds 100%. Institutions under RUSA 2.0 have received 75% funds and the request to release 3rd and final instalment is already made to the Centre.
          </p>
          <p>
          In all 23 (19 Government Aided and 04 Government) colleges and Goa University are the beneficiary institutions in the State of Goa under the Scheme RUSA.  
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- ------------- Main Content End---------------------- -->
  <!-- ***** Footer  ***** -->
  <?php require 'layout/footer.php'; ?>
  </body>
</html>