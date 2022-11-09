
  <!-- footer -->
  <section class="footer-box">
    <div class="footer-clean">
      <footer>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 item">
              <h3>GOA SHEC</h3>
              <ul>
                <li>Goa State Higher Education Council
                  <br>under Rashtriya Uchchtar Shiksha Abhiyan (RUSA),
                  <br> a new Centrally sponsored Program 
                  <br>under Ministry of Human Resource Development, 
                  <br>Government of India, Department of Higher Education, New Delhi
                </li>
              </ul>
            </div>
            <div class="col-lg-3 item">
              <h3>Important Links</h3>
              <ul>
                <li><a href="#">RTI</a></li>
                <li><a href="rusa">RUSA</a></li>
                <li><a href="#">Acts And Rules</a></li>
                <li><a href="#contact">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-lg-3 item">
              <h3>Useful Links</h3>
              <ul>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Tenders</a></li>
                <li><a href="#">Downloads</a></li>
                <li><a href="#">Archives</a></li>
              </ul>
            </div>
            
          </div>
        </div>
      </footer>
      <div class="footer f-home">
        <p>Copyright © 2022 : Directorate of Higher Education, Government of Goa
          <!-- <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a> -->
        </p>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <!-- <script src="vendor/aos/aos.js"></script> -->

  <script>
    $(function () {

    });

    //according to loftblog tut
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