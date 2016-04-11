<?php

function tristanmarsh_scripts() {
  // Load bootstrap framework
  // wp_enqueue_style( 'bootstrap-core', get_template_directory_uri() . '/resources/css/bootstrap.min.css' );

  // Load main theme stylesheet
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/resources/css/bootstrap.min.css' );
  wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'tristanmarsh-css', get_stylesheet_uri() );

  // Additional Elements
  // wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri() . '/resources/css/animate.min.css' );

  // Load jQuery (already registered)
  wp_enqueue_script('jquery');

    // Load main theme script
  wp_enqueue_script( 'tristanmarsh-js', get_template_directory_uri() . '/resources/js/min/core-min.js', array(), false );

  // Load Bootstrap
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/resources/js/min/bootstrap.min.js', true);

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

}

add_action('wp_enqueue_scripts', 'tristanmarsh_scripts');


function tristanmarsh_widgets() {

  register_sidebar( array(
      'name'            => 'Contact Call To Action',
      'id'              => 'contact_call_to_action',
      'before_widget'   => '<div>',
      'after_widget'    => '</div>',
      'before_title'    => '<h2>',
      'after_title'     => '</h2>',
    ) );

}
add_action('widgets_init', 'tristanmarsh_widgets');

?>