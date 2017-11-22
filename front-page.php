<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="google-map">
        <?php the_field('coverage_map_code'); ?>
      </div>
      <div class="coverage-content">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </main>
<?php get_footer(); ?>