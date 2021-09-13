<?php
/**
 * The Archive page of ForBlogs theme.
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @since 2.0.0
 * @version 2.0.0
 */
?>

<div class="container">
	<div class="row row-layout-choice-archive">
		<section id="main-container" class="<?php echo esc_attr( ForBlogs_main_container_css() ); ?>">
			<?php

				/**
				 * Hook: ForBlogs_archive_loop_before
				 * 
				 * The width here is the same as the container of the loop.
				 */
				do_action( 'ForBlogs_archive_loop_before' );

				if ( have_posts() ) {
					get_template_part( 'template-parts/loop' );
					get_template_part( 'template-parts/pagination' );
				} else {
					get_template_part( 'template-parts/content', 'none' );
				}

				/**
				 * Hook: ForBlogs_archive_loop_after
				 * 
				 * The width here is the same as the container of the loop.
				 */
				do_action( 'ForBlogs_archive_loop_after' );

			?>
		</section>
		<?php
			/**
			 * Hook: ForBlogs_archive_sidebar
			 *
			 * @hooked ForBlogs_archive_sidebar - 10
			 */
			do_action( 'ForBlogs_archive_sidebar' );
		?>
	</div>
</div>
