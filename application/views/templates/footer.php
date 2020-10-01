  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <a href="#header" class="scrollto footer-logo"
                ><img
                  src="./assets/img/logo/logo-small.png"
                  style="width: 80px;"
                  alt=""
              /></a>
              <h3>Examify</h3>
              <p>Bringing the classroom evaluation to an online platform.</p>
            </div>
          </div>

          <!-- Location: Calicut, Kerala India <br>Email:
          examify@cybercraft.co.in <br>Call: +91 9567558867 -->

          <div class="row footer-newsletter justify-content-center">
            <div class="col-lg-6">
              <form action="" method="POST">
                <input
                  type="email"
                  name="email"
                  placeholder="Enter your Email"
                /><input
                  name="subscribe"
                  type="submit"
                  class="subscribe-button"
                  value="Subscribe"
                />
              </form>
            </div>
          </div>

          <div class="social-links">
            <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
            <a
              href="https://www.facebook.com/cybercraft.technologies/"
              class="facebook"
              ><i class="bx bxl-facebook"></i
            ></a>
            <a
              href="https://www.instagram.com/cybercraft.co.in/"
              class="instagram"
              ><i class="bx bxl-instagram"></i
            ></a>
            <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
            <a href="https://github.com/cybercraft-technologies" class="github"
              ><i class="bx bxl-github"></i
            ></a>
          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright <strong><span>Examify</span></strong
          >. All Rights Reserved
        </div>
        <div class="credits black-text">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-free-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script>
      $("#contact-form").submit((e) => {
        e.preventDefault();
        $.ajax({
          url:
            "https://script.google.com/macros/s/AKfycbzxCecYQ3VHJXiGAWlrsgJFVmttZoYcf-oSULPRvriXJUjFythT/exec",
          data: $("#contact-form").serialize(),
          method: "post",
          success: function (response) {
            alert("Form submitted successfully");
            window.location.reload();
            //window.location.href="https://google.com"
          },
          error: function (err) {
            alert("Something Error");
          },
        });
      });
    </script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  </body>
</html>
