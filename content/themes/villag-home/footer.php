<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package villag_home
 * @subpackage Template
 */
?>
				<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>

				<?php get_sidebar( 'secondary' ); // Loads the sidebar-secondary.php template. ?>

				<?php do_atomic( 'close_main' ); // villag_home_close_main ?>

			</div><!-- .wrap -->

		</div><!-- #main -->

		<?php do_atomic( 'after_main' ); // villag_home_after_main ?>

		<?php get_sidebar( 'subsidiary' ); // Loads the sidebar-subsidiary.php template. ?>

		<?php get_template_part( 'menu', 'subsidiary' ); // Loads the menu-subsidiary.php template. ?>

		<?php do_atomic( 'before_footer' ); // villag_home_before_footer ?>

		<div id="footer">

			<?php do_atomic( 'open_footer' ); // villag_home_open_footer ?>

			<div class="wrap">

				<?php echo apply_atomic_shortcode( 'footer_content', hybrid_get_setting( 'footer_insert' ) ); ?>

				<?php do_atomic( 'footer' ); // villag_home_footer ?>

			</div><!-- .wrap -->

			<?php do_atomic( 'close_footer' ); // villag_home_close_footer ?>

		</div><!-- #footer -->

		<?php do_atomic( 'after_footer' ); // villag_home_after_footer ?>

	</div><!-- #container -->

	<?php do_atomic( 'close_body' ); // villag_home_close_body ?>

	<?php wp_footer(); // wp_footer ?>

</body>
</html>