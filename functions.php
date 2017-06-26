<?php


function enqueue_bootstrap() {
  wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );

 // Ces deux lignes ne sont utiles que si vous utilisez les fonctionnalites JavaScript
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );




function bpc_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'bpc_custom_new_menu' );
