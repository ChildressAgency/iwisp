<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>iWiSP</title>

  <?php wp_head(); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
  <?php if(is_page('redirect')): ?>
    <header>
      <div class="container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block" alt="" />
      </div>
    </header>
  <?php else: ?>
    <div class="masthead hidden-xs">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-5">
            <div class="contact-info">
              <span><?php the_field('address', 'option'); ?>, <?php the_field('city_state_zip', 'option'); ?></span>
              <span><?php the_field('phone', 'option'); ?></span>
              <span><?php the_field('email', 'option'); ?></span>
            </div>
          </div>
          <div class="col-sm-5">
            <a href="<?php echo home_url('payment'); ?>" class="payment-link">Make A Payment</a>
            <a href="<?php echo home_url('contact'); ?>" class="contact-link">Contact Us Now</a>
          </div>
          <div class="col-sm-2">
            <?php get_template_part('partials/social', 'section'); ?>
          </div>
        </div>
      </div>
    </div>
    <nav id="header-nav" class="navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="<?php echo home_url(); ?>" class="header-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block" alt="iWiSP Logo" /></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-controls="navbar">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <div class="masthead visible-xs-block">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-5">
                  <div class="contact-info">
                    <span><?php the_field('address', 'option'); ?>, <?php the_field('city_state_zip', 'option'); ?></span>
                    <span><?php the_field('phone', 'option'); ?></span>
                    <span><?php the_field('email', 'option'); ?></span>
                  </div>
                </div>
                <div class="col-sm-5">
                  <a href="<?php echo home_url('payment'); ?>" class="payment-link">Make A Payment</a>
                  <a href="<?php echo home_url('contact'); ?>" class="contact-link">Contact Us Now</a>
                </div>
                <div class="col-sm-2">
                  <?php get_template_part('partials/social', 'section'); ?>
                </div>
              </div>
            </div>
          </div>
          <?php 
            $header_nav_args = array(
              'theme_location' => 'header-nav',
              'container' => '',
              'container_class' => '',
              'container_id' => '',
              'menu' => '',
              'menu_class' => 'nav nav-justified',
              'menu_id' => '',
              'echo' => true,
              'fallback_cb' => 'iwisp_fallback_header_menu',
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth' => 2,
              'walker' => new wp_bootstrap_navwalker()
            );
            wp_nav_menu($header_nav_args);
          ?>
        </div>
      </div>
    </nav>
    <?php if(is_front_page()): ?>

      <div class="slogan">
        <h1><?php the_field('slogan'); ?></h1>
      </div>
      <?php
        $hero_image = get_stylesheet_directory_uri() . '/images/mountains.jpg';
        $hero_image_css = 'background-position:center center;';
        if(get_field('hero_image')){
          $hero_image = get_field('hero_image');
          $hero_image_css = get_field('hero_image_css');
        }
      ?>
      <section id="hero" class="hp-hero" style="background-image:url(<?php echo $hero_image; ?>); <?php echo $hero_image_css; ?>">
        <div class="container">
          <div class="hero-caption">
            <?php if(get_field('hero_caption_title')): ?>
              <h2><?php the_field('hero_caption_title'); ?></h2>
            <?php endif; if(get_field('hero_caption_subtitle')): ?>
              <h3><?php the_field('hero_caption_subtitle'); ?></h3>
            <?php endif; if(get_field('hero_caption_link')): ?>
              <a href="<?php the_field('hero_caption_link'); ?>" class="btn-clear"><?php the_field('hero_caption_link_text'); ?></a>
            <?php endif; if(get_field('hero_caption_below_link')): ?>
              <p><?php the_field('hero_caption_below_link'); ?></p>
            <?php endif; if(get_field('hero_caption_read_more_link')): ?>
              <a href="<?php the_field('hero_caption_read_more_link'); ?>" class="read-more">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
            <?php endif; ?>
          </div>
        </div>
      </section>

    <?php else: //not front_page ?>

      <?php if(get_field('hero_image')): ?>
        <section id="hero" class="hero" style="background-image:url(<?php the_field('hero_image'); ?>); <?php the_field('hero_image_css'); ?>"></section>
      <?php endif; ?>

      <?php if(get_field('page_title')): ?>
        <div class="page-title">
          <div class="container">
            <?php if(is_page('contact')): ?>
              <div class="row">
                <div class="col-sm-3">
                  <p><a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a></p>
                </div>
                <div class="col-sm-6">
                  <p><?php the_field('address', 'option'); ?>, <?php the_field('city_state_zip', 'option'); ?></p>
                </div>
                <div class="col-sm-3">
                  <p><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
                </div>
              </div>
            <?php else: //not contact_page ?>
              <h1><?php the_field('page_title'); ?></h1>
            <?php endif; //contact_page ?>
          </div>
        </div>
      <?php endif; //page_title ?>

    <?php endif; //front_page ?>
  <?php endif; //redirect_page ?>