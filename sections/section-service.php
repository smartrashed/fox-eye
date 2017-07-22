<?php
/**
 * The template for displaying one page content.
 * Service Section
 * @package fox-eye
 */ 
 	$fy_service_title = '';
    $fy_service_sub_title = '';
    $fy_service = '';
    
if (function_exists('cs_get_option')):
	
    
    $section_bg = cs_get_option('unique_option_3006');
    $fy_service_title = cs_get_option('fy_service_title');
    $fy_service_sub_title = cs_get_option('fy_service_sub_title');
    $fy_services = cs_get_option('fy_services');
 
endif;
?>
<!--
		best-sirvice-start        	  
		======================================= -->
		<div class="sirvice" id="sirvice" <?php if (!empty($section_bg)): echo 'style="background:'.esc_attr($section_bg).'"'; endif; ?>>
			<div class="all-heading">
				<?php if(!empty($fy_service_title)): ?>
					<h2><?php echo  esc_html($fy_service_title); ?></h2>
				<?php endif; ?>
				<div class="heading-icon">
					<span class="plus"></span>
				</div>   
				<?php if(!empty($fy_service_su_title)): ?>
				<p><?php echo esc_html($fy_service_sub_title) ?></p>
				<?php endif; ?>
			</div> 
			<div class="container">
				<div class="row">
					<div class="for-minus-margin">
					<?php 	$i = 1; ?>
					<?php foreach ($fy_services as $service) :  
						$image = wp_get_attachment_url($service['service_image']);
					?>
						<div class="col-md-4 col-sm-6 col-xs-12"> 
							<div class="best-sirvice">
								<div class="all-sirvice">
									<div class="sirvice-flat color1">
										<img src="<?php echo esc_url($image); ?>">
									</div>
									<h5><?php echo esc_html($service['service_title']); ?></h5>
									<p><?php echo esc_html($service['srvice_description']); ?></p>
								</div>
							</div> 
						</div>
						<?php if($i % 3 == 0): ?>
							<div class="clearfix"></div>	
						<?php endif; ?>	
						
					<?php  $i++ ; endforeach ; ?>	
						
						
					</div>
				</div>
			</div> 
		</div>  
		<!--
		best-sirvice-end        	  
		======================================= -->	
