<footer class="site-footer">
	<div class="container">
		<nav class="footer-nav">
			<div id="download-icons">
				<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/footer_assets/app-store.png"></a>
				<a href="#"><img style="margin-right: 0px;" src="<?php echo get_bloginfo('template_directory'); ?>/footer_assets/play-store.png"></a>
			</div>
			<div id="footer-hr"></div>
			<div id="social-icons">
				<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/footer_assets/footer-fb-logo.png"></a>
				<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/footer_assets/footer-tw-logo.png"></a>
				<a href="#"><img style="margin-right: 0px;" src="<?php echo get_bloginfo('template_directory'); ?>/footer_assets/footer-mail-logo.png"></a>
			</div>
			
			<?php
				$args = array(
					'theme_location' => 'footer'
				);
			?>

			<?php wp_nav_menu( $args ); ?>
			<p id="copyright">&copy; Floh Network Pvt. Ltd. <?php echo date('Y'); ?></p>
		</nav>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>