<?php
add_action( 'wp_enqueue_scripts', 'default_theme_enqueue_scripts' );
function default_theme_enqueue_scripts() {
  wp_enqueue_style( '_s-style', get_stylesheet_uri() );

  wp_enqueue_script( 'core', get_stylesheet_directory_uri() . '/core.js', array('jquery'), 1, false );

  if (defined('LIVERELOAD')) {
    wp_enqueue_script( 'livereload', 'http://localhost:35729/livereload.js', array('jquery'), 1, false );
  }
}
