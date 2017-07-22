<?php
/**
 * The template for displaying one page content.
 * Portfolio Section
 * @package fox-eye
 */ 
 	$fy_latest = '';
    $fy_latest_works_title = '';
    $fy_latest_works_sub_title = '';
if (function_exists('cs_get_option')):
	
    $section_bg = cs_get_option('unique_option_3005');
    $fy_latest = cs_get_option('fy_latest');
    $fy_latest_works_title = cs_get_option('fy_latest_works_title');
    $fy_latest_works_sub_title = cs_get_option('fy_latest_works_sub_title');
 
endif;
?>
<!--
masonary-our-work-start        	  
======================================= -->
<div class="our-works" id="portfolio" <?php if (!empty($section_bg)): echo 'style="background:'.esc_attr($section_bg).'"'; endif; ?>>
	<div class="all-heading">
		<?php if(!empty($fy_latest_works_title)): ?>
			<h2><?php echo $fy_latest_works_title; ?></h2>
		<?php endif; ?>
		<div class="heading-icon">
			<span class="plus"></span>
		</div>  
		<?php if(!empty($fy_latest_works_sub_title)): ?>
			<p><?php echo $fy_latest_works_sub_title; ?></p>
		<?php endif; ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="latest-works"> 
				<div class="grid">
				<?php 
					$i  = 1;
					foreach ($fy_latest as  $portfolio) : 
					$image = wp_get_attachment_url($portfolio['portfolio_image']);
				?>
				  <div class="grid-item <?php echo ( $i == 1 ) ? esc_attr( 'grid-item--width2' ) : ''; ?> ">
					<img src="<?php echo $image;   ?>" alt=""/>
					<div class="overlay-masonary"></div>
					<div class="overlay-text overlayhelper-text">
						<i class="fa fa-film" aria-hidden="true"></i>
						<h5><?php echo $portfolio['portfolio_title']  ?></h5>
						<p><?php echo esc_html('Project By:','fox-eye'); ?> <?php echo $portfolio['portfolio_title']  ?></p>
					</div>
				  </div>
				 <?php $i++ ; endforeach; ?> 		 
				</div> 
			</div>
			<div class="masonary">
				<a href="#" class="healp-button">load all works</a>
			</div>  
		</div>
	</div>
</div>

<!--
masonary-our-work-end        	  
======================================= --> 