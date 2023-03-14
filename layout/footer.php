<!-- footer -->
<section class="footer-box">
  <div class="footer-clean">
    <footer>
      <div class="container">
        <div class="row justify-content-center">
          <!--   
          <div class="col-lg-1 col-md-1 col-6 item">
            <h3>GOA SHEC</h3>
            <ul> -->
              <!-- <li>Goa State Higher Education Council -->
                <!-- <br>under Rashtriya Uchchtar Shiksha Abhiyan (RUSA),
                <br>a new Centrally sponsored Program 
                <br>under Ministry of Human Resource Development, 
                <br>Government of India, Department of Higher Education, New Delhi -->
              <!-- </li> -->
            <!-- </ul> 
          </div>
        -->
          <div class="col-lg-3 col-md-3 col-6 item mb30">
            <h3>Important Links</h3>
            <ul>
              <li><a href="rti.php">RTI</a></li>
              <li><a href="rusa.php">RUSA</a></li>
              <li><a href="acts-and-rules.php">Acts And Rules</a></li>
              <li><a href="index.php#contact">Contact Us</a></li>
              <li><a href="https://www.dhe.goa.gov.in/" target="_blank">DHE</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-2 col-6 item mb30">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="tenders.php">Tenders</a></li>
              <li><a href="downloads.php">Downloads</a></li>
              <li><a href="archives.php">Archives</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-6 item mb30">
            <h3>Contact Us</h3>
            <ul>
              <li>
                <h6>Phone : <span><a href="tel:08322410824">0832-2410824</a></span></h6>
              </li>
              <li>
                <h6>Email : <span><a href="mailto:research-dhe.goa@gov.in">research-dhe.goa@gov.in</a></span></h6>
              </li>
              <li>
                <h6>Address : <span>SCERT, Alto-Porvorim, <br>Bardez-Goa</span></h6>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-4 col-6 item mb30">
            <h3>Connect Us</h3>
            <ul>
              <li class="social-media-links">
                <a href="https://twitter.com/GoaSHEC" class="fa fa-twitter" title="@GoaSHEC"></a>
                <a href="https://www.facebook.com/profile.php?id=100086696510658" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="https://www.linkedin.com/in/goa-state-higher-education-council-652852254/" class="fa fa-linkedin"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <div class="footer f-home">
      <p>Copyright © 2023 : Goa State Higher Education Council, Government of Goa 
        <!-- <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a> -->
      </p>
    </div>
  </div>
</section>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<!-- <script src="vendor/aos/aos.js"></script> -->

<script>
  $(function () {

  });
  
  $('.nav li:first').addClass('active');

  var showSection = function showSection(section, isAnimate) {
    var
      direction = section.replace(/#/, ''),
      reqSection = $('.section').filter('[data-section="' + direction + '"]'),
      reqSectionPos = reqSection.offset().top - 0;

    if (isAnimate) {
      $('body, html').animate({
        scrollTop: reqSectionPos
      },
        800);
    } else {
      $('body, html').scrollTop(reqSectionPos);
    }

  };

  var checkSection = function checkSection() {
    $('.section').each(function () {
      var
        $this = $(this),
        topEdge = $this.offset().top - 80,
        bottomEdge = topEdge + $this.height(),
        wScroll = $(window).scrollTop();
      if (topEdge < wScroll && bottomEdge > wScroll) {
        var
          currentId = $this.data('section'),
          reqLink = $('a').filter('[href*=\\#' + currentId + ']');
        reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
      }
    });
  };

  $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
    e.preventDefault();
    showSection($(this).attr('href'), true);
  });

  $(window).scroll(function () {
    checkSection();
  });

</script>