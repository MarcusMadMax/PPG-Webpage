    <footer>
      <img class="cover-top" src="<?php echo get_template_directory_uri()?>/assets/img/backgrounds/footer-background-dark.svg" alt="">
      <div class="footer-content">
        <div class="footer-content-top">
          <div class="footer-address">
            <div class="footer-mail footer-contact">
              <i class="far fa-envelope"></i>
              <a href="mailto:info@parnellpartnersgroup.com">info@parnellpartnersgroup.com</a>
            </div>
            <div class="footer-phone footer-contact">
              <i class="fas fa-mobile-alt"></i>
              <a href="tel:09 30 4 0036">+64 9 30 4 0036</a>
            </div>
          </div>
          <div class="footer-social">
            <a href="https://www.facebook.com/parnellpartnersgroup/" target="_blank"><i
                class="fab fa-facebook"></i></a>
            <a href="https://nz.linkedin.com/company/parnell-partners-group" target="_blank"><i
                class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="footer-links">
            <?php 
                wp_nav_menu( array( 
                'theme_location' => 'main-menu',
                'container' => 'ul',
                'menu_class' => 'nav-links'
                ));
            ?>
        </div>
      </div>
      <div class="color"></div>
    </footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/assets/js/mixitup.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/assets/js/main.js"></script>

  <?php wp_footer()?>
</body>

</html>