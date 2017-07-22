<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package fox-eye
 */



function fox_eye_social_share( $post_id ){ ?>
    <ul class="tag-right">
        <?php $pinterest_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' ); ?>
        <li><i class="fa fa-share-alt" aria-hidden="true"></i><?php esc_html_e('Share:','fox-eye'); ?></li>
        <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink( $post_id ) ); ?>"><i class="fa fa-facebook"></i></a></li>
        <li><a target="_blank" href="https://twitter.com/home?status=<?php the_title() ?> <?php echo urlencode( get_permalink( $post_id ) ); ?>"><i class="fa fa-twitter"></i></a></li>
        <li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( get_permalink( $post_id ) ); ?>&title=<?php the_title(); ?>"><i class="fa fa-linkedin"></i></a></li>
        <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode( get_permalink( $post_id ) ); ?>"><i class="fa fa-google-plus"></i></a></li>
        <li><a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo urlencode( get_permalink() ); ?>&media=<?php echo $pinterest_img[0] ?>&description=<?php the_title(); ?>"><i class="fa fa-camera"></i></a></li>
        
    </ul>
<?php }






/**
 * Moving the comments text field to bottom
 */
function fox_eye_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields[ 'comment' ];
    unset( $fields[ 'comment' ] );
    $fields[ 'comment' ] = $comment_field;
    return $fields;
}

add_filter( 'comment_form_fields', 'fox_eye_move_comment_field_to_bottom' );



//add post view counter
function fox_eye_post_views($post_ID) {

    //Set the name of the Posts Custom Field.
    $count_key = 'post_views_count';

    //Returns values of the custom field with the specified key from the specified post.
    $count = get_post_meta($post_ID, $count_key, true);

    //If the the Post Custom Field value is empty.
    if($count == ''){
        $count = 0; // set the counter to zero.

        //Delete all custom fields with the specified key from the specified post.
        delete_post_meta($post_ID, $count_key);

        //Add a custom (meta) field (Name/value)to the specified post.
        add_post_meta($post_ID, $count_key, '0');
        return $count . '';

        //If the the Post Custom Field value is NOT empty.
    }else{
        $count++; //increment the counter by 1.
        //Update the value of an existing meta key (custom field) for the specified post.
        update_post_meta($post_ID, $count_key, $count);

        //If statement, is just to have the singular form 'View' for the value '1'
        if($count == '1'){
            return $count . '';
        }
        //In all other cases return (count) Views
        else {
            return $count . '';
        }
    }
}
add_action( 'init', 'fox_eye_post_views' );



/* Days Wise Posted On --It will show Ex: 5 days ago --*/


function body_builder_days_posted_on() { 
   
       
    echo '<a href="'.get_the_permalink().'"><span class="posted-on">' . human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago' . '</span></a>'; // WPCS: XSS OK.

}

