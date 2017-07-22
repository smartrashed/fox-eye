<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fox_Eye
 */

get_header(); ?>
<!--
   blog-headder-section-start   	  
======================================= -->
<div class="header-page">
	<div class="container">
		<div class="ror">
			<div class="header-content">
				 <h2>our latest blog</h2>
				<ul class="breadcrumb">
					<li>Home</li>
					<li class="active">blog page</li>
				</ul>
			</div>
		</div>
	</div>
</div>
 

<!--
   blog-headder-section-end   	  
======================================= -->

<div class="all-blog-drama">
	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div><!-- #row -->
			<?php get_sidebar(); ?>
		</div><!-- #col-md-8 -->
		
	</div>
</div> 
<?php get_footer();
