<div class="blog_side">
	<figure class="blog_title"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/fig_blog_title.png' ); ?>" height="260" width="186" alt="かえるだより"></figure>
	<h2 class="side_hdg">カテゴリー</h2>
	<ul class="side_ul fade">
		<?php wp_list_categories('taxonomy=blog_category&title_li=&hierarchical=0&show_option_none=""'); ?>
	</ul>
	<h2 class="side_hdg">最近の投稿</h2>
	<ul class="side_ul fade">
		<?php
			$goodslist = get_posts( array(
				'post_type' => get_post_type(),
				'posts_per_page' => 5
			));
			foreach( $goodslist as $post ):setup_postdata( $post );
		?>
			<li><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></li>
		<?php endforeach;
		wp_reset_postdata();?>
	</ul>
	<h2 class="side_hdg">アーカイブ</h2>
	<ul class="side_ul fade">
		<?php wp_get_archives(array('post_type' => get_post_type(), 'type' => 'monthly')); ?>
	</ul>
</div>