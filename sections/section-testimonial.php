<?php
/**
 * The template for displaying one page content.
 * Testimonial section
 * @package fox-eye
 */ 
 	$fy_testimonial_title = '';
 	$fy_testimonial_description = '';
 	$fy_testimonial_post_limit = '';
 	$section_bg = '';
  
if (function_exists('cs_get_option')):
	
    $section_bg = cs_get_option('unique_option_3009');
    $fy_testimonial_title = cs_get_option('fy_testimonial_title');
    $fy_testimonial_description = cs_get_option('fy_testimonial_description');
    $post_limit = cs_get_option('fy_testimonial_post_limit');
   

endif;

?>
<!--
		   swipper-section-start   	  
		======================================= -->
		<div class="swipper-section" <?php if (!empty($section_bg)): echo 'style="background:'.esc_attr($section_bg).'"'; endif; ?>>
			<div class="swipper-overlay">
				<div class="all-heading swipper-heading">
					<?php if(!empty($fy_testimonial_title)): ?>
					<h2><?php echo esc_html($fy_testimonial_title); ?></h2>
					<?php endif; ?>
					<div class="heading-icon">
						<span class="plus"></span>
					</div>  
					<?php if(!empty($fy_testimonial_description)): ?>
					<p><?php echo esc_html($fy_testimonial_description); ?></p>
					<?php endif; ?>
				</div>
					 <!-- Swiper -->
				<div class="container">
					<div class="row">
						<div class="swiper-container">
							<div class="swiper-wrapper">
							<?php  $testimonial_info = new Wp_Query(array(
							          'post_type'=>'testimonial',
							          'posts_per_page' => $post_limit
							        ));
							 
							  while ($testimonial_info->have_posts()): $testimonial_info->the_post();
							  $option_meta_data = get_post_meta( get_the_ID(), '_fy_custom_testimonial_options', true );

							
							  $fy_testimonial_designation = $option_meta_data['fy_testimonial_designation'];
							  

			 				?>
								<div class="swiper-slide">
									<div class="clints-text">
										<?php the_content(); ?>
										<div class="left-clint-text">
											<h6><?php the_title(); ?></h6>
											<span><?php echo esc_html($fy_testimonial_designation); ?></span>
										</div>
										
									</div>
									<?php if(has_post_thumbnail()): ?>
										<div class="clint-img">
											<?php the_post_thumbnail('fox-eye-testimonial'); ?>
										</div>
									<?php endif; ?>
								</div>
							<?php endwhile; wp_reset_postdata(); ?>	
								
							</div>  
						</div>
					</div>
				</div> 
			</div>
		</div>
		<!--
		  swipper-section-end	  
		======================================= -->