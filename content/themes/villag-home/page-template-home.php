<?php
/**
 * Template Name: Home
 *
 * This is a custom home page template.
 *
 * @package villag_home
 * @subpackage Template
 */

get_header(); // Loads the header.php template. ?>

	<?php do_atomic( 'before_content' ); // villag_home_before_content ?>

	<div id="content">

		<?php do_atomic( 'open_content' ); // villag_home_open_content ?>
 			
		<ul id="spokes" class="ch-grid">
			<li id="spoke-center">
				<div class="ch-item">	
					<div class="ch-info">
						<h3>Villag</h3>
						<p>A single hub of tools and services for your city! <a href="<?php echo home_url(); ?>/about/">More</a></p>
					</div>
					<div class="ch-thumb ch-img-villag">
						<div class="ch-thumb-title">Denton Villag</div>
						<p>A single hub of tools and services for your city!</p>
					</div>
				</div>
			</li>
			
			<li id="spoke-create">
				<div class="ch-item">	
					<div class="ch-info">
						<h3>Create</h3>
						<p>Find local creatives <a href="<?php echo home_url(); ?>/create/">View</a></p>
					</div>
					<div class="ch-thumb ch-img-1"><div class="ch-thumb-title">Create</div></div>
				</div>
			</li>
			<li id="spoke-vote">
				<div class="ch-item">
					<div class="ch-info">
						<h3>Vote</h3>
						<p>Get local voting information <a href="<?php echo home_url(); ?>/vote/">View</a></p>
					</div>
					<div class="ch-thumb ch-img-2"><div class="ch-thumb-title">Vote</div></div>
				</div>
			</li>
			<li id="spoke-teach">
				<div class="ch-item">
					<div class="ch-info">
						<h3>Teach</h3>
						<p>Collaborate with your local schools <a href="<?php echo home_url(); ?>/teach/">View</a></p>
					</div>
					<div class="ch-thumb ch-img-3"><div class="ch-thumb-title">Teach</div></div>
				</div>
			</li>
		</ul>
							       
		<div class="hfeed">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php do_atomic( 'before_entry' ); // villag_home_before_entry ?>

					<div id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

						<?php do_atomic( 'open_entry' ); // villag_home_open_entry ?>

						<div class="entry-content">
							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'villag_home' ) ); ?>
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