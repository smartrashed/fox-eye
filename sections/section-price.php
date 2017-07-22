<?php
/**
 * The template for displaying one page content.
 * Counter Up Section
 * @package fox-eye
 */ 
 	$fy_price_title = '';
 	$fy_price_description = '';
 	$fy_price_post_limit = '';
 	$section_bg = '';
  
if (function_exists('cs_get_option')):
	
    $section_bg = cs_get_option('unique_option_3007');

    $fy_price_title = cs_get_option('fy_price_title');
    $fy_price_description = cs_get_option('fy_price_description');
    $post_limit = cs_get_option('fy_price_post_limit');
   

endif;

?>
<!--
prising-section-start        	  
======================================= -->
<div class="prising-section" <?php if (!empty($section_bg)): echo 'style="background:'.esc_attr($section_bg).'"'; endif; ?>>
	<div class="all-heading">
		<h2><?php echo esc_html($fy_price_title); ?></h2>
		<div class="heading-icon">
			<span class="plus"></span>
		</div>   
		<p><?php echo esc_html($fy_price_description);  ?></p>
	</div>
	<div class="container">
		<div class="row">
			<div class="for-minus-margin">
				
			<?php  $price_info = new Wp_Query(array(
			          'post_type'=>'pricing_table',
			          'posts_per_page' => $post_limit
			        ));
			 
			  while ($price_info->have_posts()): $price_info->the_post();
			  $option_meta_data = get_post_meta( get_the_ID(), '_fy_custom_pricing_table_options', true );

			
			  $pricing_rate = $option_meta_data['pricing_rate'];
			  $offers = $option_meta_data['offers'];

			 ?>
				<div class="col-md-4 clo-sm-6 col-xs-12"> 
					<div class="all-prising-table">
						<div class="prising-top">
							<p><?php echo the_title(); ?><span><sup>$</sup><?php echo esc_html($pricing_rate); ?></span></p>
						</div>
						<ul class="prising-text">
							<?php foreach ($offers as $offer):  ?>
							<li>
								<span><i class="<?php echo esc_attr($offer['et_offer_icon']); ?>" aria-hidden="true"></i></span> 
								<?php echo esc_html($offer['offer_title']); ?>
							</li>
							<?php endforeach; ?>
							
						</ul>
						<div class="prising-btn">
							<a href="#">pricing now</a>
						</div>
					</div> 
				</div>
				<?php endwhile;  wp_reset_postdata(); ?>
				
			</div>
		</div>
	</div>
</div>	
<!--
prising-section-end        	  
======================================= -->