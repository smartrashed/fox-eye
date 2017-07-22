<?php
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_list_comments
 * @since 1.0.0
 * @version 1.0.0
 * @author CodexCoder
 *
 */

function fox_eye_comment_template( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
            // Display trackbacks differently than normal comments.
            ?>
            <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
            <p><?php esc_html__( 'Pingback:', 'fox-eye' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'fox-eye' ), '<span class="edit-link">', '</span>' ); ?></p>
            <?php
            break;
        default :
            // Proceed with normal comments.
            global $post;
            ?>
        <li <?php comment_class('comment_item'); ?> id="li-comment-<?php comment_ID(); ?>">
            <article id="comment-<?php comment_ID(); ?>"">
                <div class="comment-img">
                    <?php echo get_avatar( $comment, 70 ); ?>
                </div><!-- /.profile-image -->

                <div class="comments-text-site">
                    <div class="comment-text">
	                    <div class="comment-left">
	                        <strong><?php echo get_comment_author_link(); ?></strong>
	                        <span class="sep"> - </span>
	                        <a class="date-time" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
	                            <time datetime="<?php echo get_comment_time( 'c' ); ?>">
	                                <?php echo sprintf( esc_html__( '%1$s At %2$s', 'fox-eye' ), body_builder_days_posted_on(), get_comment_time() ) ?>
	                            </time>
	                        </a>
	                    </div>    
	                    <div class="comment-right">
							<a href="#"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
						</div>

                        <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html__( 'Your comment is awaiting moderation.', 'fox-eye' ); ?></p>
                        <?php endif; ?>

                        <p><?php comment_text(); ?></p>
                        <?php edit_comment_link( esc_html__( 'Edit', 'fox-eye' ), '<p class="edit-link">', '</p>' ); ?>
                   	
                    </div><!-- /.comment-meta -->

                   

                    <?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'fox-eye' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                </div><!-- /.contents -->

            </article>
            <?php
            break;
    endswitch; // end comment_type check
}

/**
 * Comment Form
 *
 * @since 1.0.0
 * @version 1.0.0
 * @author CodexCoder
 */
function fox_eye_comment_form() {
    $commenter = wp_get_current_commenter();
    $req = get_option( 'comment_author_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $fields = array(
        'name'   => '<div class="for-minus-margin"><div class="col-md-4"><div class="level-input"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="' . esc_html__( 'Name*', 'fox-eye' ) . '"' . $aria_req . ' /></div></div>',
        'email'  => '<div class="col-md-4"><div class="level-input"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" placeholder="' . esc_html__( 'Email*', 'fox-eye' ) . '"' . $aria_req . ' /></div></div>',
        'phone'    => '<div class="col-md-4"><div class="level-input"><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . esc_attr__( 'Website*', 'fox-eye' ) . '"/></div></div></div>',
    );
    $comments_args = array(
        'fields' => $fields,
        'title_reply'=> __( 'Leave a comment', 'fox-eye' ),
        'title_reply_before'    => '<h4>',
        'title_reply_after'     => '</h4>',
        'class_submit'      => 'input-button',
        'label_submit'  => __( 'Submit Comment', 'fox-eye' ),
        'comment_notes_before'  => '',
        'comment_field' => '<textarea id="comment" class="com-reply" name="comment" cols="45" rows="6" placeholder="' . esc_html__( 'Your Comment', 'fox-eye' ) . '" aria-required="true"></textarea>',
        'comment_notes_after' => '',
    );
    comment_form($comments_args);
}