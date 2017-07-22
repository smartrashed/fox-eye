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
			
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="full-blog">
						<div class="blog-img">
							<?php the_post_thumbnail('fox-eye-blog-and-single'); ?> 
						</div>
						<div class="all-blog"> 
							<div class="bloge-text">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
				
<!--
   blog-headder-section-end   	  
======================================= -->