  <footer>
    <div class="container">
      <?php if(is_page('redirect')): ?>
        <?php get_template_part('partials/social', 'section'); ?>
        <div class="contact-info">
          <span><?php the_field('address', 'option'); ?>, <?php the_field('city_state_zip', 'option'); ?></span>
          <span><?php the_field('phone', 'option'); ?></span>
          <span><?php the_field('email', 'option'); ?></span>
        </div>
        <p class="redirect-copyright">Copyright &copy;<?php echo date('Y'); ?> &nbsp;&nbsp;&nbsp;Website created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
      <?php else: ?>
        <div class="row">
          <div class="col-sm-4">

          </div>
          <div class="col-sm-4 col-sm-push-4">
            <a href="<?php echo home_url('faq'); ?>" class="faq-link">Frequently Asked Questions</a>
            <?php if(get_field('google_plus_reviews_link')): ?>
              <a href="<?php the_field('google_plus_reviews_link'); ?>" class="google-plus-review-link">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/google-plus-review-badge.jpg" class="img-responsive center-block" alt="Google Plus Review Badge" />
              </a>
            <?php endif; ?>
          </div>
          <div class="col-sm-4 col-sm-pull-4">
            <div class="copyright">
              <p>Copyright <?php echo date('Y'); ?></p>
              <p>Website created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>