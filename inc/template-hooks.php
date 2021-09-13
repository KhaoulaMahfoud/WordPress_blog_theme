<?php
/**
 * Hooks for ForBlogs theme.
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @since 2.0.0
 */

/*
|--------------------------------------------------------------------------
| ForBlogs custom hooks.
|--------------------------------------------------------------------------
| Hooked functions defined in inc/template-hook-functions.php
*/

/**
 * Head
 *
 * - ForBlogs_head
 * 
 * @see ForBlogs_check_responsive();
 */
add_action( 'ForBlogs_head', 'ForBlogs_check_responsive', 10 );

/**
 * Header
 *
 * - ForBlogs_header_before
 * - ForBlogs_header
 * - ForBlogs_header_after
 *
 * @see  ForBlogs_header_navigation()
 */
add_action( 'ForBlogs_header', 'ForBlogs_header_navigation', 10 );

/**
 * Webiste's wrapper
 *
 * - ForBlogs_site_wrapper_before
 * - ForBlogs_site_wrapper_after
 */

/**
 * Footer
 *
 * - ForBlogs_footer_before
 * - ForBlogs_footer
 * - ForBlogs_footer_after
 *
 * @see  ForBlogs_footer_widgets()
 * @see  ForBlogs_footer_columns()
 */
add_action( 'ForBlogs_footer', 'ForBlogs_footer_widgets', 10 );
add_action( 'ForBlogs_footer', 'ForBlogs_footer_columns', 20 );

/**
 * Homepage
 *
 * - ForBlogs_homepage_promotion
 * - ForBlogs_homepage_sidebar
 * - ForBlogs_homepage_middle_sidebar
 *
 * @see  ForBlogs_homepage_promotion()
 * @see  ForBlogs_homepage_sidebar()
 * @see  ForBlogs_homepage_middle_sidebar()
 */
add_action( 'ForBlogs_homepage_promotion', 'ForBlogs_homepage_promotion', 10 );
add_action( 'ForBlogs_homepage_sidebar', 'ForBlogs_homepage_sidebar', 10 );
add_action( 'ForBlogs_homepage_middle_sidebar', 'ForBlogs_homepage_middle_sidebar', 10 );

/**
 * Loop
 *
 * - ForBlogs_loop_before
 * - ForBlogs_loop_after
 */

/**
 * Pagination
 *
 * - ForBlogs_pagination_before
 * - ForBlogs_pagination
 * - ForBlogs_pagination_after
 * 
 * @see  ForBlogs_pagination_section()
 */
 add_action( 'ForBlogs_pagination', 'ForBlogs_pagination_section', 10 );

/**
 * Post
 *
 * - ForBlogs_post_before
 * - ForBlogs_post_content_before
 * - ForBlogs_post_content_after
 * - ForBlogs_post_after
 * - ForBlogs_post_sidebar
 * - ForBlogs_post_comment_before
 * - ForBlogs_post_comment_after
 * 
 * @see  ForBlogs_post_metadata()
 * @see  ForBlogs_single_post_sidebar()
 */
add_action( 'ForBlogs_post_before', 'ForBlogs_post_metadata', 10 );
add_action( 'ForBlogs_post_sidebar', 'ForBlogs_single_post_sidebar', 10 );

/**
 * Page
 *
 * - ForBlogs_page_before
 * - ForBlogs_page_content_before
 * - ForBlogs_page_content_after
 * - ForBlogs_page_after
 * 
 * @see  ForBlogs_post_metadata()
 */
add_action( 'ForBlogs_page_before', 'ForBlogs_post_metadata', 10 );

/**
 * Archive
 *
 * - ForBlogs_archive_sidebar
 * - ForBlogs_archive_headline_after
 * - ForBlogs_archive_loop_before
 * - ForBlogs_archive_loop_after
 * - ForBlogs_category_headline_after
 * - ForBlogs_tag_headline_after
 * - ForBlogs_search_headline_after
 * 
 * @see  ForBlogs_archive_sidebar()
 */
add_action( 'ForBlogs_archive_sidebar', 'ForBlogs_archive_sidebar', 10 );

/*
|--------------------------------------------------------------------------
| WordPress hooks used in ForBlogs.
|--------------------------------------------------------------------------
| Hooked functions defined in inc/template-functions.php
*/

add_action( 'widgets_init', 'ForBlogs_remove_recent_comments_style' );
add_action( 'wp_footer', 'ForBlogs_single_post_script', 1, 1 );
add_action( 'wp_footer', 'ForBlogs_scrolling_script', 1, 1 );
add_action( 'get_header', 'ForBlogs_enable_threaded_comments' );
add_filter( 'the_category', 'ForBlogs_remove_invalid_rel_for_category' );
add_filter( 'body_class', 'ForBlogs_add_slug_to_body_class' );
add_filter( 'excerpt_more', 'ForBlogs_read_more' );
add_filter( 'post_thumbnail_html', 'ForBlogs_remove_thumbnail_dimensions', 10 );
add_filter( 'avatar_defaults', 'ForBlogs_custom_gravatar' );
add_filter( 'comment_form_defaults', 'ForBlogs_comment_form' );
add_filter( 'comment_form_default_fields', 'ForBlogs_comment_fileds' );
add_filter( 'comment_form_fields', 'ForBlogs_move_comment_field_to_bottom' );
add_filter( 'language_attributes', 'ForBlogs_replace_language_attributes' );
add_filter( 'embed_oembed_html', 'ForBlogs_alx_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'ForBlogs_alx_embed_html' );
add_filter( 'walker_nav_menu_start_el', 'ForBlogs_nav_menu_social_icons', 10, 4 );

/*
|--------------------------------------------------------------------------
| WordPress hooks used in ForBlogs.
|--------------------------------------------------------------------------
| Hooked functions defined in functions.php
*/

add_action( 'after_setup_theme', 'ForBlogs_setup_theme' );
add_action( 'init', 'ForBlogs_register_ForBlogs_menu' );
add_action( 'init', 'ForBlogs_header_scripts' );
add_action( 'widgets_init', 'ForBlogs_widgets_init' );
add_action( 'wp_enqueue_scripts', 'ForBlogs_styles' );
add_action( 'wp_enqueue_scripts', 'ForBlogs_enqueue_comment_reply' );
add_filter( 'comment_text', 'ForBlogs_sanitize_comment' );
