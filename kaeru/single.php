<?php get_header(); ?>
	<?php get_sidebar(); ?>
	<div class="blog_main">
		<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'content-blog' ); ?>
		<?php endwhile; endif; ?>
		<nav class="single_nav">
			<?php if(previous_post_link('%link', 'PREV')); ?>
			<?php if(next_post_link('%link', 'Next')); ?>
		</nav>
	</div>
<?php get_footer(); ?>
