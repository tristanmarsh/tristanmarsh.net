<?php

function tristanmarsh_scripts() {
  // Load bootstrap framework
  // wp_enqueue_style( 'bootstrap-core', get_template_directory_uri() . '/resources/css/bootstrap.min.css' );

  // Load main theme stylesheet
  wp_enqueue_style( 'tristanmarsh-style', get_stylesheet_uri() );

  // Additional Elements
  // wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri() . '/resources/css/animate.min.css' );

  // Load jQuery (already registered)
  wp_enqueue_script('jquery');

  // Load jQuery (already registered)
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/resources/js/min/bootstrap.min.js');

  // Load main theme script
  wp_enqueue_script( 'core', get_template_directory_uri() . '/resources/js/core.js', array(), false );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

}

add_action('wp_enqueue_scripts', 'tristanmarsh_scripts');


?>