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
            <a href="<?php the_field('make_payment_link', 'option'); ?>" class="payment-link">Make A Payment</a>
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
                  <a href="<?php the_field('make_payment_link', 'option'); ?>" class="payment-link">Make A Payment</a>
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

            function iwisp_fallback_header_menu(){ ?>
              <ul class="nav nav-justified">
                <li<?php if(is_front_page()){ echo ' class="active"'; } ?>><a href="<?php echo home_url(); ?>">Home</a></li>
                <li<?php if(is_page('about')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('about'); ?>">About</a></li>
                <li<?php if(is_page('pricing')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('pricing'); ?>">Pricing</a></li>
                <li<?php if(is_page('contact')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
                <li<?php if(is_home()){ echo ' class="active"'; } ?>><a href="<?php echo home_url('blog'); ?>">Blog</a></li>
                <li<?php if(is_page('support')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('support'); ?>">Support</a></li>
              </ul>
          <?php } ?>
        </div>
      </div>
    </nav>
    <div class="slogan">
      <h1>Hi-Speed Internet Service<br />No Limits!</h1>
    </div>
    <section id="hero" class="hp-hero" style="background-image:url(images/mountains.jpg); background-position:center center;">
      <div class="container">
        <div class="hero-caption">
          <h2>Providing Hi-Speed Internet Service Where Others Have Failed.</h2>
          <h3>What is a WiSP or wireless internet service provider?</h3>
          <a href="#" class="btn-clear">Learn how you can get hi-speed internet now</a>
          <p>PC World says WiSPs are the future of internet service</p>
          <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
        </div>
      </div>
    </section>
  <?php endif; ?>