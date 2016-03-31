<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
  <!-- WP_HEAD_HOOK -->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <header class="head animated fadeInDown">

      <div class="container">
        
        <div class="row">
      
          <div class="brand col-sm-5">
            <a href="<?php echo bloginfo('url'); ?>#section-hero">
              <img src="<?php echo get_stylesheet_directory_uri() . '/resources/images/logo/logo-light-transparent.svg' ?>" alt="TM" class="logo" />
            </a>
            <span>
              <a href="<?php echo bloginfo('url'); ?>#section-hero" class="name">Tristan Marsh</a>
              <p>front end developer</p>
            </span>
          </div>

          <nav class="col-sm-8 hidden-xs">
            <ul>
              <li><a href="<?php echo bloginfo('url'); ?>/#section-intro">about</a></li>
              <li><a href="<?php echo bloginfo('url'); ?>/#section-portfolio">portfolio</a></li>
              <li><a href="<?php echo bloginfo('url'); ?>/#section-expertise">services</a></li>
              <li><a href="<?php echo bloginfo('url'); ?>#section-call-to-action">contact</a></li>
            </ul>
          </nav>

        </div>
        
      </div>
    </header>

