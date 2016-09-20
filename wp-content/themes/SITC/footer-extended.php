<div class="container">
	<div id="pre-footer">
		<div class="footer-page-pics">
			<a href="<?php echo get_category_link(41); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/static_images/true-love-stories.jpg" /></a>
			<a href="<?php echo get_category_link(42); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/static_images/video-dating-diaries.png" /></a>
			<a href="<?php echo get_category_link(43); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/static_images/what-we-are-reading.jpg" /></a>
			<a href="<?php echo get_category_link(44); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/static_images/our-blog.jpg" /></a>
		</div>
		<div class="footer-page-pics">
			<a href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/static_images/passion-poll.jpg" /></a>
			<a href="<?php echo get_category_link(45); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/static_images/ask-sim-footer.jpg" /></a>
			<a href="<?php echo get_category_link(46); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/static_images/love-lesson.jpg" /></a>
			<a href="/wordpress/floh-in-pictures"><img src="<?php echo get_bloginfo('template_directory'); ?>/static_images/floh-in-pictures.jpg" /></a>
		</div> <!-- footer-page-pics -->

		<br /><br /> <!-- remove later -->
		<hr> 

		<div id="footer-ad-text">
			<center>
				<h1>Click below to join Floh. You can also read more about how Floh connects people in real life.</h1>
				<a href="#" style="background-color:#D10F37;">JOIN FLOH</a><a href="#" style="background-color:#1E1E2D;">EXPLORE FLOH</a>
			</center>
		</div> <!-- footer-ad-text -->
	</div> <!-- pre-footer -->
</div><!-- container -->


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