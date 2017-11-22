<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="search-filter">
        <?php
          $cats = get_categories(array('orderby' => 'name', 'order' =>'ASC'));
          if(!empty($cats)): ?>
            <div class="filter">
              <div class="dropdown">
                <a href="#" id="filter" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Filter <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="filter">
                  <li><a href="<?php echo home_url('blog'); ?>">Show All</a></li>
                  <?php foreach($cats as $cat): ?>
                    <li><a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo esc_html($cat->name); ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
        <?php endif; ?>

        <div class="search">
          <?php get_search_form(); ?>
        </div>
      </div>
      <div class="clearfix"></div>
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

        <?php if(comments_open()){ comments_template(); } ?>

      <?php endwhile; endif; wp_pagenavi(); ?>
    </div>
  </main>
<?php get_footer(); ?>