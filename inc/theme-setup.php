<?php
/**
 * Fox Eye functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fox_Eye
 */

if ( ! function_exists( 'fox_eye_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fox_eye_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Fox Eye, use a find and replace
	 * to change 'fox-eye' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'fox-eye', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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

	/**********   Blog  ***********/
	add_image_size( 'fox-eye-blog-and-single', 572, 373, true );
	add_image_size( 'fox-eye-blog-footer', 43, 43, true );
	add_image_size( 'fox-eye-latest-blog-footer', 72, 73, true );
	add_image_size( 'fox-eye-latest-blog-sidebar', 85, 85, true );
	add_image_size( 'fox-eye-gallery-sidebar-footer', 84, 84, true );

	/**********   Page  ***********/
	add_image_size( 'fox-eye-logo', 213, 45, true );
	add_image_size( 'fox-eye-slider', 1920, 800, true );
	add_image_size( 'fox-eye-team', 350, 350, true );
	add_image_size( 'fox-eye-testimonial', 86, 86, true );
	add_image_size( 'fox-eye-product', 272, 303, true );
	add_image_size( 'fox-eye-partners', 270, 120, true );
	/*********Masonery **********/
	add_image_size( 'fox-eye-masonary-large', 385, 506, true );
	add_image_size( 'fox-eye-masonary-large', 385, 250, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary-menu' => esc_html__( 'Primary Menu', 'fox-eye' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'fox_eye_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'fox_eye_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fox_eye_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fox_eye_content_width', 640 );
}
add_action( 'after_setup_theme', 'fox_eye_content_width', 0 );


