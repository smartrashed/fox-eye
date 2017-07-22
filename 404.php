<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package body-builder
 */

get_header(); ?>

		<section class="section">
			<div class="container">
				<div class="page-not-found">
					<h1><?php echo esc_html__( '404', 'body-builder' ); ?></h1>
					<h2> <?php echo esc_html__( 'Oops, This Page Not Be Found! ' , 'body-builder'); ?></h2>
					<h3><?php echo esc_html__('We are really sorry but the page you requested is missing','fox-eye' ); ?></h3>
					<a href="<?php echo esc_url( home_url( ) ); ?>" class="button"><?php echo esc_html__('Go Back Home','body-builder' ); ?></a>
				</div>
			</div>
		</section>

<?php
get_footer();
