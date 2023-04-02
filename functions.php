<?php

/**
* mkhbremen functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package mkhbremen
*/

if ( ! function_exists( 'mkhbremen_setup' ) ) :

/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*/

    function mkhbremen_setup() {

        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
	    add_theme_support( 'title-tag' );

        /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */

	    add_theme_support( 'post-thumbnails' );

    	// This theme uses wp_nav_menu() in one location.
    	register_nav_menus( array(
    		'primary' => esc_html__( 'Primary', 'mkhbremen' ),
    		'topbar' => esc_html__( 'Topbar', 'mkhbremen' ),
    		'footer' => esc_html__( 'Footer', 'mkhbremen' )
    	));
    }

endif;

add_action( 'after_setup_theme', 'mkhbremen_setup' );

/**
* Enqueue scripts and styles.
*/

function mkhbremen_scripts() {
	wp_enqueue_style( 'mkhbremen-style', get_stylesheet_uri() );
    wp_enqueue_style( 'mkhbremen-main-style', get_template_directory_uri() . '/css/style.css', array(), null );
		wp_enqueue_style( 'mkhbremen-main-style', get_template_directory_uri() . '/css/slick.css', array(), null );

	wp_enqueue_script( 'mkhbremen-jquery-js', get_template_directory_uri() . '/js/jquery.js', array(), null, true );
	wp_enqueue_script( 'mkhbremen-slick-js', get_template_directory_uri() . '/js/slick.js', array(), null, true );
	wp_enqueue_script( 'mkhbremen-main-js', get_template_directory_uri() . '/js/main.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'mkhbremen_scripts' );
function add_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}


function vince_check_active_menu( $menu_item ) {
    $actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ( $actual_link == $menu_item->url ) {
        return 'active';
    }
    return '';
}

add_filter('navbar-nav' , 'special_nav_class' , 10 , 2);
add_filter('upload_mimes', 'add_mime_types');
define('ALLOW_UNFILTERED_UPLOADS', true); 