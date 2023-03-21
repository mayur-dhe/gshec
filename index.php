<?php
  $title = "Welcome";
  $page = "1";
  require 'layout/top-header.php';
?>
<body class="body">
<?php
  include 'layout/sub-header.php';
  require 'layout/header.php';
  include 'data/quotes.php';
  include 'data/initiatives.php';
  include 'data/announcement.php';
?>
<style>
  .quote-font {
    font-family: 'Parisienne', cursive;
    font-size: 1.8em;
    max-width: 780px;
    margin: auto;
  }

  .main-banner .caption {
    position: absolute;
    top: 210px !important;
    transform: translateY(-50%);
  }
  .header-area.header-sticky {
    min-height: 0px;
    height: 0px;
  }
</style>
  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video" poster="assets/images/intro-cover-img.png">
      <source src="assets/video/gshec_intro.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="caption">
              <h6>Welcome to</h6>
              <h2>GOA STATE Higher Education Council</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Ribbon Start -->
          <div class="empty-div emptyBox">empty</div>
          <div class="show-ribbon d-none">
            <div class="custom-ribbon custom-ribbon-right" style="background:#e7eab3; width:auto;">
              <?php
                foreach ($announcements as $key => $value) {
                  echo '<div class="row" style="padding: 5px 0px;">
                    <div class="col-1 p0 textAlign-center">
                      <img class="imghw-2" src="assets/images/notification.gif" alt="">
                    </div>
                    <div class="col-10 p0">';
                      echo '<div class="animate-typed-out p_inner_div_4" style="color:#2a2a2a">'.$value.'</div>';
                    echo '</div>
                  </div>';
                }
              ?>
            </div>
          </div>
          <!-- Ribbon End -->

          <div class="owl-service-item owl-carousel">
            <div class="item">
              <a href="national-education-policy.php">
                <div class="icon">
                  <img src="assets/images/icons/NEP.png" alt="">
                </div>
                <div class="down-content">
                  <h4 class="card_label">National Education Policy</h4>
                  <h4 class="card_label_short">NEP<br><br></h4>
                  <p>Click Here</p>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="research-development-innovation.php">
                <div class="icon">
                  <img src="assets/images/icons/R-D-Innovation.png" alt="">
                </div>
                <div class="down-content">
                  <h4 class="card_label">Center for Research Development and Innovation</h4>
                  <h4 class="card_label_short">RDI <br><br> </h4>
                  <p>Click Here</p>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="teaching-learning.php">
                <div class="icon">
                  <img src="assets/images/icons/Teaching-Learning-and-Educational-Technologies.png" alt="">
                </div>
                <div class="down-content">
                  <h4 class="card_label">Center for Teaching, Learning and Education Technology </h4>
                  <h4 class="card_label_short">TLET <br><br> </h4>
                  <p>Click Here</p>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="software-development-cell.php">
                <div class="icon">
                  <img src="assets/images/icons/SW Development cell.png" alt="">
                </div>
                <div class="down-content">
                  <h4 class="card_label">Software Development Cell</h4>
                  <h4 class="card_label_short">SDC<br/><br/></h4>
                  <p>Click Here</p>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="training-internship-placement.php">
                <div class="icon">
                  <img src="assets/images/icons/Training, internship and placement.png" alt="">
                </div>
                <div class="down-content">
                  <h4 class="card_label">Training Internship and Placement</h4>
                  <h4 class="card_label_short">TIP<br/><br/></h4>
                  <p>Click Here</p>
                </div>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
    
  <div class="quotes" id="quotes">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-quote-item owl-carousel quote-box">
            <?php 
              foreach ($quotes as $key => $quote) {
            ?>
              <div class="item">
                <blockquote>
                  <div class="quote-font">
                      <?php echo $quote['desc'];  ?>
                  </div>  
                </blockquote>
                <span class="quote-author">
                  <?php echo' - '.$quote['author']; ?>
                </span>
              </div>
            <?php
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Initiatives</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="categories">
            <h4>Initiatives List</h4>
            <ul>
              <?php 
                foreach ($initiatives as $key => $value) {
              ?>
                  <!-- title="<?php echo concat_string($value['title']); ?>" -->
                  <li><a href="initiative.php?jnhsdwmxifkd=<?php echo $value['id']?>" >
                    <?php echo $value['short_name'] ?>
                  </a></li>
              <?php } ?>
                  <!-- <li>
                    <a href="#" onclick="showActivity(1)">
                      Activities 
                      <span class="dd-icon"> 
                        <i class="fa fa-caret-right dd-selected-right"></i> 
                        <i class="fa fa-caret-down dd-selected-down d-none"></i>
                      </span>
                    </a>
                  </li> -->
              <?php 
                  foreach ($initiative_activities as $key => $value) {
              ?>
                    <!-- <li><a class="activities" href="initiative.php?jnhsdwmxifkd=<?php echo $value['id']?>" >
                      <?php echo $value['short_name'] ?>
                    </a></li> -->
              <?php } ?>
            </ul>
            <div class="main-button-red pt0 mt10">
              <a href="initiatives.php">All Initiatives</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-6">
          <div class="row">
            <?php 
              foreach ($initiatives as $key => $value) {
            ?>
              <div class="col-lg-6 col-md-12">
                <a href="initiative.php?jnhsdwmxifkd=<?php echo $value['id']?>">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <!-- <span>$22.00</span> -->
                      </div>
                      <img src="<?php echo $value['cover_image'];  ?>" alt="MOU">
                    </div>
                    <div class="down-content" style="text-align:center">
                      <!-- <div class="date">
                        <h6>Nov <span>10</span></h6>
                      </div> -->
                      <h4>
                        <?php echo $value['short_name'];?> 
                      </h4>
                      <div class="know_more">Read More</div>
                    </div>
                  </div>
                </a>
              </div>
            <?php
              if (++$key>3)
                break;
            } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Edu Dashboard</h2>
        </div>
        <div class="row">
          <div class="col">
            <div class="count-area-content">
              <div class="count-digit"><img src="assets/images/icons/Institutes.png" alt=""></div>
              <div class="count-digit">60</div>
              <div class="count-title">Total Institutes</div>
            </div>
          </div>
          <div class="col">
            <div class="count-area-content">
              <div class="count-digit"><img src="assets/images/icons/Students Icon.png" alt=""></div>
              <div class="count-digit add-digit">50000</div>
              <div class="count-title">Students</div>
            </div>
          </div>
          <div class="col">
            <div class="count-area-content">
              <div class="count-digit"><img src="assets/images/icons/Faculty icon.png" alt=""></div>
              <div class="count-digit add-digit">30000</div>
              <div class="count-title">Faculty</div>
            </div>
          </div>
          <div class="col">
            <div class="count-area-content">
              <div class="count-digit"><img src="assets/images/icons/Gender ratio_icon.png" alt=""></div>
              <div class="count-digit">32</div>
              <div class="count-title">Gender Ratio</div>
            </div>
          </div>
          <div class="col">
            <div class="count-area-content">
              <a href="education-dashboard.php" style="color:var(--white)"> 
                <div class="count-title pt100">View All</div>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="api/sendMail" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Let's get in touch</h2>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <!-- <label for="name">Full Name*</label> -->
                      <input name="name" type="text" id="name" placeholder="Full Name*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <!-- <label for="email">YOUR EMAIL*</label> -->
                      <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL...*" pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <!-- <label for="mobile">Mobile No.</label> -->
                      <input name="mobile" type="number" id="mobile" placeholder="Mobile No.">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <!-- <label for="subject">SUBJECT...*</label> -->
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <!-- <label for="message">YOUR MESSAGE</label> -->
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset style="text-align: center;">
                      <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <iframe src="https://www.google.com/maps/d/embed?mid=1dr9AOy4B4u4E2TRLuhPX696K2nFUvPg&ehbc=2E312F" width="100%" height="510" style="border-radius: 20px;"></iframe>
        </div>
        <!-- <div class="col-lg-2">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span><a href="tel:+08322410824">0832-2410824</a></span>
              </li>
              <br/>
              <li>
                <h6>Email Address</h6>
                <span>research-dhe.goa@gov.in</span>
              </li>
              <br/>

              <li>
                <h6>Street Address</h6>
                <span>SCERT, Alto-Porvorim, Bardez-Goa</span>
              </li>
              <li class="social-media-links">
                <a href="https://twitter.com/GoaSHEC" class="fa fa-twitter" title="@GoaSHEC"></a>
                <a href="https://www.facebook.com/profile.php?id=100086696510658" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com/in/goa-state-higher-education-council-652852254/" class="fa fa-linkedin"></a>
              </li>
            </ul>
          </div>
        </div> -->
    </div>
  </section>




    <!-- ***** Footer  ***** -->
    <?php require 'layout/footer.php'; ?>
    <script>
      setTimeout(function() {
        $('.show-ribbon').removeClass("d-none");
        $('.empty-div').addClass("d-none");
        $('.announcement').removeClass("d-none");
      }, 6000); // <-- time in milliseconds

      $(document).ready(function()
      {
        

      });

      setInterval(function() {
        if (document.querySelector('#talkbubble.d-none') !== null) {
          $("#talkbubble").removeClass("d-none");
        } else {
          $("#talkbubble").addClass("d-none");
        }
      }, 2000);



      var xValues = [100,200,300,400,500,600,700,800,900,1000];

      new Chart("myChart", {
        type: "line",
        data: {
          labels: xValues,
          datasets: [{ 
            label: "Institutes",
            data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
            borderColor: "#d5d5d570",
            fill: false,
          }, { 
            label: "Faculty",
            data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
            borderColor: "#ff9900a6",
            fill: false
          }, { 
            label: "Students",
            data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
            borderColor: "#f118189c",
            fill: false
          }]
        },
        options: {
          legend: {display: true},
          scales: {
            yAxes: [{
              display: true,
              ticks: {
                  beginAtZero: true
              }
            }]
          },
          title: {
            display: true,
            text: 'Students Record'
          }
        }
      });
    </script>
  </body>
</html>