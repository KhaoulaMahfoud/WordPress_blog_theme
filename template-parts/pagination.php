<?php
/**
 * The Pagination section of ForBlogs theme.
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @since 1.0.0
 * @version 2.0.0
 */

do_action( 'ForBlogs_pagination_before' );

?>

<div class="pagination-container">
	<?php
		/**
		 * Functions hooked in to ForBlogs_pagination action
		 *
		 * @hooked ForBlogs_pagination - 10
		 */
		do_action( 'ForBlogs_pagination' ); 
	?>
</div>

<?php

do_action( 'ForBlogs_pagination_after' );
