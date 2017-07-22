<?php
/**
 * The template for displaying one page content.
 * blog Section
 * @package fox-eye
 */ 
 	$fy_contact_title = '';
 	$fy_contact_description = '';
 	$section_bg = '';
 	$fy_contact_page = '';
 
  
if (function_exists('cs_get_option')):
	
    $section_bg = cs_get_option('unique_option_3015');
    $fy_contact_title = cs_get_option('fy_contact_title');
    $fy_contact_description = cs_get_option('fy_contact_description');
    $fy_contact_page = cs_get_option('fy_contact_page');
   

endif;

?>
<!--    form-section-start  ======================================= -->
<div class="form-section" id="contact" <?php if (!empty($section_bg)): echo 'style="background:'.esc_attr($section_bg).'"'; endif; ?>>
	<div class="all-heading">
		<?php if(!empty($fy_contact_title)): ?>
			<h2><?php echo esc_html($fy_contact_title); ?></h2>
		<?php endif; ?>
		<div class="heading-icon">
			<span class="plus"></span>
		</div>  
		<?php if(!empty($fy_contact_description)): ?>
			<p><?php echo esc_html($fy_contact_description); ?></p>
		<?php endif; ?>
	</div>
	<div class="container">
		<div class="row">
			<?php echo do_shortcode($fy_contact_page) ;?>
		</div>
	</div> 
</div>
<!--    form-section-End  ======================================= -->