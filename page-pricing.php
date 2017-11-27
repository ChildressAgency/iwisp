<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
      <div class="price-comparisons container-sm-height">
        <div class="row row-sm-height">
          <div id="tier1" class="col-sm-4 col-sm-height">
            <div class="tier">
              <div class="tier-header">
                <h2><?php the_field('pricing_card_1_title'); ?></h2>
              </div>
              <div class="tier-subheader">
                <h3><?php the_field('pricing_card_1_price'); ?><span><?php the_field('pricing_card_1_price_subtext'); ?></span></h3>
              </div>
              <div class="tier-body">
                <?php the_field('pricing_card_1_content'); ?>
                <a href="<?php the_field('pricing_card_1_sign_up_now_link'); ?>" class="btn-main">Sign Up Now</a>
              </div>
            </div>
          </div>
          <div id="tier2" class="col-sm-4 col-sm-height">
            <div class="tier">
              <div class="tier-header">
                <h2><?php the_field('pricing_card_2_title'); ?></h2>
              </div>
              <div class="tier-subheader">
                <h3><?php the_field('pricing_card_2_price'); ?><span><?php the_field('pricing_card_2_price_subtext'); ?></span></h3>
              </div>
              <div class="tier-body">
                <?php the_field('pricing_card_2_content'); ?>
                <a href="<?php the_field('pricing_card_2_sign_up_now_link'); ?>" class="btn-main">Sign Up Now</a>
              </div>
            </div>
          </div>
          <div id="tier3" class="col-sm-4 col-sm-height">
            <div class="tier">
              <div class="tier-header">
                <h2><?php the_field('pricing_card_3_title'); ?></h2>
              </div>
              <div class="tier-subheader">
                <h3><?php the_field('pricing_card_3_price'); ?><span><?php the_field('pricing_card_3_price_subtext'); ?></span></h3>
              </div>
              <div class="tier-body">
                <?php the_field('pricing_card_3_content'); ?>
                <a href"<?php the_field('pricing_card_3_sign_up_now_link') ?>" class="btn-main">Sign Up Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php the_field('after_pricing_cards_content'); ?>
    </div>
  </main>
<?php get_footer(); ?>