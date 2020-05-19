<?php


function barfootCustomFiles(){
	wp_enqueue_script('barfootJavascript', get_theme_file_uri('/minified/scripts.min.js'), NULL, '1.0', true);
	wp_enqueue_script('jQuery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_style('customGoogleFonts', 'https://fonts.googleapis.com/css?family=Kanit:800|Roboto:400,800&display=swap');
	wp_enqueue_style('barfootMainStyles', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'barfootCustomFiles');

function create_portfolio() {

	$arg = array(
      'labels' => array(
        'name' => __( 'Portfolio Items' ),
        'singular_name' => __( 'Portfolio Item' ),
        'menu_name' => __('Portfolio Items')
      ),
      'public' => true,
      'show_in_nav_menus' => true,
      'menu_icon' => 'dashicons-format-image'
    );

  register_post_type( 'portfolio', $arg);
}
add_action( 'init', 'create_portfolio' );