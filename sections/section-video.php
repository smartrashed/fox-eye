<?php
/**
 * The template for displaying one page content.
 * Service Section
 * @package fox-eye
 */ 
 	$section_bg = '';
    $image = '';
    $video_title = '';
    $video_link = '';
    $video_thumb = '';
    
if (function_exists('cs_get_option')):
	
    
    $section_bg = cs_get_option('section_bg');
    $image = wp_get_attachment_url($section_bg);
    $video_title = cs_get_option('video_title');
    $video_link = cs_get_option('video_link');
    $video_thumb = cs_get_option('video_thumb');
    $thumb_image = wp_get_attachment_url($video_thumb);
 
endif;
?>	
<!--
video-section-start        	  
======================================= -->
<div class="watch-video" <?php if (!empty($image)): echo 'style="background-image:url('.esc_url($image).')"'; endif; ?>> 
	<div class="video-player">
		<a href="<?php echo esc_url($video_link); ?>" data-rel="lightcase"><img src="<?php echo esc_url($thumb_image); ?>" alt=""/></a>
		<?php if(!empty($video_title)): ?>
			<h2><?php echo esc_html($video_title); ?></h2>
		<?php endif; ?>
	</div>
</div>
<!--
video-section-end        	  
======================================= --> 