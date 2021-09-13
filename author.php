<?php
/**
 * The Author page of ForBlogs theme.
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

?>

<main role="main">
	<div class="container author-page">
		<?php ForBlogs_author_card( 150, 'lg' ); ?>
	</div>
	<?php get_template_part( 'template-parts/archive' ); ?>
</main>

<?php

get_footer();

