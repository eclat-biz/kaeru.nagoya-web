<article class="blog_article">
	<p class="date"><?php echo esc_html( get_post_time( 'Y年m月d日' ) ); ?></p>
	<?php if ( is_post_type_archive() ): ?>
		<h2 class="title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>
	<?php else: ?>
		<h1 class="title"><?php echo esc_html( get_the_title() ); ?></h1>
	<?php endif; ?>
	<div class="entry">
		<?php the_content(); ?>
	</div>
	<p class="category">カテゴリー ｜ <?php if( get_the_terms( get_the_ID(), 'blog_category' )): ?><?php the_terms( get_the_ID(), 'blog_category', '', '&nbsp;' ); ?><?php endif; ?></p>
</article>