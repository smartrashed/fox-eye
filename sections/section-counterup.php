<?php
/**
 * The template for displaying one page content.
 * Counter Up Section
 * @package fox-eye
 */ 
 	$fy_counter = '';
 	$section_bg = '';
  
if (function_exists('cs_get_option')):
	
    $section_bg = cs_get_option('counter_section_bg');
    $image = wp_get_attachment_url($section_bg);
    $fy_counter = cs_get_option('fy_counter');
   

endif;
?>

<!--
counter-up-start         	  
======================================= -->
<div class="counter-up" <?php if (!empty($image)): echo 'style="background-image:url('.esc_url($image).')"'; endif; ?>>
	<div class="overlay-counterup">
		<div class="container">
			<div class="row">
				<div class="for-minus-margin">
				<?php $i = 1; ?>	
				<?php foreach ($fy_counter as $counter) :
					$image= wp_get_attachment_url($counter['counter_image']); 
				 ?>	
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="row">
							<div class="counter-eliment">
								<div class="counter-flat">
									<img src="<?php echo $image; ?>">
								</div> 
								<span class="counter coun<?php echo $i; ?>"><?php echo $counter['counter_count'] ?></span>
								<h4><?php echo $counter['counter_title'] ?></h4>
							</div>
						</div>
					</div>
				<?php $i++ ; endforeach; ?>	
					
				</div>
			</div>
		</div>
	</div>
</div>

<!--
counter-up-end         	  
======================================= -->   