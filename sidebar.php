<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fox_Eye
 */

if ( ! is_active_sidebar( 'fox-eye-right-widget' ) ) {
	return;
}
?>

<div class="col-md-4">
	<?php dynamic_sidebar( 'fox-eye-right-widget' ); ?>
</div>


