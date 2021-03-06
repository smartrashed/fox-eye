<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
					<div class="row"> 

							<?php
							if ( have_posts() ) :

								if ( is_home() && ! is_front_page() ) : ?>
									<header>
										<?php the_archive_title( '<h1 class="page-title">', '</h1>' );
					                          the_archive_description( '<div class="archive-description">', '</div>' ); ?>
									</header>

								<?php
								endif;

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'blog' );

								endwhile;

								fox_eye_numeric_pagination() ; 

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>

						</div>
				</div>
	<!-- Blog Sidebar -->   
			<?php get_sidebar(); ?>
	
	<!-- Siderbar End-->
		</div> 
	</div>
</div>

<?php get_footer(); ?>
