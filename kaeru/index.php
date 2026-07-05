<?php get_header(); ?>
	<section class="home_message">
		<h2>かえるのように元気に跳ねて“笑顔になれる場所”でありたい</h2>
		<p class="txt">「医薬の神」として知られる小さな神様・少彦名命。<br>
		その使者は“かえる”でした。<br>
		このまちの医療に貢献したい。<br>
		ご縁のある皆さまが、かえるのように元気に跳ねて、笑顔になれる場所でありたい。<br>
		そのような願いをこめて</p>
		<p class="txt">かえる調剤薬局です。</p>
	</section>
	<section class="home_news">
		<h2 class="home_hdg_01">かえる調剤薬局からのお知らせ</h2>
		<ul class="fade">
			<!-- <li><a href=""><span class="date">2016.02.03</span><span class="category">News</span><span class="title">薬剤師募集中</span></a></li>
			<li><a href=""><span class="date">2016.02.03</span><span class="category">News</span><span class="title">薬剤師募集中</span></a></li>
			<li><a href=""><span class="date">2016.02.03</span><span class="category">Blog</span><span class="title">薬剤師募集中</span></a></li>
			<li><a href=""><span class="date">2016.02.03</span><span class="category">News</span><span class="title">薬剤師募集中</span></a></li> -->
			<?php
				global $post;
				$args = array('post_type' => array('blog', 'news'), 'numberposts' => '4');
				$my_posts = get_posts($args);
				foreach ( $my_posts as $post ) : setup_postdata($post); ?>
				<li>
					<?php if(get_post_type_object(get_post_type())->name == 'blog'): ?>
						<a href="<?php echo esc_url( get_permalink() ); ?>">
					<?php endif;?>
					<span class="date"><?php echo esc_html( get_post_time( 'Y.m.d' ) ); ?></span><span class="category"><?php echo esc_html( get_post_type_object( get_post_type() )->label ); ?></span><span class="title"><?php echo esc_html( get_the_title() ); ?></span>
					<?php if(get_post_type_object(get_post_type())->name == 'blog'): ?>
						</a>
					<?php endif;?>
				</li>
			<?php endforeach; wp_reset_postdata(); ?>
		</ul>
	</section>
	<section id="info" class="home_info a_target">
		<h2 class="home_hdg_01">店舗情報</h2>
		<p class="address">〒453-0801 名古屋市中村区太閤5-5-21</p>
		<p class="holiday">処方せん受付時間 / 月・火・水・金　9：00-13:00,16:00-19：00 <br>
		木・土　9：00-13:00 <br>
		休日 / 日・祝<br>
		処方せん受付FAX / 052-414-7619</p>
	</section>
	<section class="home_contact">
		<h2 class="home_hdg_02">お問い合わせはこちら</h2>
		<p class="tel"><a href="tel:052-414-7618">052-414-7618</a></p>
		<div id="map-canvas" class="gmap"></div>
		<h2 class="home_hdg_02">公共交通機関をご利用の場合</h2>
		<p class="home_access">名古屋駅からは徒歩で約15分。<br>
		近鉄「米野駅」より徒歩5分、 または名古屋臨海高速鉄道あおなみ線「ささしまライブ駅」より徒歩6分。</p>
	</section>
	<p class="to_top fade"><a href="#top"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/ico_to_top.png' ); ?>" height="53" width="53" alt="ページトップ"><span>ページトップ</span></a></p>
<?php get_footer(); ?>



