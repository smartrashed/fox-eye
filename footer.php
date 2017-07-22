<?php 
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fox_Eye
 */
$footer_info = '';
$fy_footer_socials_icons = '';

if (function_exists('cs_get_option')):
    
    $footer_info = cs_get_option('footer_info');
    $fy_footer_socials_icons = cs_get_option('fy_footer_socials_icons');
    
    
endif;

if ( ! is_active_sidebar( 'fox-eye-footer-widget' ) ) {
  return;
}

?>

	<!--
   scroll-to-top-section-start   	  
======================================= -->
<div class="scroll-to-top">
	<div class="scrollup">
		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</div>
</div>

<!--
   scroll-to-top-section-end   	  
======================================= -->


<!--
   footer-section-start   	  
======================================= -->
<div class="footer-section">
	<div class="container">
		<div class="row">
			<div class="for-minus-margin">
				<?php dynamic_sidebar( 'fox-eye-footer-widget' ); ?> 
			</div>
		</div>
	</div>
</div>
<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="bottom-left-site">
			<?php if(!empty($footer_info)): ?>
				<p><?php echo  wp_kses_post($footer_info); ?></p>
			<?php endif; ?>	
			</div>
			<div class="bottom-right-site">
			<?php if(!empty($fy_footer_socials_icons)): ?>
				<ul>
					<?php foreach ($fy_footer_socials_icons as $footer_social): ?>

					<li><a href="<?php echo esc_url($footer_social['link']); ?>"><i class="<?php echo esc_attr($footer_social['icon']); ?>" aria-hidden="true"></i></a></li>

					<?php endforeach; ?>
				</ul>
			<?php endif; ?>	
			</div>
		</div>
	</div>
</div>
<!--
  footer-section-end	  
======================================= -->
	
		
<?php wp_footer(); ?>

</body>
</html>
