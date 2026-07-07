<?php
/**
 * Theme footer.
 *
 * @package Kaeru_Renewal
 */
?>
</main>
<footer class="site-footer">
	<div class="site-footer__inner">
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>


