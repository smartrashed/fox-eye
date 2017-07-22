<?php
/**
 * The template for displaying one page content.
 * Template Name: One Page Template
 * @package fox-eye
 */

get_header(); ?>
<?php 


// Get Enabled Sections
if(function_exists('cs_get_option')) :
$sections_settings = cs_get_option('fox_eye_sections_sorter');
endif;



if( !empty($sections_settings ) && array_key_exists('enabled', $sections_settings) ) {
    $sections = $sections_settings['enabled'];
    while( current( $sections ) ) {
        get_template_part('sections/section', key($sections)); 
        next( $sections );
    }
}

?>

<?php get_footer(); ?>