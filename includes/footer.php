</div>

<!-- Footer Start -->
<footer class="ct-footer footer-dark">
    <!-- Top Footer -->
    <div class="container">
      <div class="footer-top mb-0">
        <div class="footer-logo">
          <img src="assets/img/logo-light.png" alt="logo">
        </div>       
      </div>
    </div>

    
    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="container">
        <ul>
          <li> <a href="#">Privacy Policy</a> </li>
          <li> <a href="#">Refund Policy</a> </li>
          <li> <a href="#">Cookie Policy</a> </li>
          <li> <a href="#">Terms & Conditions</a> </li>
        </ul>
        <div class="footer-copyright">
          <p> Copyright &copy; 2020 <a href="#">Slices Pizzeria Restaurant</a> All Rights Reserved. </p>
          <a href="#" class="back-to-top">Back to top <i class="fas fa-chevron-up"></i> </a>
        </div>
      </div>
    </div>

  </footer>
  <!-- Footer End -->


  <!-- Vendor Scripts -->
  <script src="assets/js/plugins/jquery-3.4.1.min.js"></script>
  <script src='assets/js/plugins/pjax.js' type="text/javascript"></script>
  <script src="assets/js/plugins/popper.min.js"></script>
  <script src="assets/js/plugins/waypoint.js"></script>
  <script src="assets/js/plugins/bootstrap.min.js"></script>
  <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/plugins/jquery.slimScroll.min.js"></script>
  <script src="assets/js/plugins/imagesloaded.min.js"></script>
  <script src="assets/js/plugins/jquery.steps.min.js"></script>
  <script src="assets/js/plugins/jquery.countdown.min.js"></script>
  <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
  <script src="assets/js/plugins/slick.min.js"></script>
  
  <!-- Slices Scripts -->
  <script src="assets/js/main.js"></script>
  <script>
    var TRANSITION_DURATION = 600;
   var pjax = new Pjax({
        selectors: [    
          "title",
          "meta-description"      
          ".main-header",
          "#pjax-container",          
        ]
      })

      $(document).on('pjax:send', function() {
        $('.ct-preloader').removeClass('hidden');
      })
      $(document).on('pjax:success', function() {
        $('.ct-preloader').addClass('hidden');        
      });   
  </script>

</body>
</html>
