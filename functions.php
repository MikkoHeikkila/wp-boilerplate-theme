<?php
//Add thumbnail, automatic feed links and title tag support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );

//Add content width (desktop default)
if ( ! isset( $content_width ) ) {
	$content_width = 768;
}

//Add menu support and register main menu
if ( function_exists( 'register_nav_menus' ) ) {
  	register_nav_menus(
  		array(
  		  'main_menu' => 'Main Menu'
  		)
  	);
}


/**
 * Load site scripts.
 */
function theme_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// jQuery.
	wp_enqueue_script( 'jquery' );

	//Fancybox
	wp_enqueue_script( 'fancy-script', $template_url . '/js/fancybox-master/jquery.fancybox.min.js', array( 'jquery' ), null, true );
	wp_enqueue_style( 'fancy-style',  $template_url . '/js/fancybox-master/jquery.fancybox.min.css' );

	//Main Style
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

	//Main script
	wp_enqueue_script( 'main-script', $template_url . '/js/main.js', array( 'jquery' ), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts', 1 );

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-svg-icons.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

?>