<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
      
      <?php if(have_rows('faqs')): ?>
        <div id="faqs" class="panel-group" role="tablist" aria-multiselectable="true">
          <?php $i=1; while(have_rows('faqs')): the_row(); ?>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
                <h3 class="panel-title">
                  <a href="#panel<?php echo $i; ?>" class="collapsed" role="button" data-toggle="collapse" data-parent="#faqs" aria-expanded="true" aria-controls="panel<?php echo $i; ?>">
                    <?php the_sub_field('question'); ?> <i class="fa fa-caret-up"></i>
                  </a>
                </h3>
              </div>
              <div id="panel<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                <div class="panel-body">
                  <?php the_sub_field('answer'); ?>
                </div>
              </div>
            </div>

          <?php $i++; endwhile; ?>
        </div>
      <?php endif; ?>

      <?php the_field('after_faqs_content'); ?>
    </div>
  </main>
<?php get_footer(); ?>