<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php if(have_posts()): ?>
        <article>
          <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </article>
      <?php endif; ?>
      <div class="price-comparisons container-sm-height">
        <div class="row row-sm-height">
          <div id="payOption1" class="col-sm-4 col-sm-height">
            <div class="tier">
              <div class="tier-header">
                <h2>Mail</h2>
              </div>
              <div class="tier-subheader">
                <p>Mail your payment to<br /><span><?php the_field('payment_address'); ?><br /><?php the_field('payment_city_state_zip'); ?></span></p>
              </div>
              <div class="tier-body">
                <p><?php the_field('mail_payment_note'); ?></p>
              </div>
            </div>
          </div>
          <div id="payOption2" class="col-sm-4 col-sm-height">
            <div class="tier">
              <div class="tier-header">
                <h2>Pay Now</h2>
              </div>
              <div class="tier-subheader">
                <h3><a href="<?php the_field('pay_now_link'); ?>"><?php the_field('pay_now_link_text'); ?></a></h3>
              </div>
              <div class="tier-body">
                <p><?php the_field('pay_now_note'); ?></p>
              </div>
            </div>
          </div>
          <div id="payOption3" class="col-sm-4 col-sm-height">
            <div class="tier">
              <div class="tier-header">
                <h2>Pay Pal</h2>
              </div>
              <div class="tier-subheader">
                <a href="<?php the_field('paypal_link'); ?>">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/paypal-button.png" class="btn-paypal" alt="" />
                </a>
              </div>
              <div class="tier-body">

              </div>
            </div>
          </div>
        </div>
      </div>
      <?php the_field('after_payment_cards_content'); ?>
    </div>
  </main>
<?php get_footer(); ?>