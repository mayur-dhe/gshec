<?php
  $title = "Welcome";
  $page = "1";
  require 'layout/top-header.php';
?>
<body class="body pb0">
<?php
  include 'layout/sub-header.php';
  require 'layout/header.php';
  include 'data/quotes.php';
  include 'data/cards.php';
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
              <div class="row" style="padding: 5px 0px;">
                <div class="col-1 p0 textAlign-center">
                  <img class="imghw-2" src="assets/images/notification.gif" alt="">
                </div>
                <div class="col-10 p0">
                  <div class="row">
                    <div class="p_inner_div_4" id="announcement-message"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Cards-->
          <div class="owl-service-item owl-carousel">
            <?php
              foreach ($cards as $key => $card) {
                echo '
                  <div class="item">
                    <a href="'.$card['url'].'">
                      <div class="icon">
                        <img src="'.$card['image'].'" alt="">
                      </div>
                      <div class="down-content">
                        <h4 class="card_label">'.$card['title'].'</h4>
                        <h4 class="card_label_short">'.$card['short_name'].'</h4>
                        <p>Click Here</p>
                      </div>
                    </a>
                  </div>
                ';
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="quotes" id="quotes">
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
  </section>

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
                  // if ($value['type']=='home') {
              ?>
                    <!-- title="<?php echo concat_string($value['title']); ?>" -->
                    <li><a href="initiative.php?jnhsdwmxifkd=<?php echo $value['id']?>" >
                      <?php echo $value['short_name'] ?>
                    </a></li>
              <?php 
                  // }
                }
              ?>
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
                  foreach ($initiatives as $key => $value) {
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
                if ($value['type']=='home') {
            ?>
                  <div class="col-lg-6 col-md-12">
                    <a href="initiative.php?jnhsdwmxifkd=<?php echo $value['id']?>">
                      <div class="meeting-item">
                        <div class="thumb">
                          <!-- <div class="price"><span></span></div> -->
                          <img class="img_bgColor" src="<?php echo $value['cover_image'];?>" alt="MOU">
                        </div>
                        <div class="down-content" style="text-align:center">
                          <h4><?php echo $value['short_name'];?> </h4>
                          <div class="know_more">Read More</div>
                        </div>
                      </div>
                    </a>
                  </div>
            <?php
                }
              } 
            ?>
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
              <form id="contact" action="api/sendMail.php" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Let's get in touch</h2>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Full Name*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL...*" pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="mobile" type="number" id="mobile" placeholder="Mobile No.">
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
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
    </div>
  </section>




    <!-- ***** Footer  ***** -->
    <?php require 'layout/footer.php'; ?>
    <script>
      const messages = <?php echo json_encode($announcements) ?>;
      let currentMessageIndex = 0;
      const announcementMessage = document.getElementById("announcement-message");
      var txtCount = 0;
      var txtMessage = "";
      let txtSpeed = 60;

      setTimeout(function() {
        $('.show-ribbon').removeClass("d-none");
        $('.empty-div').addClass("d-none");
        $('.announcement').removeClass("d-none");
        displayNextMessage();     // initial Call to announcement
      }, 6000); // time in milliseconds

      $(document).ready(function()
      {
      });

      // animate announcements
      function displayNextMessage() 
      {  
        // start the loop from initial
        if (messages.length == currentMessageIndex) {
          currentMessageIndex=0;
        } else {
          txtMessage = messages[currentMessageIndex];
        }

        // Write Announcement
        if (txtCount < txtMessage.length) {
          $('.blink').addClass("d-none");
          announcementMessage.innerHTML += txtMessage.charAt(txtCount) + "<span class='blink'> | <span>";
          txtSpeed = 100;
          txtCount++;
        } else if (txtCount == txtMessage.length) {
          txtSpeed = 5000;
          txtCount++;
        } else {
          currentMessageIndex++;                // next message
          txtSpeed = txtCount = 0;              // set initial to 0
          announcementMessage.textContent = ""; // clear the container
        }
        setTimeout(displayNextMessage, txtSpeed); // Change message every 5 seconds (5000 milliseconds)
      }

    </script>
  </body>
</html>