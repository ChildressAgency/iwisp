<?php get_header(); ?>
  <main class="redirect-main">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
      <a href="<?php the_field('reactivate_account_link'); ?>" class="btn-reactivate"><?php the_field('reactivate_account_link_text'); ?></a>
    </div>
  </main>
<?php get_footer(); ?>