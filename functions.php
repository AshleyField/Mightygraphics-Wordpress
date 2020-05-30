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

function mytheme_customize_register($wp_customize){
  $wp_customize->add_section( 'section_customisations' , array(
    'title'      => 'Theme Settings',
    'priority'   => 30,
  ));

  $wp_customize->add_setting('white_logo', array(
    'default' => get_bloginfo('template_directory').'/images/logo.png',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Upload_Control( $wp_customize, 'white_logo_control', 
    array(
      'label'      => 'White Logo Image',
      'section'    => 'section_customisations',
      'settings'   => 'white_logo',
    )) 
  );

  $wp_customize->add_setting('black_logo', array(
    'default' => get_bloginfo('template_directory').'/images/logo-white.png',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Upload_Control( $wp_customize, 'black_logo_control', 
    array(
      'label'      => 'Black Logo Image',
      'section'    => 'section_customisations',
      'settings'   => 'black_logo',
    )) 
  );

  $wp_customize->add_setting( 'facebook_link', array(
    'capability' => 'edit_theme_options'
  ));

  $wp_customize->add_control( 'facebook_link_control', array(
     'type' => 'text',
     'section' => 'section_customisations', // Add a default or your own section
     'label' => __( 'Facebook Link' ),
      'description' => __( 'Enter Facebook Link'),
      'settings'   => 'facebook_link',
    ));

    $wp_customize->add_setting( 'linkedin_link', array(
      'capability' => 'edit_theme_options'
    ));
  
    $wp_customize->add_control( 'linkedin_link_control', array(
       'type' => 'text',
       'section' => 'section_customisations', // Add a default or your own section
       'label' => __( 'Linked In Link' ),
        'description' => __( 'Enter Linked In Link'),
        'settings'   => 'linkedin_link',
      ));

      $wp_customize->add_setting( 'github_link', array(
        'capability' => 'edit_theme_options'
      ));
    
      $wp_customize->add_control( 'github_link_control', array(
         'type' => 'text',
         'section' => 'section_customisations', // Add a default or your own section
         'label' => __( 'GitHub Link' ),
          'description' => __( 'Enter GitHub Link'),
          'settings'   => 'github_link',
        ));

}

add_action('customize_register', 'mytheme_customize_register');