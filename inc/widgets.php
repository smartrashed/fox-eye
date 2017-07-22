<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @package body-builder
 * @author CodexCoder
 *
 */

function fox_eye_widget_init() {

	register_sidebar( array(
		'name'			=> esc_html__( 'Right Sidebar', 'fox-eye' ),
		'id'			=> 'fox-eye-right-widget',
		'description'	=> esc_html__( 'Add widget here to customize the Right Sidebar', 'fox-eye' ),
		'before_widget'	=> '<div class="%2$s" id="%1$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<div class="heading"><h4>',
		'after_title'	=> '</h4></div>'
	) );
	
	register_sidebar( array(
		'name'			=> esc_html__( 'Newsletter Sidebar', 'fox-eye' ),
		'id'			=> 'fox-eye-newsletter-widget',
		'description'	=> esc_html__( 'Add widget here to customize mailpoet-newsletter', 'fox-eye' ),
		'before_widget'	=> '',
		'after_widget'	=> '',
	) );
	
	register_sidebar( array(
		'name'			=> esc_html__( 'Footer Sidebar', 'fox-eye' ),
		'id'			=> 'fox-eye-footer-widget',
		'description'	=> esc_html__( 'Add widget here to customize the footer', 'fox-eye' ),
		'before_widget'	=> '<div class="col-md-3 col-sm-6 col-xs-12"><div class="full-blog-inf">',
		'after_widget'	=> '</div></div>',
		'before_title'	=> '<div class="all-blog-inform"><h4>',
		'after_title'	=> '</h4></div>'
	) );

	

}

add_action( 'widgets_init', 'fox_eye_widget_init' );

