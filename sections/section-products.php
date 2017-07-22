<?php
/**
 * The template for displaying one page content.
 * Counter Up Section
 * @package fox-eye
 */ 
 	$fy_shop_title = '';
 	$fy_shop_description = '';
 	$fy_product_limit = '';
 	$section_bg = '';
  
if (function_exists('cs_get_option')):
	
    $section_bg = cs_get_option('unique_option_3010');

    $fy_shop_title = cs_get_option('fy_shop_title');
    $fy_shop_description = cs_get_option('fy_shop_description');
    $fy_product_limit = cs_get_option('fy_product_limit');
   

endif;

?>
<!--
		   produc-section-start   	  
		======================================= -->
		<div class="produc-section" id="shop" <?php if (!empty($section_bg)): echo 'style="background:'.esc_attr($section_bg).'"'; endif; ?>>
			<div class="all-heading">
			<?php if(!empty(fy_shop_title)): ?>
				<h2><?php echo esc_html($fy_shop_title); ?></h2>
			<?php endif; ?>	
				<div class="heading-icon">
					<span class="plus"></span>
				</div>   
				<?php if(!empty($fy_shop_description)): ?>
				<p><?php echo esc_html($fy_shop_description); ?></p>
			<?php endif; ?>
			</div>
			<div class="container">
				<div class="row">
					<div class="for-minus-margin">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="all-produc">
								<div class="produc-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/produc-1.jpg" alt="">
									<div class="produc-overlay">
										<div class="produc-border"></div>
									</div>
									<div class="produc-popup">
										<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
										<a href="#"></a>
										<a href="<?php echo get_template_directory_uri(); ?>/assets/images/produc-1.jpg" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
									</div>
								</div>
								<div class="produc-text"> 
									<h5><a href="#">Product Text Here</a></h5> 
									<p>$150.00</p>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="all-produc">
								<div class="produc-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/produc-02.jpg" alt="">
									<div class="produc-overlay">
										<div class="produc-border"></div>
									</div>
									<div class="produc-popup">
										<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
										<a href="<?php echo get_template_directory_uri(); ?>/assets/images/produc-02.jpg" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
									</div>
								</div>
								<div class="produc-text"> 
									<h5><a href="#">Product Text Here</a></h5> 
									<p>$150.00</p>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="all-produc">
								<div class="produc-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/produc-2.jpg" alt="">
									<div class="produc-overlay">
										<div class="produc-border"></div>
									</div>
									<div class="produc-popup">
										<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
										<a href="<?php echo get_template_directory_uri(); ?>/assets/images/produc-2.jpg" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
									</div>
								</div>
								<div class="produc-text"> 
									<h5><a href="#">Product Text Here</a></h5> 
									<p>$150.00</p>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="all-produc">
								<div class="produc-img">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/produc-3.jpg" alt="">
									<div class="produc-overlay">
										<div class="produc-border"></div>
									</div>
									<div class="produc-popup">
										<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
										<a href="images/produc-3.jpg" data-rel="lightcase"><i class="fa fa-search" aria-hidden="true"></i></a>
									</div>
								</div>
								<div class="produc-text"> 
									<h5><a href="#">Product Text Here</a></h5> 
									<p>$150.00</p>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
									 <i class="fa fa-star" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--
		  produc-section-end	  
		======================================= -->