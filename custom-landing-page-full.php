<?php
/**
 * Template Name: Landing Page (full)
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @since 1.0.0
 * @version 2.0.0
 */

get_header();

get_template_part( 'template-parts/page', 'landing' );

/**
 * Hook: ForBlogs_homepage_middle_sidebar
 *
 * @hooked ForBlogs_homepage_middle_sidebar - 10
 */
do_action( 'ForBlogs_homepage_middle_sidebar' );

get_footer();
