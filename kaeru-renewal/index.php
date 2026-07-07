<?php
/**
 * Main template.
 *
 * @package Kaeru_Renewal
 */

get_header();
?>
<div class="content-list">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
				<h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
				<div class="post-card__summary">
					<?php the_excerpt(); ?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<p><?php esc_html_e( '投稿はまだありません。', 'kaeru-renewal' ); ?></p>
	<?php endif; ?>
</div>
<?php
get_footer();


