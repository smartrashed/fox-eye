<?php
/**
 * The template for displaying one page content.
 * About Section
 * @package fox-eye
 */ 
 	$section_bg = '';
 	$fy_about = '';
    $about_title = '';
    $about_description = '';
    
if (function_exists('cs_get_option')):
	
    $section_bg = cs_get_option('unique_option_3003');

    $fy_about = cs_get_option('fy_about');
 
endif;
?>
<!--
facility section start         	  
======================================= --> 
<div class="facility-for-design" id="about" <?php if (!empty($section_bg)): echo 'style="background:'.esc_attr($section_bg).'"'; endif; ?>>
	<div class="container">
		<div class="row">
		<?php $i= 1 ?>
		<?php foreach ($fy_about as $about): 
				$about_image= wp_get_attachment_url($about['about_image']);
		 ?>
			
			<div class="col-md-3 col-sm-6 col-xs-12"> 
				<div class="design">
					<div class="flat facility-<?php echo $i; ?>">
						<img src="<?php echo $about_image; ?>" alt="...">
					</div>
					<div class="facility-text">
						<h5><?php echo esc_html($about['about_title']); ?></h5>
						<p><?php echo esc_html($about['about_description']); ?></p>
					</div> 
				</div> 
			</div>
			
		<?php $i++; endforeach ; ?>	

		
			
		</div>
	</div>
</div>

<!--
facility section start         	  
======================================= -->