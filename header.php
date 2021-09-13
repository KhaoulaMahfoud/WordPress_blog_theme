<?php
/**
 * The header part of ForBlogs theme.
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @since 1.0.0
 * @version 2.0.0
 */

?><!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<?php
		/**
		 * Hook: ForBlogs_head
		 */
		do_action( 'ForBlogs_head' );

		wp_head();
	?>

</head>
<body <?php body_class( ForBlogs_body_class() ); ?>>

	<?php wp_body_open(); ?>

	<?php
		/**
		 * Hook: ForBlogs_header_after
		 */
		do_action( 'ForBlogs_site_wrapper_before' );
	?>

	<div class="wrapper">

		<?php
			/**
			 * Hook: ForBlogs_header_after
			 */
			do_action( 'ForBlogs_header_before' );
		?>

		<header class="header clear" role="banner">
			<div class="container">

				<?php
					/**
					 * Hook: ForBlogs_header
					 *
					 * @hooked ForBlogs_header_navigation - 10
					 */
					do_action( 'ForBlogs_header'); 
				?>

			</div><!-- .container -->
		</header>

		<?php
			/**
			 * Hook: ForBlogs_header_after
			 */
			do_action( 'ForBlogs_header_after' );
		?>
