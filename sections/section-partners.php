<?php
/**
 * The template for displaying one page content.
 * blog Section
 * @package fox-eye
 */ 
 	$fy_partner_title = '';
 	$fy_partner_description = '';
 	$post_limit = '';
 	$section_bg = '';

  
if (function_exists('cs_get_option')):
	
    $section_bg = cs_get_option('unique_option_3001');
    $fy_partner_title = cs_get_option('fy_partner_title');
    $fy_partner_description = cs_get_option('fy_partner_description');
    $fy_partners = cs_get_option('fy_partners');
   

endif;

?>
<!--
  all-pattern-start	  
======================================= -->
<div class="all-pattern" <?php if (!empty($section_bg)): echo 'style="background:'.esc_attr($section_bg).'"'; endif; ?>>
	<div class="all-heading">
		<?php if(!empty($fy_partner_title)): ?>
			<h2><?php echo esc_html($fy_partner_title); ?></h2>
		<?php endif; ?>
		<div class="heading-icon">
			<span class="plus"></span>
		</div>  
		<?php if(!empty($fy_partner_description)): ?> 
			<p><?php echo  esc_html($fy_partner_description);  ?></p>
		<?php endif; ?>
	</div>
	<div class="container">
		<div class="swiper-container2">
			<div class="swiper-wrapper">
			<?php foreach ($fy_partners as $fy_partner): 
				$image= wp_get_attachment_url($fy_partner['partner_image']); ?>
				<div class="swiper-slide">				
					<div class="our-pattarn">
						<img src="<?php echo esc_url($image); ?>" alt=""/>
					</div>
				</div>
				<?php endforeach; ?>
			</div> 
		</div>
	</div>
</div>
<!--
 all-pattern-end	  
======================================= -->
