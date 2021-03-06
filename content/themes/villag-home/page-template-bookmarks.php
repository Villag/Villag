<?php
/**
 * Template Name: Bookmarks
 *
 * A custom page template for displaying the site's bookmarks/links.
 *
 * @package villag_home
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>

	<?php do_atomic( 'before_content' ); // villag_home_before_content ?>

	<div id="content">

		<?php do_atomic( 'open_content' ); // villag_home_open_content ?>

		<div class="hfeed">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php do_atomic( 'before_entry' ); // villag_home_before_entry ?>

					<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

						<?php do_atomic( 'open_entry' ); // villag_home_open_entry ?>

						<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>

						<div class="entry-content">
							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'villag_home' ) ); ?>

							<?php $args = array(
								'title_li' => false,
								'title_before' => '<h2>',
								'title_after' => '</h2>',
								'category_before' => false,
								'category_after' => false,
								'categorize' => true,
								'show_description' => true,
								'between' => '<br />',
								'show_images' => false,
								'show_rating' => false,
							); ?>
							<?php wp_list_bookmarks( $args ); ?>

							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'villag_home' ), 'after' => '</p>' ) ); ?>
						</div><!-- .entry-content -->

						<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">[entry-edit-link]</div>' ); ?>

						<?php do_atomic( 'close_entry' ); // villag_home_close_entry ?>

					</div><!-- .hentry -->

					<?php do_atomic( 'after_entry' ); // villag_home_after_entry ?>

					<?php get_sidebar( 'after-singular' ); // Loads the sidebar-after-singular.php template. ?>

					<?php do_atomic( 'after_singular' ); // villag_home_after_singular ?>

					<?php comments_template( '/comments.php', true ); // Loads the comments.php template. ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // villag_home_close_content ?>

	</div><!-- #content -->

	<?php do_atomic( 'after_content' ); // villag_home_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>