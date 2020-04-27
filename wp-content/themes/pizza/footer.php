<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pizza
 */

?>

</div><!-- Pjax Container -->

<!-- Footer Start -->
<footer class="ct-footer footer-dark">
    <!-- Top Footer -->
    <div class="container">
      <div class="footer-top mb-0">
        <div class="">
          <?php 
            $id = get_theme_mod('footer_logo');

                if ($id != 0) {
                    $url = wp_get_attachment_url($id);                    
                    echo '<img src="' . $url . '" alt="" />';                    
                }
            ?>
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
            <p>
                <?php				
				    printf( esc_html__( 'Theme: %1$s by %2$s.', 'pizza' ), 'pizza', '<a href="https://www.freelancer.com/u/wsfreelanzer">Wsfreelanzer</a>' );
                ?>
            </p>
          <a href="#" class="back-to-top">Back to top <i class="fas fa-chevron-up"></i> </a>
        </div>
      </div>
    </div>

  </footer>
  <!-- Footer End -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
