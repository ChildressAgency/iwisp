<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <?php echo do_shortcode(get_field('contact_form_shortcode', 'option')); ?>
        </div>
        <div class="col-sm-6 col-md-5 col-md-offset-1">
          <div class="contact-info">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; endif; ?>
            <p><strong>Billing and Accounts</strong><br />Call: <?php the_field('billing_and_accounts_phone', 'option'); ?><br />Email: <?php the_field('billing_and_accounts_email', 'option'); ?><br />Text: <?php the_field('billing_and_accounts_text', 'option'); ?></p>
            <p><strong>Customer Service</strong><br />Call: <?php the_field('customer_service_phone', 'option'); ?><br />Email: <?php the_field('customer_service_email', 'option'); ?><br />Text: <?php the_field('customer_service_text', 'option'); ?></p>
            <p><strong>Technical Support</strong><br />Call: <?php the_field('technical_support_phone', 'option'); ?><br />Email: <?php the_field('technical_support_email', 'option'); ?><br />Text: <?php the_field('technical_support_text', 'option'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer();