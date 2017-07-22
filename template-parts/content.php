<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fox_Eye
 */

?>

<!--
   blog-headder-section-start   	  
======================================= -->
<div class="full-blog close-effect">
		<div class="blog-img">
			<?php the_post_thumbnail('fox-eye-blog-and-single'); ?> 
		</div>
		<div class="all-blog"> 
			<div class="bloge-text">
				<h4><a href="#"><?php the_title(); ?></a></h4>
			</div>
			<ul class="blog-icon">
				<li><a><i class="flaticon-calendar" aria-hidden="true"></i><?php fox_eye_posted_on(); ?></a></li>
				<li><a href="#"><i class="flaticon-opened-eye
				Author: Freepik" aria-hidden="true"></i><?php echo fox_eye_post_views(get_the_ID()); ?></a></li>
			</ul>
			<p><?php the_content(); ?></p>
		</div>
		<div class="tag-site">
			<?php fox_eye_entry_footer(); ?>
			 <?php fox_eye_social_share( get_theID ); ?>
		</div>
</div> 

		
 
<!--
   blog-headder-section-end   	  
======================================= -->