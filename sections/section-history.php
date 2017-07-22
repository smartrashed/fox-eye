<?php
/**
 * The template for displaying one page content.
 * Template Name: One Page Template
 * @package fox-eye
 */ 
 	$history_title = 		'';
    $history_subtitle =		'';
   
    $history_category = 	'';

if (function_exists('cs_get_option')):
	
    $section_bg = cs_get_option('unique_option_3004');
    $history_title = cs_get_option('history_title');
    $history_subtitle = cs_get_option('history_subtitle');
    $history_category = cs_get_option('history_category');

  
   
endif;
?>
<!--
company-history start         	  
======================================= --> 
<div class="company-history" <?php if (!empty($section_bg)): echo 'style="background:'.esc_attr($section_bg).'"'; endif; ?>>
	<div class="container">
		<div class="row">
			<div class="for-minus-margin">
				<div class="col-md-6 col-sm-12 col-xs-12"> 
					<div class="row"> 
						<div class="compny-title">
							<h2><?php echo esc_html($history_title); ?></h2>
							<p class="title-p"><?php echo esc_html($history_subtitle); ?></p>
							<p><?php echo esc_html($history_description); ?></p>
							<a href="<?php echo esc_url($history_readmore); ?>" class="company-btn">Readmore</a>
							<a href="<?php echo esc_html($history_pricing); ?>" class="company-btn com-help-btn">Pricing</a>
						</div> 
					</div>
				</div>

				<div class="col-md-6 col-sm-12 col-xs-12"> 
					<div class="row"> 

					<?php foreach ($history_category as $key => $category) : ?>
						<div class="all-parcent">
							<div class="disign-parcent">
								<a><?php echo esc_html($category['category_title']); ?></a>
								<span class="pull-right"><?php echo esc_html($category['category_progress']); ?>%</span>
							</div>
							<div class="progress"> 
							  <div class="progress-bar progress-bar-<?php echo $category['progress_color'];  ?> progress-bar-striped wow slideInLeft"  data-wow-duration="2s" data-wow-delay="0s" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_html($category['category_progress']); ?>%">
								<span class="sr-only"><?php echo esc_html($category['category_progress']); ?>%</span>
							  </div>
							</div> 
						</div> 
					<?php endforeach; ?>	
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--
company-history end         	  
======================================= -->