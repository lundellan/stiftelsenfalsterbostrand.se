<?php
	
function load_stylesheets()	{
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('style');
	wp_register_style('fonts', get_template_directory_uri() . '/fonts.css', array(), false, 'all');
	wp_enqueue_style('fonts');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function loadjs()	{
	/* wp_register_script('templatejs', get_template_directory_uri() . '/js/validate.min.js', '', 1, true);
	wp_enqueue_script('templatejs'); */
	wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
	wp_enqueue_script('customjs');
	
}
add_action('wp_enqueue_scripts', 'loadjs');

if ( !function_exists( 'yourtheme_setup' ) ) {
    function yourtheme_setup() {
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
    }

    add_action( 'after_setup_theme', 'yourtheme_setup' );
}

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'contact_form',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);


