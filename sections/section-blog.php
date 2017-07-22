<?php
/**
 * The template for displaying one page content.
 * blog Section
 * @package fox-eye
 */ 
 	$fy_blog_title = '';
 	$fy_blog_description = '';
 	$post_limit = '';
 	$section_bg = '';
 	$fy_blog_more = '';
  
if (function_exists('cs_get_option')):
	
    $section_bg = cs_get_option('unique_option_3010');
    $fy_blog_title = cs_get_option('fy_blog_title');
    $fy_blog_description = cs_get_option('fy_blog_description');
    $post_limit = cs_get_option('fy_blog_post_limit');
    $fy_blog_more = cs_get_option('fy_blog_more');
   

endif;

?>
<!--our-blog-post-start   	  
		======================================= -->
<div class="blog-section" id="blog" <?php if (!empty($section_bg)): echo 'style="background:'.esc_attr($section_bg).'"'; endif; ?>>
	<div class="all-heading">
		<?php if(!empty($fy_blog_title)): ?>
			<h2><?php echo esc_html($fy_blog_title); ?></h2>
		<?php endif; ?>
		<div class="heading-icon">
			<span class="plus"></span>
		</div>  
		<?php if(!empty($fy_blog_description)): ?>
			<p><?php echo esc_html($fy_blog_description); ?></p>
		<?php endif; ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="for-minus-margin">

			<?php  $blog_info = new Wp_Query(array(
	          'order'     => 'decending',
              'posts_per_page' => $post_limit,
              'ignore_sticky_posts' => true
	        ));
 				$i = 1 ;
 				 while ($blog_info->have_posts()): $blog_info->the_post(); 	?>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="full-blog">
					<?php if(has_post_thumbnail()): ?>	
						<div class="blog-img">
							<?php the_post_thumbnail(''); ?>
						</div>
					<?php endif; ?>	
						<div class="all-blog"> 
							<div class="bloge-text">
								<h4><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h4>
							</div>
							<ul class="blog-icon">
								<li><a><i class="flaticon-calendar" aria-hidden="true"></i><?php fox_eye_posted_on(); ?></a></li>
							</ul>
							<p><?php echo wp_trim_words( get_the_content(), 28, false ); ?></p>
						</div>
						<div class="blog-bottom-site"> 
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
							<a href="#"><?php fox_eye_authors_post();  ?></a>
							<div class="blog-comments">
								<span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
						<sup class="coments-five"><?php echo get_comments_number();  ?></sup> 
							</div> 
						</div>
					</div>
				</div>
				<?php if($i % 2 == 0): ?>
							<div class="clearfix"></div>	
						<?php endif; ?>	
			<?php $i++ ; endwhile; wp_reset_postdata(); ?>
				
				<div class="button">
					<a href="<?php echo esc_url($fy_blog_more); ?>" class="healp-button"><?php echo esc_html__('More Blog','fox-eye') ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--
  our-blog-post-end	  
======================================= -->
