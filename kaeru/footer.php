	</div>
	<footer class="footer">
		<div class="wrapper cf">
			<p class="footer_logo fade"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/footer_logo.png' ); ?>" height="18" width="144" alt="かえる調剤薬局"></a></p>
			<nav class="footer_sitemap cf">
				<ul class="cf">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
					<li><a href="<?php echo esc_url( home_url( '/#info' ) ); ?>">店舗情報</a></li>
					<li><a href="<?php echo esc_url( home_url( '/greeting/' ) ); ?>">ごあいさつ</a></li>
					<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">かえるだより</a></li>
					<li><a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">採用情報</a></li>
					<!-- <li><a href="">会社概要</a></li> -->
				</ul>
			</nav>
		</div>
		<p class="copyright"><span class="cmark">&copy;</span> Kaeru pharmacy. All Right Reserved</p>
	</footer>
	<?php wp_footer(); ?>
</div>
</body>
</html>