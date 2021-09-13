<?php
/**
 * The Loop section of ForBlogs theme.
 *
 * @author Terry Lin
 * @link https://terryl.in/
 *
 * @package WordPress
 * @subpackage ForBlogs
 * @since 1.0.0
 * @version 2.0.0
 */

do_action( 'ForBlogs_loop_before' );

?>

<div class="row my-4">
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>

		<div class="<?php ForBlogs_layout_columns(); ?>">
			<article id="post-<?php the_ID(); ?>" class="article-list">
				<div class="card my-2">

					<?php if ( ForBlogs_is_post_card_header() && has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php ForBlogs_post_thumbnail(); ?>
						</a>
					<?php endif; ?>
		
					<div class="card-body">
						<div class="card-text-fade-out">
							<h5 class="card-title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a>
							</h5>
							<p class="card-text">
								<?php ForBlogs_excerpt(); ?>
							</p>

							<?php if ( ForBlogs_is_text_fade_out() ) : ?>
								<div class="effect-layer"></div>
							<?php endif; ?>
						</div>

						<?php if ( ForBlogs_is_post_card_body_footer() ) : ?>
							<div class="card-body-footer">
								<?php
									// ForBlogs_posted_date_button(); Uncomment this line if needed.
									ForBlogs_comment_button();
								    ForBlogs_read_button();
								    ForBlogs_edit_button(); 
								?>
							</div>
						<?php endif; ?>
					</div>

					<?php if ( ForBlogs_is_post_card_footer() ) : ?>
						<div class="card-footer text-muted text-center">
							<?php ForBlogs_author_posted_date(); ?>
						</div>
					<?php endif; ?>

				</div>
			</article>
		</div>
	<?php endwhile; ?>
</div>
<?php 

do_action( 'ForBlogs_loop_before' );