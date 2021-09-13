<?php
/**
 * Template for displaying search forms in ForBlogs
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @since 1.0.0
 * @version 2.0.0
 */

$unique_id = uniqid( 'search-form' );

?>

<form id="search-form" class="search" method="get" action="<?php echo esc_url( home_url() ); ?>" role="search" autocomplete="off">
	<input type="text" name="s" class="search-input" placeholder="<?php esc_attr_e( 'To search, type and hit enter.', 'ForBlogs' ); ?>">
	<span class="search-icon" onclick="document.getElementById('search-form').submit();">
		<i class="fas fa-search"></i>
	</span>
</form>
