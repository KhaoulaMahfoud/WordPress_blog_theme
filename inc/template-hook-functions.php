<?php
/**
 * ForBlogs template functions for hooks.
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @since 2.0.0
 */

if ( ! function_exists( 'ForBlogs_header_navigation' ) ) {
	/**
	 * Display the header menu.
	 *
	 * @since  2.0.0
	 * @return void
	 */
	function ForBlogs_header_navigation() {

		$is_brand_url     = false;
		$addon_body_class = '';
		$site_brand_url   = '';

		if ( '' !== ForBlogs_site_icon() ) {
			$is_brand_url      = true;
			$addon_body_class .= 'has-site-icon';
			$site_brand_url    = ForBlogs_site_icon();
		}

		if ( '' !== ForBlogs_site_logo() ) {
			$is_brand_url = true;

			if ( ! empty( $addon_body_class ) ) {
				$addon_body_class .= ' ';
			}
			$addon_body_class .= 'has-site-logo';
			$site_brand_url    = ForBlogs_site_logo();
		}

		$addon_navbar_class = '';

		if ( ! ForBlogs_is_responsive() ) {
			$addon_navbar_class = 'navbar-expand';
		}

		?>
			<nav class="navbar navbar-expand-lg navbar-dark <?php echo $addon_navbar_class; ?>" role="navigation">
				<?php if ( $is_brand_url ) : ?>
					<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
						<img src="<?php echo esc_url( $site_brand_url ); ?>" alt="<?php esc_attr_e( 'Logo', 'ForBlogs' ); ?>" class="logo-img">
					</a>
				<?php endif; ?>

				<?php if ( has_nav_menu( 'header-menu' ) ) : ?>
					<?php ForBlogs_nav(); ?>
				<?php else : ?>
					<?php ForBlogs_default_nav(); ?>
				<?php endif; ?>

				<div class="search-bar">
					<?php get_search_form() ?>
				</div>

				<button class="navbar-toggler" 
					type="button" data-toggle="collapse" 
					data-target="#ForBlogs-nav-bar" 
					aria-controls="ForBlogs-nav-bar" 
					aria-expanded="false" 
					aria-label="<?php esc_attr_e( 'Toggle navigation', 'ForBlogs' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>
			</nav>
		<?php
	}
}

if ( ! function_exists( 'ForBlogs_footer_widgets' ) ) {
	/**
	 * Display the theme credit
	 *
	 * @since  2.0.0
	 * @return void
	 */
	function ForBlogs_footer_widgets() {
		if ( is_active_sidebar( 'sidebar-2' ) ) {
			?>
				<section class="footer-sidebar">
					<div class="container px-responsive">
						<div class="row my-4">
							<?php dynamic_sidebar( 'sidebar-2' ); ?>
						</div>
					</div>
				</section>
			<?php
		}
	}
}

if ( ! function_exists( 'ForBlogs_footer_columns' ) ) {
	/**
	 * Display the theme credit, footer menu and social links.
	 *
	 * @since  2.0.0
	 * @return void
	 */
	function ForBlogs_footer_columns() {
		?>
			<div class="container footer-columns">
				<div class="footer-column-left">
					<div><?php ForBlogs_site_info(); ?></div>
					<div><?php ForBlogs_nav( 'footer' ); ?></div>
				</div>
				<div class="footer-column-right">
					<?php ForBlogs_nav( 'social' ); ?>
				</div>
			</div>
		<?php
	}
}

if ( ! function_exists( 'ForBlogs_homepage_promotion' ) ) {
	/**
	 * Display the promotion area in homepage.
	 *
	 * @since  2.0.0
	 * @return void
	 */
	function ForBlogs_homepage_promotion() {
		$custom_header_image = '';

		if ( has_header_image() ) {
			$custom_header_image = 'background-image: url(' . get_header_image() . ');';
		}
		?>

		<div class="section-intro d-flex align-items-center" style="<?php echo $custom_header_image; ?>">
				<div class="container px-responsive">
					<div class="d-md-flex align-items-center">
						<div class="col-12 col-md-7 text-center text-md-left" style="min-height: 100%; overflow: hidden" >
							<h1 class="mb-3"><?php echo get_bloginfo( 'name' ); ?></h1>
							<p class="mb4 desc-text" id="header-desc-text">
								<?php echo html_entity_decode( get_bloginfo( 'description' ) ); ?>
							</p>
						</div>
						<div class="col-12 col-md-5">
							<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
								<aside class="home-intro-sidebar">
									<div class="container px-responsive">
										<div class="row my-4">
											<?php dynamic_sidebar( 'sidebar-5' ); ?>
										</div>
									</div>
								</aside>
							<?php else : ?>
								<p class="p-5"><?php ForBlogs_category_labels(); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="scroll-area">
					<a href="#main-container"><i class="fas fa-arrow-down"></i></a>
				</div>
			</div>
		<?php
	}
}

if ( ! function_exists( 'ForBlogs_homepage_middle_sidebar' ) ) {
	/**
	 * Display the middle sidebar in homepage.
	 *
	 * @since  2.0.0
	 * @return void
	 */
	function ForBlogs_homepage_middle_sidebar() {
		if ( is_active_sidebar( 'sidebar-4' ) ) {
			?>
			<aside class="home-middle-sidebar">
				<div class="container px-responsive">
					<div class="row my-4">
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					</div>
				</div>
			</aside>
			<?php
		}
	}
}

if ( ! function_exists( 'ForBlogs_homepage_sidebar' ) ) {
	/**
	 * Display the sidebar in homepage.
	 *
	 * @since  2.0.0
	 * @return void
	 */
	function ForBlogs_homepage_sidebar() {
		if ( ForBlogs_is_sidebar() ) {
			?>
			<aside id="aside-container" class="col-lg-4 col-md-4 col-sm-12" role="complementary">
				<div id="sidebar-home" class="sidebar">
					<?php dynamic_sidebar( 'sidebar-6' ); ?>
				</div>
			</aside>
			<?php
		}
	}
}

if ( ! function_exists( 'ForBlogs_archive_sidebar' ) ) {
	/**
	 * Display the sidebar in archive.
	 *
	 * @since  2.0.0
	 * @return void
	 */
	function ForBlogs_archive_sidebar() {
		if ( ForBlogs_is_sidebar() ) {
			?>
			<aside id="aside-container" class="col-lg-4 col-md-4 col-sm-12" role="complementary">
				<div id="sidebar-home" class="sidebar">
					<?php dynamic_sidebar( 'sidebar-7' ); ?>
				</div>
			</aside>
			<?php
		}
	}
}

if ( ! function_exists( 'ForBlogs_single_post_sidebar' ) ) {
	/**
	 * Display the sidebar in single posts.
	 *
	 * @since  2.0.0
	 * @return void
	 */
	function ForBlogs_single_post_sidebar() {
		if ( ForBlogs_is_sidebar() ) {
			?>
			<aside id="aside-container" class="col-lg-4 col-md-4 col-sm-12" role="complementary">
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
					<div id="sidebar" class="sidebar">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
					<div id="sidebar-sticky" class="sidebar sticky-top">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
					</div>
				<?php endif; ?>
			</aside>
			<?php
		}
	}
}

if ( ! function_exists( 'ForBlogs_pagination_section' ) ) {
	/**
	 * Display pagination.
	 *
	 * @since  2.0.0
	 * @return void
	 */
	function ForBlogs_pagination_section() {
		if ( function_exists( 'ForBlogs_pagination' ) ) {
			ForBlogs_pagination();
		} else {
			the_posts_pagination(
				array(
					'prev_text'          => '<i class="fas fa-angle-left"></i> <span class="screen-reader-text">' . __( 'Previous page', 'ForBlogs' ) . '</span>',
					'next_text'          => '<span class="screen-reader-text">' . __( 'Next page', 'ForBlogs' ) . '</span> <i class="fas fa-angle-right"></i>',
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ForBlogs' ) . ' </span>',
				)
			);
		}
	}
}

if ( ! function_exists( 'ForBlogs_post_metadata' ) ) {
	/**
	 * Display post metadata before post's content.
	 *
	 * @since  2.0.0
	 * @return void
	 */
	function ForBlogs_post_metadata() {
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				ForBlogs_post_breadcrumb();

				?>
					<div class="single-post-header">
						<div class="container">

							<h1 id="post-title" itemprop="headline"><?php the_title(); ?></h1>
							<div class="post-ForBlogs-buttons">

								<?php if ( ForBlogs_is_sidebar() ) : ?>
									<?php ForBlogs_column_control_button(); ?>
								<?php endif; ?>

								<?php ForBlogs_edit_button(); ?>
								<?php ForBlogs_comment_button(); ?>
							</div><!-- .post-ForBlogs-buttons -->

							<?php if ( ForBlogs_is_post_author_date() ) : ?>
								<div class="post-meta">
									<?php ForBlogs_author_posted_date( true ); ?>
								</div>
							<?php endif; ?>

						</div><!-- .container -->
					</div><!-- .single-post-header -->
				<?php
			}
		}
	}
}

if ( ! function_exists( 'ForBlogs_check_responsive' ) ) {
	/**
	 * Check setting about responsive.
	 *
	 * @since  2.0.0
	 * @return void
	 */
	function ForBlogs_check_responsive() {
		if ( ForBlogs_is_responsive() ) {
			echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
		}
	}
}
