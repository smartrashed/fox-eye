<?php
class Fox_Eye_about_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'fox_eye_about_widget',	// Base ID
			esc_html__( 'Fox Eye:: About Fox eye', 'fox-eye' ),	// Name
			array( 'description' => esc_html__( 'About us widget to display your logo content and social profiles.', 'fox-eye' ) )	// Args
		);
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		
		if( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		

		if( ! empty( $instance['content'] ) ) {
			echo '<p>' . apply_filters( 'widget_content', $instance['content'] ) . '</p>';
		}
		echo '<div class="information"><ul>';
		if( ! empty( $instance['area'] ) ) {
			echo '<li><i class="fa fa-home" aria-hidden="true"></i><span>' . apply_filters( 'widget_area', $instance['area'] ) . '</span></li>';
		}
		if( ! empty( $instance['phone'] ) ) {
			echo '<li><i class="fa fa-phone" aria-hidden="true"></i><span>' . apply_filters( 'widget_phone', $instance['phone'] ) . '</span></li>';
		}
		if( ! empty( $instance['email'] ) ) {
			echo '<li><i class="fa fa-envelope" aria-hidden="true"></i><span>' . apply_filters( 'widget_email', $instance['email'] ) . '</span></li>';
		}
		if( ! empty( $instance['web'] ) ) {
			echo '<li><i class="fa fa-globe" aria-hidden="true"></i><span>' . apply_filters( 'widget_web', $instance['web'] ) . '</span></li>';
		}
		
		echo '</ul></div>';
		echo $args['after_widget'];
	}

		function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'content' => '','area' => '','phone' => '','email' => '','web' => '', 'nopadding' => '','filter'=>'' ) );
		$title = $instance['title'];
                $area = $instance['area'];
                $phone = $instance['phone'];
                $email = $instance['email'];
                $web = $instance['web'];
            
		$content = format_to_edit($instance['content']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','fox-eye'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

		<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>"><?php echo $content; ?></textarea>

		<p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox" <?php checked(isset($instance['filter']) ? $instance['filter'] : 0); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs','fox-eye'); ?></label></p>
		<p><input id="<?php echo $this->get_field_id('nopadding'); ?>" name="<?php echo $this->get_field_name('nopadding'); ?>" type="checkbox" <?php checked(isset($instance['nopadding']) ? $instance['nopadding'] : 0); ?> />&nbsp;<label for="<?php echo $this->get_field_id('nopadding'); ?>"><?php _e('No Margin and padding','fox-eye'); ?></label></p>
                
                <p><label for="<?php echo $this->get_field_id('area'); ?>"><?php _e('Input Area:','fox-eye'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('area'); ?>" name="<?php echo $this->get_field_name('area'); ?>" type="text" value="<?php echo esc_attr($area); ?>" /></p>
                
                <p><label for="<?php echo $this->get_field_id('phone'); ?>"><?php _e('Input Phone:','fox-eye'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo esc_attr($phone); ?>" /></p>
              
                <p><label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Input Email:','fox-eye'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo esc_attr($email); ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('web'); ?>"><?php _e('Input Website Address:','fox-eye'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('web'); ?>" name="<?php echo $this->get_field_name('web'); ?>" type="text" value="<?php echo esc_attr($web); ?>" /></p>
               
<?php
	}
	
}
register_widget('Fox_Eye_about_Widget');
