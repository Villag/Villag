<?php
/**
 * Comments Template
 *
 * Lists comments and calls the comment form.  Individual comments have their own templates.  The 
 * hierarchy for these templates is $comment_type.php, comment.php.
 *
 * @package villag_home
 * @subpackage Template
 */

/* If a post password is required or no comments are given and comments/pings are closed, return. */
if ( post_password_required() || ( !have_comments() && !comments_open() && !pings_open() ) )
	return;
?>

<div id="comments-template">

	<div class="comments-wrap">

		<div id="comments">

			<?php if ( have_comments() ) : ?>

				<h3 id="comments-number" class="comments-header"><?php comments_number( __( 'No Responses', 'villag_home' ), __( 'One Response', 'villag_home' ), __( '% Responses', 'villag_home' ) ); ?></h3>

				<?php do_atomic( 'before_comment_list' );// villag_home_before_comment_list ?>

				<ol class="comment-list">
					<?php wp_list_comments( hybrid_list_comments_args() ); ?>
				</ol><!-- .comment-list -->

				<?php do_atomic( 'after_comment_list' ); // villag_home_after_comment_list ?>

				<?php if ( get_option( 'page_comments' ) ) : ?>
					<div class="comment-navigation comment-pagination">
						<?php paginate_comments_links(); ?>
					</div><!-- .comment-navigation -->
				<?php endif; ?>

			<?php endif; ?>

			<?php if ( pings_open() && !comments_open() ) : ?>

				<p class="comments-closed pings-open">
					<?php printf( __( 'Comments are closed, but <a href="%1$s" title="Trackback URL for this post">trackbacks</a> and pingbacks are open.', 'villag_home' ), get_trackback_url() ); ?>
				</p><!-- .comments-closed .pings-open -->

			<?php elseif ( !comments_open() ) : ?>

				<p class="comments-closed">
					<?php _e( 'Comments are closed.', 'villag_home' ); ?>
				</p><!-- .comments-closed -->

			<?php endif; ?>

		</div><!-- #comments -->

		<?php comment_form(); // Loads the comment form. ?>

	</div><!-- .comments-wrap -->

</div><!-- #comments-template -->