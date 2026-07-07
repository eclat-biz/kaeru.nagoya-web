<?php
/**
 * Page template.
 *
 * @package Kaeru_Renewal
 */

get_header();
?>
<?php while ( have_posts() ) : ?>
	<?php the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
		<header class="entry__header">
			<h1><?php echo esc_html( get_the_title() ); ?></h1>
		</header>
		<div class="entry__content">
			<?php the_content(); ?>
		</div>
	</article>
<?php endwhile; ?>
<?php
get_footer();


