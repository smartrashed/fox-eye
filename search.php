<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
									<header class="page-header">
										<h1 class="page-title"><?php
											/* translators: %s: search query. */
											printf( esc_html__( 'Search Results for: %s', 'fox-eye' ), '<span>' . get_search_query() . '</span>' );
										?></h1>
									</header><!-- .page-header -->

								<?php
								endif;

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'search' );

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
