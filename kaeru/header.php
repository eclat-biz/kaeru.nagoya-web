<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<!-- InstanceEndEditable -->
	<?php wp_head(); ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-72905947-1', 'auto');
		ga('send', 'pageview');
	</script>
</head>
<body id="top" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="skrollr-body">
	<div id="bg1" class="parallax" data-0="background-position:0px 0px;" data-end="background-position:0 -1500px;"></div>
	<div id="bg2" class="parallax" data-0="background-position:0px 0px;" data-end="background-position:0 -400px;"></div>
	<div id="bg3" class="parallax" data-0="background-position:0px 0px;" data-end="background-position:0 -200px;"></div>
	<header class="header fade">
		<div class="wrapper cf">
			<h1 class="header_logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/header_logo_l.png' ); ?>" height="264" width="264" alt="かえる調剤薬局"></a></h1>
			<h1 class="header_logo_fixed"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/header_logo_s.png' ); ?>" height="92" width="104" alt="かえる調剤薬局"></a></h1>
			<nav class="gnav">
				<ul class="gnav_ul cf">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<figure><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gn_home.png' ); ?>" height="40" width="70" alt="ホーム"></figure>
						<p class="en">Home</p>
						<p class="jp">ホーム</p>
					</a></li>
					<li><a href="<?php echo esc_url( home_url( '/#info' ) ); ?>">
						<figure><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gn_info.png' ); ?>" height="40" width="70" alt="店舗情報"></figure>
						<p class="en">Information</p>
						<p class="jp">店舗情報</p>
					</a></li>
					<li><a href="<?php echo esc_url( home_url( '/greeting/' ) ); ?>">
						<figure><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gn_greeting.png' ); ?>" height="40" width="70" alt="ごあいさつ"></figure>
						<p class="en">Greeting</p>
						<p class="jp">ごあいさつ</p>
					</a></li>
					<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">
						<figure><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gn_blog.png' ); ?>" height="40" width="70" alt="かえるだより"></figure>
						<p class="en">Blog</p>
						<p class="jp">かえるだより</p>
					</a></li>
					<li><a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>">
						<figure><img src="<?php echo esc_url( get_template_directory_uri() . '/images/gn_recruit.png' ); ?>" height="40" width="70" alt="採用情報"></figure>
						<p class="en">Recruit</p>
						<p class="jp">採用情報</p>
					</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<?php if( is_home() ): ?><figure class="home_catch"></figure><?php endif; ?>
	<div class="contents cf">
