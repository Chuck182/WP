<?php

function universal_college_themes_styles_scripts() {
	
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);


	wp_enqueue_style( 'style.min.css', get_template_directory_uri() . '/assets/css/style.min.css' );

	wp_enqueue_script( 'script.min.js', get_template_directory_uri() . '/assets/js/script.min.js', array(), '1.0.0', true );

	wp_register_script('slick', get_template_directory_uri() .'/assets/js/includes/slick.min.js');
  	wp_enqueue_script('slick');

	wp_enqueue_style('fancybox','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array(), wp_get_theme()->get('Version'));
}

function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/assets/js/includes/bootstrap.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap5.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

add_action( 'wp_enqueue_scripts', 'universal_college_themes_styles_scripts' );


show_admin_bar(false);

add_theme_support('post-thumbnails');

add_theme_support( 'menus' );

// Theme Support
function wpb_theme_setup(){
	// Nav Menus
	register_nav_menus(array(
	'navbar' => __('navbar Menu', 'wpbootstrap')
	));
	}
	
	add_action('after_setup_theme','wpb_theme_setup'); 

// Register Nav Walker class_alias
require_once('inc/class-wp-bootstrap-navwalker.php');


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}



function blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'blog' ),
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'blog_widgets_init' );


