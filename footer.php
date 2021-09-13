<?php
/**
 * The footer for ForBlogs theme
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @since 1.0.0
 * @version 2.0.0
 */

/**
 * Hook: ForBlogs_footer_before
 */
do_action( 'ForBlogs_footer_before' );

?>

		<footer class="footer" role="contentinfo">

			<?php
				/**
				 * Hook: ForBlogs_footer
				 *
				 * @hooked ForBlogs_footer_widgets - 10
				 * @hooked ForBlogs_columns        - 20
				 */
				do_action( 'ForBlogs_footer' );
			?>

		</footer>

		<?php
			/**
			 * Hook: ForBlogs_footer_after
			 */
			do_action( 'ForBlogs_footer_after' );
		?>

	</div><!-- .wrapper -->

	<?php
		/**
		 * Hook: ForBlogs_site_wrapper_after
		 */
		do_action( 'ForBlogs_site_wrapper_after' );

		wp_footer();
	?>

	<a href="javascript:void(0);" class="go-top" style="display: none">
		<i class="fas fa-arrow-up"></i>
	</a>
</body>
</html>
