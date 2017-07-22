<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Fox_Eye
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="full-comments">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
	
	<div class="heading"> 
		<h4>

			<?php
				$comment_count = get_comments_number();
				if ( 1 === $comment_count ) {
					printf(
						/* translators: 1: title. */
						esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', 'fox-eye' ),
						'<span>' . get_the_title() . '</span>'
					);
				} else {
					printf( // WPCS: XSS OK.
						/* translators: 1: comment count number, 2: title. */
						esc_html( _nx( '%1$s Comment', '%1$s Comments', get_comments_number(), 'comments title', 'fox-eye' ) ),
						number_format_i18n( $comment_count ),
						'<span>' . get_the_title() . '</span>'
					);
				}
			?>
		</h4>
	</div>	
		<!-- .comments-title -->

		<div class="all-comments">
			<ul class="comments">
				<?php
					wp_list_comments( array(
						'style'      => 'ul',
						'short_ping' => true,
						'callback'	 => 'fox_eye_comment_template'
					) );
				?>
			</ul><!-- .comment-list -->
		</div>

		

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'fox-eye' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'fox-eye' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'fox-eye' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'fox-eye' ); ?></p>
	<?php
	endif;?>
	
			<?php fox_eye_comment_form();	?>
		

</div><!-- #comments -->
