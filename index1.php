<?php
  $title = "Welcome";
  require 'layout/top-header.php';
?>
<body class="body">
<?php 
  include 'layout/sub-header.php';
  require 'layout/header.php'; 
  include 'data/quotes.php';
  include 'data/initiatives.php';
?>
<style>
  .main-banner .caption {
    position: absolute;
    top: 280px !important;
    transform: translateY(-50%);
}
</style>
  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video" poster="assets/images/meeting-04.jpg">
      <source src="assets/video/Test2.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="caption">
              <h6>Welcome to</h6>
              <h2>GOA STATE Higher Education Council</h2>
              <p>
                Under Rashtriya Uchchtar Shiksha Abhiyan(RUSA)
                <br>A new Centrally sponsored Program under Ministry of Human Resource Development,
                <br>Government of India, 
                <br>Department of Higher Education, 
                <br>New Delhi
              </p>
              <!-- <div class="main-button-red">
                    <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                  </div> -->
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
          <div class="owl-service-item owl-carousel">

            <div class="item">
              <a href="nep">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
                <div class="down-content">
                  <h4>NEP<br><br></h4>
                  <p>Click Here</p>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="research-development-innovation">
                <div class="icon">
                  <img src="assets/images/icons/R-D-Innovation.svg" alt="">
                </div>
                <div class="down-content">
                  <h4>Research Development and Innovation</h4>
                  <p>Click Here</p>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="teaching-learning">
                <div class="icon">
                  <img src="assets/images/icons/Teaching-Learning-and-Educational-Technologies.svg" alt="">
                </div>
                <div class="down-content">
                  <h4>Teaching Learning and Educational Technology </h4>
                  <p>Click Here</p>
                </div>
              </a>
            </div>

            <div class="item">
              <a href="sdc">
                <div class="icon">
                  <img src="assets/images/icons/SW-Development-cell.svg" alt="">
                </div>
                <div class="down-content">
                  <h4>Software Development Cell<br/><br/></h4>
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
                  <span>
                    <i>
                      <?php echo $quote['desc'];  ?>
                    </i>
                  </span>  
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
        <div class="col-lg-4">
          <div class="categories">
            <h4>Initiatives List</h4>
            <ul>
              <?php 
                foreach ($initiatives as $key => $value) {
              ?>
                <li><a href="initiatives?jnhsdwmxifkd=<?php echo $value['id']?>" title="<?php echo concat_string($value['title']); ?>">
                  <?php echo concat_string($value['title'], 30); ?>
                </a></li>
              <?php
                if (++$key>9)
                break;
              } ?>
            </ul>
            <div class="main-button-red">
              <a href="initiatives-list">All Initiatives</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <?php 
              foreach ($initiatives as $key => $value) {
            ?>
              <div class="col-lg-6">
                <a href="initiatives?jnhsdwmxifkd=<?php echo $value['id']?>">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <!-- <span>$22.00</span> -->
                      </div>
                      <img src="<?php echo $value['cover_image'];  ?>" alt="MOU">
                    </div>
                    <div class="down-content">
                      <!-- <div class="date">
                        <h6>Nov <span>10</span></h6>
                      </div> -->
                      <h4><?php echo concat_string($value['title']);?></h4>
                      <p>Know More</p>
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
  <!-- 
  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR BACHELOR DEGREE</h3>
                <p>You are allowed to use this edu meeting CSS template for your school or university or business. You
                  can feel free to modify or edit this layout.</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR BACHELOR DEGREE</h3>
                <p>You are not allowed to redistribute the template ZIP file on any other template website. Please
                  contact us for more information.</p>
                <div class="main-button-yellow">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
              <div class="accordion-head">
                <span>About Edu Meeting HTML Template</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p>If you want to get the latest collection of HTML CSS templates for your websites, you may visit <a
                      rel="nofollow" href="https://www.toocss.com/" target="_blank">Too CSS website</a>. If you need a
                    working contact form script, please visit <a href="https://templatemo.com/contact"
                      target="_parent">our contact page</a> for more info.</p>
                </div>
              </div>
            </article>
            <article class="accordion">
              <div class="accordion-head">
                <span>HTML CSS Bootstrap Layout</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna, maximus at semper
                    sit amet, eleifend eget neque. Nunc facilisis quam purus, sed vulputate augue interdum vitae.
                    Aliquam a elit massa.<br><br>
                    Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget nibh consequat
                    aliquet. Proin fringilla, quam at euismod porttitor, odio odio tempus ligula, ut feugiat ex erat nec
                    mauris. Donec viverra velit eget lectus sollicitudin tincidunt.</p>
                </div>
              </div>
            </article>
            <article class="accordion">
              <div class="accordion-head">
                <span>Please tell your friends</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit, at ullamcorper
                    justo suscipit sit amet. Quisque at suscipit mi, non efficitur velit.<br><br>
                    Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor sapien et quam volutpat
                    luctus. Nullam sodales ipsum ac neque ultricies varius.</p>
                </div>
              </div>
            </article>
            <article class="accordion last-accordion">
              <div class="accordion-head">
                <span>Share this to your colleagues</span>
                <span class="icon">
                  <i class="icon fa fa-chevron-right"></i>
                </span>
              </div>
              <div class="accordion-body">
                <div class="content">
                  <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et malesuada fames ac
                    ante ipsum primis in faucibus.<br><br>
                    Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla pellentesque ut
                    tortor sit amet maximus. In eu libero ullamcorper, semper nisi quis, convallis nisi.</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- 
  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Our Popular Courses</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="Course One">
              <div class="down-content">
                <h4>Morbi tincidunt elit vitae justo rhoncus</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>$160</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="Course Two">
              <div class="down-content">
                <h4>Curabitur molestie dignissim purus vel</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>$180</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Nulla at ipsum a mauris egestas tempor</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>$140</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Aenean molestie quis libero gravida</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>$120</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="">
              <div class="down-content">
                <h4>Lorem ipsum dolor sit amet adipiscing elit</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>$250</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="">
              <div class="down-content">
                <h4>TemplateMo is the best website for Free CSS</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>$270</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Web Design Templates at your finger tips</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>$340</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Please visit our website again</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>$360</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="">
              <div class="down-content">
                <h4>Responsive HTML Templates for you</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>$400</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="">
              <div class="down-content">
                <h4>Download Free CSS Layouts for your business</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>$430</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Morbi in libero blandit lectus cursus</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>$480</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>Curabitur molestie dignissim purus</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul>
                    </div>
                    <div class="col-4">
                      <span>$560</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>Facts About GSHEC</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">60</div>
                    <div class="count-title">Total Institutes</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit add-digit">50000</div>
                    <div class="count-title">Students</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit add-digit">30000</div>
                    <div class="count-title">Faculty</div>
                  </div>
                </div>
                <!-- <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">32</div>
                    <div class="count-title">Courses</div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <canvas id="myChart" class="video" style="width:100%;max-width:600px;" ></canvas>
          <!-- <div class="video"> -->
            <!-- <a href="#" target="_blank">
              <img src="" alt="">
            </a>
          </div> -->
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
              <form id="contact" action="" method="post">
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
                      <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL...*"
                        required="">
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
                      <textarea name="message" type="text" class="form-control" id="message"
                        placeholder="YOUR MESSAGE..."></textarea>
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
                <span>gshec@nic.in</span>
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