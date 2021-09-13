<?php
/**
 * The Category page of ForBlogs theme.
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @since 1.0.0
 * @version 2.0.0
 */

$cat_description = category_description();

get_header();

?>

<div class="category-header">
	<div class="container">
		<h1 id="post-title" class="category" itemprop="headline">
			<?php single_cat_title(); ?>
		</h1>
		<?php if ( ! empty( $cat_description ) ) : ?>
			<div class="term-desctiotion">
				<?php echo $cat_description; ?>
			</div>
		<?php endif; ?>
	</div>
</div>

<?php
	/**
	 * Hook: ForBlogs_category_headline_after
	 * 
	 * The width here is wide, style it with proper CSS code.
	 */
	do_action( 'ForBlogs_category_headline_after' );
?>

<main role="main">
	<?php get_template_part( 'template-parts/archive' ); ?>
</main>

<?php

get_footer();


