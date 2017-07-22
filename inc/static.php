<?php 
/**
 * Enqueue all theme scripts and styles
 *
 * @package fox-eye
 * @author CodexCoder
 */

/**
 * Enqueue scripts and styles.
 */


function fox_eye_scripts() {

    wp_enqueue_style('body-builder-stylesheet', get_stylesheet_uri());
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,600,700|Raleway:400,500,600,700,800' );  
    wp_enqueue_style('bootstrapp', FOXEYE_ASSETS . '/css/bootstrap.min.css');
    wp_enqueue_style('flaticon', FOXEYE_ASSETS . '/flat-ic/flaticon.css');
    wp_enqueue_style('font-awesome', FOXEYE_ASSETS . '/css/font-awesome.min.css');
    wp_enqueue_style('lightcase', FOXEYE_ASSETS . '/css/lightcase.css');
    wp_enqueue_style('swiper', FOXEYE_ASSETS . '/css/swiper.min.css');
    wp_enqueue_style('reset-css', FOXEYE_ASSETS . '/css/wp-reset.css');
    wp_enqueue_style('body-builder-style', FOXEYE_ASSETS . '/css/style.css');
    wp_enqueue_style('body-builder-responsive', FOXEYE_ASSETS . '/css/responsive.css');  
         

    
    wp_enqueue_script('bootstrap', FOXEYE_ASSETS . '/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('masonary', FOXEYE_ASSETS . '/js/masonary.js', array('jquery'), false, true);
    wp_enqueue_script('swiper', FOXEYE_ASSETS . '/js/swiper.min.js', array('jquery'), false, true);
    wp_enqueue_script('lightcase', FOXEYE_ASSETS . '/js/lightcase.js', array('jquery'), false, true);
    wp_enqueue_script('cloud-fair', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery') ,false, true);
    wp_enqueue_script('counterup', FOXEYE_ASSETS . '/js/jquery.counterup.min.js', array('jquery'), '1.0.0', false, true);
    wp_enqueue_script('lightcase', FOXEYE_ASSETS . '/js/lightcase.js', array('jquery'), false, true);
    wp_enqueue_script('wow', FOXEYE_ASSETS . '/js/wow.min.js', array('jquery'), false, true);
    wp_enqueue_script('easing', FOXEYE_ASSETS . '/js/jquery.easing.min.js', array('jquery'), false, true);
    wp_enqueue_script('scrolling-nav', FOXEYE_ASSETS . '/js/scrolling-nav.js', array('jquery'), false, true);

    

    
       wp_enqueue_script('mainfile', FOXEYE_ASSETS . '/js/mainfile.js', array('jquery'), false, true);
}

add_action( 'wp_enqueue_scripts', 'fox_eye_scripts', 90);



    //Google Map

if( ! function_exists( 'fox_eye_gmap_init' ) ) :
    function fox_eye_gmap_init() {
        $gmap_api = cs_get_option( 'fox_eye_gmap_api' );
        
        wp_enqueue_script('fox-eye-map-custom', FOXEYE_ASSETS . '/js/custom-map.js', array('jquery'), false, true);
        wp_enqueue_script( 'gmaps-api', 'http://maps.google.com/maps/api/js?key='.$gmap_api, null, null, true );
        
    }
endif;

if (function_exists('cs_get_option')):
    $gmap_api = cs_get_option( 'fox_eye_gmap_api' );
    if(!empty($gmap_api)) :
       add_action( 'wp_enqueue_scripts', 'fox_eye_gmap_init', 90 );
    endif;
endif;



