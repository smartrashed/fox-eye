<?php
/**
 * Template for displaying search forms in Fox Eye
 *
 * @package WordPress
 * @subpackage fox-eye
 * @since 1.0
 * @version 1.0
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id="<?php echo $unique_id; ?>"  placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'fox-eye' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<span><i class="fa fa-search"></i></span>
</form>
