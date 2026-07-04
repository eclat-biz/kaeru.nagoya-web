<?php get_header(); ?>
	<?php get_sidebar(); ?>
	<div class="blog_main">
		<?php if(is_tax()): ?>
			<div class="hdg-category cf"><span>カテゴリー</span><h2><?php single_term_title( ); ?></h2></div>
		<?php endif; ?>
		<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'content-blog' ); ?>
		<?php endwhile; ?>
		<?php endif; ?>
		<?php if (function_exists("pagination")) {
			pagination($additional_loop->max_num_pages);
		} ?>
	</div>
<?php get_footer(); ?>