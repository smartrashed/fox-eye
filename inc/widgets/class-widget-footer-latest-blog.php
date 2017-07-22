<?php
/**
 * The sidebar containing the main widget area
 *
 * @package body-builder
 * @author CodexCoder
 */

/**
 * Add Body Builder Recent Post
 */

class Fox_Eye_Footer_Latest_Posts extends WP_Widget {

    public function __construct() {
		parent::__construct(
			'fox_eye_footer_latest_posts',	// Base ID
			esc_html__( 'Fox Eye:: Footer Latest Blog', 'fox-eye' ),	// Name
			array( 'description' => esc_html__( 'Recent Posts widget to display your logo content and social profiles.', 'fox-eye' ) )	// Args
		);
	}

  public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		$recent_posts = new WP_Query( array(
			'posts_type'		=> 'post',
			'posts_per_page'	=> $instance['number'],
			'ignore_sticky_posts' => true
		) );
		if( $recent_posts->have_posts() ) : ?>

		<div class="latest-blog">

			<?php while( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>

			<div class="blog-inform">
				
							<?php 

							if( ! empty( $instance['showimage'] ) ) :

								if( has_post_thumbnail() ) : ?>

									<div class="blog-infow-img">
										<a href="<?php esc_url(get_permalink() ); ?>"><?php esc_attr(the_post_thumbnail('fox-eye-latest-blog-sidebar')); ?></a>
									</div>
									
								<?php	endif;

							endif; ?>
						<div class="blog-infow-text">
							<?php the_title( '<a href="'. esc_url( get_permalink() ) .'">', '</a>' ); ?>
							<a href="<?php the_permalink() ?>"> <?php the_title(); ?></a>
							<span><?php fox_eye_posted_on(); ?></span>
						</div>
				
			</div>

			<?php
			endwhile;

			wp_reset_postdata();

			?>

		</div>
		
		<?php 
		
		endif;
		echo $args['after_widget'];
	}


   function update($new_instance, $old_instance) {
       $new_instance['b'] = isset($new_instance['b']);
       return $new_instance;
   }

   function form($instance) {
        $instance = wp_parse_args( (array) $instance, array(  'title' => '', 'number' => '','showimage'=>'') );
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $number = esc_attr($instance['number']);
        $showimage = esc_attr($instance['showimage']);
        ?>

       <p>
       <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','fox-eye'); ?></label>
       <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
   	   </p>

        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of posts','fox-eye'); ?>:</label>
            <input type="number" name="<?php echo $this->get_field_name('number'); ?>" value="<?php echo $number; ?>" class="widefat" id="<?php echo $this->get_field_id('number'); ?>" />
        </p>
         
        <p>
        	<input class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'showimage' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'showimage' ) ); ?>" type="checkbox"<?php if(!empty($instance['showimage'])){echo "checked='checked'";} ?>>

 			 <label for="<?php echo esc_attr( $this->get_field_id( 'showimage' ) ); ?>">Display post image?</label>
		</p>
       
    <?php
    }
}


register_widget('Fox_Eye_Footer_Latest_Posts');
