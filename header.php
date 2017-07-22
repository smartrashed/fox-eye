<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fox_Eye
 */
$et_social_icons = '';
$et_copyright_text_author = '';
$et_logo = '';
if (function_exists('cs_get_option')):
    $fy_site_logo = cs_get_option( 'fy_site_logo' );
    $fy_logo = wp_get_attachment_url($fy_site_logo);
    $fy_time = cs_get_option('fy_time');
    $fy_contact = cs_get_option('fy_contact');
    $fy_address = cs_get_option('fy_address');
    $fy_socials_icons = cs_get_option('fy_socials_icons');
    
    
endif;
?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!--
header section start         	  
======================================= -->
<!-- preloder -->
<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_one"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_three"></div>

</div>
</div>
 
</div>
<header>
	<div class="top-header">
		<div class="container">  
			<div class="header-top-site-text"> 
				<ul>
					<li>
					<?php if(!empty($fy_time)): ?>
						<i class="flaticon-time-left" aria-hidden="true"></i>
						<span>Time : <?php echo esc_html($fy_time); ?></span>
					<?php endif; ?>
					</li>
					<li>
					<?php if(!empty($fy_contact)): ?>
						<i class="flaticon-phone-call" aria-hidden="true"></i>
						<span>Phone : <?php echo esc_html($fy_contact); ?></span>
					<?php endif; ?>
					</li>
					<li>
					<?php if(!empty($fy_address)): ?>
						<i class="flaticon-placeholder" aria-hidden="true"></i>
						<span>Address :  <?php echo esc_html($fy_address); ?></span>
					<?php endif; ?>
					</li>
				</ul>
			</div>
			<div class="header-top-site-icon">
			<?php if(!empty($fy_socials_icons)): ?>
				<ul>
					<?php foreach ($fy_socials_icons as $social_icon) :  ?>
						
						<li><a href="<?php  echo esc_url($social_icon['link']); ?>"><i class="<?php echo esc_attr($social_icon['icon']); ?>" aria-hidden="true"></i></a></li>
						
					<?php endforeach ; ?>
				</ul>
			<?php endif; ?>	
			</div>  
		</div>
	</div> 
	<!-- /.for-menu -->
	<div id="for-menu-fixed">
		<div class="container">
			<div class="row"> 
				<div class="header-bottom-site">  
					<nav class="navbar navbar-default"> 
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
					
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <?php if(!empty($fy_logo)): ?>
						  <a class="for-logo" href="<?php bloginfo('home') ?>"><img src="<?php echo esc_url($fy_logo); ?>" alt=""></a>
						<?php endif; ?>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
						   
						<!-- /.right-site -->
							<div class="shopping-all">
								<form action="#" method="post">
									<div class="all-search">
										<a class="search-clas"><i class="fa fa-search" aria-hidden="true"></i></a>  
									</div> 
								</form>
							</div> 
							<div class="search-box">
								<input type="search" name="search" placeholder="Search......"/>
								<a class="search-close"><i class="fa fa-close" aria-hidden="true"></i></a>
							</div>
							<!-- <ul class="nav navbar-nav navbar-right"> 
								<li><a class="page-scroll" href="index.html #page-top">HOME</a></li>
								<li><a class="page-scroll" href="index.html #about">ABOUT</a></li> 
								<li><a class="page-scroll" href="index.html #portfolio">portfolio</a></li>
								<li><a class="page-scroll" href="index.html #sirvice">SERVICE</a></li>
								<li><a class="page-scroll" href="index.html #team">TEAM</a></li>
								<li><a class="page-scroll" href="index.html #shop">shop</a></li> 
								<li><a class="page-scroll" href="index.html #blog">blog</a></li>
								<li><a class="page-scroll" href="index.html #contact">CONTACT</a></li>                                 
							</ul>  -->

							<?php
					              if( has_nav_menu( 'primary-menu' ) ) :
					                wp_nav_menu( array(
					                  'menu_class'  => 'nav navbar-nav navbar-right',
					                  'container'   => false,
					                ) );
					              endif;
					            
					          ?>
						</div><!-- /.navbar-collapse --> 
					</nav>  
				</div>
			</div>
		</div> 
	</div> 
</header>
<!--
header section end         	  
======================================= -->