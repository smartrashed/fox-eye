<?php
/**
 * The template for displaying one page content.
 * blog Section
 * @package fox-eye
 */ 
 	$fy_map_title = '';
 	$fy_map_icon = '';
 	$fy_map_latitude = '';
 	$fy_map_longitude = '';
 	$fy_map_zoom = '';
 
  
if (function_exists('cs_get_option')):
	
    $fy_map_title = cs_get_option('fy_map_title');
    $image = cs_get_option('fy_map_icon');
    $fy_map_icon = wp_get_attachment_url($image);
    $fy_map_latitude = cs_get_option('fy_map_latitude');
    $fy_map_longitude = cs_get_option('fy_map_longitude');
    $fy_map_zoom = cs_get_option('fy_map_zoom');
   

endif;

?>

<!--
google-map-section-start	  
======================================= --> 
 
<div id="map" data-map-title="<?php echo esc_attr( $fy_map_title ); ?>"  data-map-icon="<?php echo esc_url( $fy_map_icon ); ?>" data-map-latitute="<?php echo esc_html( $fy_map_latitude ); ?>" data-map-longitude="<?php echo esc_html( $fy_map_longitude ); ?>" data-map-zoom="<?php echo esc_html( $fy_map_zoom ); ?>" >
</div> 
