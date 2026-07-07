<?php
/**
 * Front page template.
 *
 * @package Kaeru_Renewal
 */

get_header();
?>
<section class="hero">
	<div class="hero__inner">
		<p class="hero__eyebrow"><?php esc_html_e( 'かえる調剤薬局', 'kaeru-renewal' ); ?></p>
		<h1><?php esc_html_e( '漢方相談とペット漢方を中心に、相談しやすい薬局へ。', 'kaeru-renewal' ); ?></h1>
		<p><?php esc_html_e( 'このテーマは新サイト制作の最小基盤です。文章・画像・導線は今後のフェーズで整備します。', 'kaeru-renewal' ); ?></p>
	</div>
</section>
<?php
get_footer();
