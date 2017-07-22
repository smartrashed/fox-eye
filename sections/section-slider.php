<?php
/**
 * Template part for displaying page content in section-slider.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fox_Eye
 */
	$fy_slider_image ='';
    $slider_subtitle = '';
    $slider_description = '';
    $slider_images = '';
    $slider_image = '';
    
if (function_exists('cs_get_option')):
	$fy_slider_image = cs_get_option('fy_slider_image');
    
endif;

?>

<!--
slider section start         	  
======================================= -->
<div class="slider-section"> 
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">

		<?php $i = 1 ; ?>
		<?php foreach ($fy_slider_image as $slider_content): ?>
			<?php  $image = wp_get_attachment_url($slider_content['slider_image']); ?>
			<div class="item <?php echo ( $i == 1 ) ? esc_attr( 'active' ) : ''; ?>">
				
				<img src="<?php echo esc_url($image); ?>" alt="...">
				<div class="slider-overlay"></div>
				<div class="slider-text slide1">
					<h2><?php echo esc_html($slider_content['slider_title']); ?></h2>
					<h1><?php echo esc_html($slider_content['slider_subtitle']); ?></h1>
					<p><?php echo esc_html ($slider_content['slider_description']); ?></p>
					<a href="#" class="slider-btn">read more</a>
					<a href="#" class="slider-btn">get starte</a>
				</div>

			</div>

		<?php $i++; endforeach ; ?>
				
		</div>

		  <!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
			<span class="sr-only">Next</span>
		</a>
	</div>  
</div>

<!--
slider section end         	  
======================================= --> 