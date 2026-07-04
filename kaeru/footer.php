	</div>
	<footer class="footer">
		<div class="wrapper cf">
			<p class="footer_logo fade"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_logo.png" height="18" width="144" alt="かえる調剤薬局"></a></p>
			<nav class="footer_sitemap cf">
				<ul class="cf">
					<li><a href="<?php echo home_url(); ?>">ホーム</a></li>
					<li><a href="<?php echo home_url(); ?>#info">店舗情報</a></li>
					<li><a href="<?php echo home_url(); ?>/greeting/">ごあいさつ</a></li>
					<li><a href="<?php echo home_url(); ?>/blog/">かえるだより</a></li>
					<li><a href="<?php echo home_url(); ?>/recruit/">採用情報</a></li>
					<!-- <li><a href="">会社概要</a></li> -->
				</ul>
			</nav>
		</div>
		<p class="copyright"><span class="cmark">&copy;</span> Kaeru pharmacy. All Right Reserved</p>
	</footer>
	<?php
		wp_enqueue_script('skrollr', get_template_directory_uri().'/js/skrollr.min.js', array('jquery'), '0.6.30');
	?>
	<?php if( is_home() ):
		wp_enqueue_script('bgswitcher', get_template_directory_uri().'/js/jquery.bgswitcher.js', array('jquery'), '0.4.30');
	 ?>
		<script type="text/javascript">
			$(function($) {
				$(".home_catch").bgswitcher({
					images: ["<?php echo get_template_directory_uri(); ?>/images/fig_slide01.jpg", "<?php echo get_template_directory_uri(); ?>/images/fig_slide02.jpg", "<?php echo get_template_directory_uri(); ?>/images/fig_slide03.jpg"],
				});
			});
		</script>
	<?php endif;?>
	<?php wp_footer(); ?>
	<script>
		//skrollrをリセット
		jQuery(window).load(function($) {
  var s = skrollr.init();
});
	</script>
</div>
</body>
</html>