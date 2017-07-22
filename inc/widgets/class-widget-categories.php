<?php

/**
 * The sidebar containing the main widget area
 *
 * @package body-builder'event-hub'
 * @author CodexCoder
 */

/**
 * Add Event Hub categories widget
 */

class Widget_Categories extends WP_Widget {

    /**
     * Register widget with WordPress
     */
    public function __construct() {
        parent::__construct(
            'fox_eye_categories',     // Base ID
            esc_html__( 'Fox Eye:: Categories', 'fox-eye' ),    // Name
            array( 'description' => __( 'Categories widget to display post categories','fox-eye' ) )
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        if( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        ?>
        <div class="clearfix"></div>
        <ul class="cate-text">
            <?php $categories = get_terms( 'category', array( 
                'orderby'       => 'name',
                'hide_empty'    => true,
                'show_count'    => true
            ) );

            foreach( $categories as $category ) :
                $category_link = get_term_link( $category, $category->slug ); ?>
                <li class="category-text catagory-icon">
                	
	                   <i class="fa fa-angle-double-right" aria-hidden="true"></i>
	                   <a href="<?php echo esc_url( $category_link ); ?>"><?php echo esc_html( $category->name ); ?></a>
	                   <span><?php echo esc_html( $category->count)?></span>
                   
                </li>
            <?php endforeach; ?>
        </ul>
        <?php
        echo $args['after_widget'];
    }

    /**
     * Categories field with 
     */
   function form( $instance ) {
        //Defaults
        $instance = wp_parse_args( (array) $instance, array( 'title' => '') );
        $title = esc_attr( $instance['title'] );
        $count = isset($instance['count']) ? (bool) $instance['count'] :false;
        $hierarchical = isset( $instance['hierarchical'] ) ? (bool) $instance['hierarchical'] : false;
        $dropdown = isset( $instance['dropdown'] ) ? (bool) $instance['dropdown'] : false;
        $hide_empty = isset( $instance['hide_empty'] ) ? (bool) $instance['hide_empty'] : false;
        $parent = isset( $instance['parent'] ) ? (bool) $instance['parent'] : false;
        ?>
    
    <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:' ,'fox-eye'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>

    <p><input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('dropdown'); ?>" name="<?php echo $this->get_field_name('dropdown'); ?>"<?php checked( $dropdown ); ?> />
        <label for="<?php echo $this->get_field_id('dropdown'); ?>"><?php _e( 'Show as dropdown','fox-eye' ); ?></label><br />
        <input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('hierarchical'); ?>" name="<?php echo $this->get_field_name('hierarchical'); ?>"<?php checked( $hierarchical ); ?> />
        <label for="<?php echo $this->get_field_id('hierarchical'); ?>"><?php _e( 'Show hierarchy','fox-eye' ); ?></label><br />

        <input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('hide_empty'); ?>" name="<?php echo $this->get_field_name('hide_empty'); ?>"<?php checked( $hide_empty ); ?> />
        <label for="<?php echo $this->get_field_id('hide_empty'); ?>"><?php _e( 'Show empty categories','fox-eye' ); ?></label><br />

        <input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('parent'); ?>" name="<?php echo $this->get_field_name('parent'); ?>"<?php checked( $parent ); ?> />
        <label for="<?php echo $this->get_field_id('parent'); ?>"><?php _e( 'Show as subcategories menu','fox-eye' ); ?></label></p>

    <?php
    }


   }

register_widget('Widget_Categories');