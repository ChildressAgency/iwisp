<?php get_header(); ?>
<main id="main">
  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <hr />
      <article class="blog-post">
        <?php
          if(has_post_thumbnail()){
            the_post_thumbnail('full', array('class' => 'img-responsive center-block'));
          }
        ?>
        <div class="post-header">
          <h1><?php the_title(); ?></h1>
          <h4><?php echo get_the_date('F j, Y'); ?></h4>
        </div>
        <?php the_content(); ?>
      </article>
    <?php endwhile; endif; wp_pagenavi(); ?>
  </div>
</main>
<?php get_footer(); ?>