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

  <div class="head animated fadeInDown">

    <div class="container">
      
      <div class="row">
    
        <div class="brand col-sm-5">
          <img src="<?php echo get_stylesheet_directory_uri() . '/resources/images/logo/logo-light-transparent.svg' ?>" alt="TM" class="logo" />
          <span>
            <a href="#" class="name">Tristan Marsh</a>
            <p>front end developer</p>
          </span>
        </div>

        <nav class="col-sm-8">
          <ul>
            <li><a href="#">about</a></li>
            <li><a href="#">portfolio</a></li>
            <li><a href="#">services</a></li>
            <li><a href="#">contact</a></li>
          </ul>
        </nav>

      </div>
      
    </div>
  </div>

  <body <?php body_class(); ?>>