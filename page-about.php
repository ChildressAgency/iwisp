<?php get_header(); ?>
  <div class="slideshow">
    <?php echo do_shortcode(get_field('slideshow_shortcode')); ?>
  </div>
  <section id="aboutIntro">
    <div class="container">
      <?php the_field('about_page_intro'); ?>
    </div>
  </section>
  <main id="main">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
      <div class="clearfix"></div>
      <?php if(have_rows('staff')): ?>
        <div id="meetStaff" class="carousel slide" data-ride="">
          <h2>MEET OUR STAFF</h2>
          <div class="carousel-inner" role="listbox">
            <?php $i=0; while(have_rows('staff')): the_row(); ?>
              <div class="item<?php if($i==0){ echo ' active'; } ?>">
                <div class="row">
                  <div class="col-sm-3">
                    <img src="<?php the_sub_field('staff_member_image'); ?>" class="img-responsive center-block img-circle" alt="" />
                  </div>
                  <div class="col-sm-9">
                    <h4><?php the_sub_field('staff_member_name'); ?>, <?php the_sub_field('staff_member_title'); ?></h4>
                    <?php the_sub_field('staff_member_bio'); ?>
                  </div>
                </div>
              </div>
            <?php $i++; endwhile; ?>
          </div>

          <a href="#meetStaff" class="left carousel-control" role="button" data-slide="prev">
            <span class="fa fa-caret-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a href="#meetStaff" class="right carousel-control" role="button" data-slide="next">
            <span class="fa fa-caret-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      <?php endif; ?>
    </div>
  </main>
<?php get_footer(); ?>