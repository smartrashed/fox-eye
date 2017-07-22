<?php
/**
 * The template for displaying one page content.
 * About Section
 * @package fox-eye
 */ 
 	$section_bg = '';
    $newsletter_title = '';
    $newsletter_description = '';
    
if (function_exists('cs_get_option')):
	
    $section_bg = cs_get_option('section_bg');
 	$image = wp_get_attachment_url($section_bg);
    $newsletter_title = cs_get_option('fy_newsletter_title');
    $newsletter_description = cs_get_option('fy_newsletter_description');
 
endif;

if ( ! is_active_sidebar( 'fox-eye-newsletter-widget' ) ) {
  return;
}
?>
<!--
   newsletter-section-start   	  
======================================= -->
<div class="newsletter-section"  <?php if (!empty($image)): echo 'style="background-image:url('.esc_url($image).')"'; endif; ?>> 
	<div class="newslatter-overlay">
		<div class="all-heading swipper-heading">
			<?php if(!empty($newsletter_title)): ?>
				<h2><?php echo esc_html($newsletter_title); ?></h2>
			<?php endif; ?>	
			<div class="heading-icon">
				<span class="plus"></span>
			</div> 
			<?php if(!empty($newsletter_description)): ?>
				<p><?php echo esc_html($newsletter_description); ?></p>
			<?php endif; ?>	
		</div>
		<div class="container">
			<div class="row">
				 <?php dynamic_sidebar('fox-eye-newsletter-widget'); ?>
			</div>
		</div>
	</div> 
</div>
<!--
   newsletter-section-end   	  
======================================= -->	