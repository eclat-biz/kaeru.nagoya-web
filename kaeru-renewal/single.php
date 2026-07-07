<?php
/**
 * Single post template.
 *
 * @package Kaeru_Renewal
 */

get_header();
?>
<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
		<header class="entry__header">
			<p class="entry__meta"><?php echo esc_html( get_the_date() ); ?></p>
			<h1><?php echo esc_html( get_the_title() ); ?></h1>
		</header>
		<div class="entry__content">
			<?php the_content(); ?>
		</div>
		<nav class="post-navigation" aria-label="<?php echo esc_attr__( '投稿ナビゲーション', 'kaeru-renewal' ); ?>">
			<?php previous_post_link( '<div class="post-navigation__prev">%link</div>' ); ?>
			<?php next_post_link( '<div class="post-navigation__next">%link</div>' ); ?>
		</nav>
	</article>
<?php endwhile; ?>
<?php
get_footer();


