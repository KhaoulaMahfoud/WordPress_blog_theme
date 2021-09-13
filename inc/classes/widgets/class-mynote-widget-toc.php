<?php
/**
 * ForBlogs_Widget__TOC
 *
 * Add a Table of Content for your article. This widget is for single-post pages only.
 *
 * @package   WordPress
 * @author    Terry Lin <terrylinooo>
 * @license   GPLv3 (or later)
 * @link      https://terryl.in
 * @copyright 2018 Terry Lin
 */

/**
 * ForBlogs_Widget_Toc
 */
class ForBlogs_Widget_Toc extends WP_Widget {

	/**
	 * Sets up a new ForBlogs TOC widget instance.
	 */
	public function __construct() {

		$widget_ops = array(
			'classname'                   => 'widget_ForBlogs_toc',
			'description'                 => __( 'Add a Table of Content for your article. This widget is for single-post pages only.', 'ForBlogs' ),
			'customize_selective_refresh' => true,
		);
		parent::__construct( 'ForBlogs-toc', __( 'ForBlogs: Table of Content', 'ForBlogs' ), $widget_ops );
		$this->alt_option_name = 'widget_ForBlogs_toc';

		if ( is_active_widget( false, false, $this->id_base ) || is_customize_preview() ) {
			add_action( 'wp_head', array( $this, 'ForBlogs_toc_js' ) );
		}
	}

	/**
	 * Register javascript for the ForBlogs TOC widget.
	 */
	public function ForBlogs_toc_js() {
		wp_register_script( 'bootstrap-toc', get_template_directory_uri() . '/assets/js/bootstrap-toc.min.js', array( 'jquery' ), '1.0.0' );
		wp_enqueue_script( 'bootstrap-toc' );
	}

	/**
	 * Initial TOC .
	 */
	public function ForBlogs_toc_inline_js() {

		$inline_js = '
			jQuery( document ).ready(function( $ ) {
				Toc.init({
					$nav: $( "#toc" ),
					$scope: $( ".markdown-body" )
				});

				if ( "undefined" !== typeof $.fn.scrollspy ) {
					$( "body" ).scrollspy({
						target: "#toc"
					});
				}
			});
		';

		wp_add_inline_script( 'bootstrap-toc', $inline_js );
	}

	/**
	 * Outputs the content for the ForBlogs TOC instance.
	 */
	public function widget( $args, $instance ) {
		$this->ForBlogs_toc_inline_js();

		$output = '<nav id="toc" class="toc" role="navigation"></nav>';
		echo $output;
	}

	/**
	 * Flushes the ForBlogs TOC widget cache.
	 */
	public function flush_widget_cache() {
		_deprecated_function( __METHOD__, '4.4.0' );
	}
}
