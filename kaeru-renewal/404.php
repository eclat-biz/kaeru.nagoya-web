<?php
/**
 * 404 template.
 *
 * @package Kaeru_Renewal
 */

get_header();
?>
<section class="not-found">
	<h1><?php esc_html_e( 'ページが見つかりませんでした', 'kaeru-renewal' ); ?></h1>
	<p><?php esc_html_e( 'URLをご確認いただくか、トップページから目的のページをお探しください。', 'kaeru-renewal' ); ?></p>
	<p><a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'トップページへ戻る', 'kaeru-renewal' ); ?></a></p>
</section>
<?php
get_footer();
