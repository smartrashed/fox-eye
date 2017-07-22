<?php
/**
 * The template for displaying one page content.
 * Team Section
 * @package fox-eye
 */ 
 	$fy_team_title = '';
 	$fy_team_description = '';
 	$fy_team_post_limit = '';
 	$section_bg = '';
  
if (function_exists('cs_get_option')):
	
    $section_bg = cs_get_option('unique_option_3008');
    $fy_team_title = cs_get_option('fy_team_title');
    $fy_team_description = cs_get_option('fy_team_description');
    $post_limit = cs_get_option('fy_team_post_limit');
   

endif;

?>
<!--
our-team-section-start       	  
======================================= -->
<div class="our-team" id="team" <?php if (!empty($section_bg)): echo 'style="background:'.esc_attr($section_bg).'"'; endif; ?>>
	<div class="all-heading">
		<?php if(!empty($fy_team_title)): ?>
			<h2><?php echo esc_html($fy_team_title); ?></h2>
		<?php endif; ?>
		<div class="heading-icon">
			<span class="plus"></span>
		</div>   
		<?php if(!empty($fy_team_description)): ?>
			<p><?php echo esc_html($fy_team_description); ?></p>
		<?php endif; ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="for-minus-margin">
					<?php  $team_info = new Wp_Query(array(
			          'post_type'=>'team',
			          'posts_per_page' => $post_limit
			        ));
			 
			  while ($team_info->have_posts()): $team_info->the_post();
			  $option_meta_data = get_post_meta( get_the_ID(), '_fy_custom_team_options', true );

			
			  $fy_team_designation = $option_meta_data['fy_team_designation'];
			  $social_profiles = $option_meta_data['social_profiles'];

			 ?>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="all-our-team">
						<div class="our-team-top">
						<?php if(has_post_thumbnail()): ?>
							<div class="team-img">
								<?php the_post_thumbnail('fox-eye-team'); ?>
							</div> 
						<?php endif; ?>	
							<h4><?php the_title(); ?></h4>
							<p><?php echo esc_html($fy_team_designation); ?></p>
						</div> 
						<div class="team-link">
							<ul>
							<?php foreach ($social_profiles as $social): ?> 

								<li><a href="<?php echo esc_url($social['fy_social_link']); ?>"><i class="<?php echo esc_attr($social['fy_social_icon']); ?>" aria-hidden="true"></i></a>
								</li>
							<?php endforeach; ?>	
							</ul>
						</div>
					</div>
				</div>
		<?php endwhile; wp_reset_postdata();  ?>		
				
			</div>
		</div>
	</div>
</div>
<!--
our-team-section-end       	  
======================================= -->