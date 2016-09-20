<?php 

get_header(); 

?>

<div class="search-bar">
	<div class="container">
		<?php get_search_form(); ?>
	</div>
</div>

<div class="container">

	<div id="header-level-1">
		<div id="recent-posts">
			<?php echo do_shortcode('[recent_post_slider limit="3" design="design-1" dots="false" show_author="false" show_date="false" show_content="false" show_category_name="false"]'); ?>
		</div>

		<div id="ask-sim">
			<h2>ASK SIM</h2>
			<img src="<?php echo get_bloginfo('template_directory'); ?>/static_images/ask-sim.png">
			<center><a href="category/ask-sim">Ask Sim</a>
			<p>Can I date two men at the same time?</p></center>
		</div>
	</div>

	<div id="header-level-2">
		<div id="video-dating">
			<a href="<?php echo get_category_link(42); ?>"><h2>VIDEO DATING DIARIES</h2></a>
			<?php
				$latestVD = new WP_Query('cat=42&posts_per_page=1');
				if ($latestVD->have_posts()) :
					while ($latestVD->have_posts()) : $latestVD->the_post(); ?>


					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<h1><?php the_title(); ?></h1>
					</a>

					<?php

				endwhile;

				else :
					echo '<p>none</p>';

				endif;
			?>
		</div>
		<div id="what-were-reading">
			<a href="<?php echo get_category_link(43); ?>"><h2>WHAT WE ARE READING</h2></a>
			<?php
				$latestWWAR = new WP_Query('cat=43&posts_per_page=1');
				if ($latestWWAR->have_posts()) :
					while ($latestWWAR->have_posts()) : $latestWWAR->the_post(); ?>


					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<h1><?php the_title(); ?></h1>
					</a>

					<?php

				endwhile;

				else :
					echo '<p>none</p>';

				endif;
			?>
		</div>
		<div id="passion-poll">
			<h2>PASSION POLL</h2>
			<?php if (function_exists('vote_poll') && !in_pollarchive()): ?>
			<div id="current-poll">
				<?php get_poll(2); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>

	<div id="header-level-3">
		<div id="true-love-stories">
			<a href="<?php echo get_category_link(41); ?>"><h2>TRUE LOVE STORIES</h2>
			<?php
				$latestTLS = new WP_Query('cat=41&posts_per_page=1');
				if ($latestTLS->have_posts()) :
					while ($latestTLS->have_posts()) : $latestTLS->the_post(); ?>


					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<h1><?php the_title(); ?></h1>
					</a>

					<?php

				endwhile;

				else :
					echo '<p>none</p>';

				endif;
			?>
		</div>
		<div id="floh-in-pictures">
			<a href="floh-in-pictures"><h2>FLOH IN PICTURES</h2></a>
			<div class="fip-home-gallery">
				<?php
					$gallery = get_post_gallery_images(1150);
					$output = '';
					for ($photo_id = 0; $photo_id < 3; ++$photo_id) {
						$output .= '<img src="'.$gallery[$photo_id].'" />';
					}
					$output .= '</div><div class="fip-home-gallery">';
					for ($photo_id = 0; $photo_id < 3; ++$photo_id) {
						$output .= '<img src="'.$gallery[$photo_id+3].'" />';
					}
					echo $output;
				?>
			</div> <!-- fip-home-gallery -->
			<h3>Here is some text for the gallery</h3>
		</div> <!-- floh-in-pictures -->
		<div id="our-blog">
			<a href="<?php echo get_category_link(44); ?>"><h2>OUR BLOG</h2></a>
			<?php
				$latestVD = new WP_Query('cat=44&posts_per_page=1');
				if ($latestVD->have_posts()) :
					while ($latestVD->have_posts()) : $latestVD->the_post(); ?>


					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
						<h1><?php the_title(); ?></h1>
					</a>

					<?php

				endwhile;

				else :
					echo '<p>none</p>';

				endif;
			?>
		</div>
	</div>

	<div id="header-level-4">
		<div id="upcoming-events">
			<h2>UPCOMING FLOH EVENTS</h2>
		</div>
		<div id="right-4-sidebar">
			<div id="our-journey">
				<a href="#">
					<h3 style="font-size: 1.7em;">Read Our Journey</h3>
					<p>Floh - How we make it happen?</p>
				</a>
			</div>
			<div id="subscribe">
				<div>
					<form class="es_shortcode_form">
						<div class="es_msg" style="display:none;"><span id="es_msg_pg"></span></div>
						<div class="es_lablebox"><h3>Subscribe to get updates to your email inbox</h3></div>
						<div class="es_textbox">
							<input class="es_textbox_class" name="es_txt_email_pg" id="es_txt_email_pg" onkeypress="if(event.keyCode==13) es_submit_pages('http://localhost:8888/wordpress')" value="" maxlength="225" type="text">
						</div>
						<div class="es_button">
							<input class="es_textbox_button" name="es_txt_button_pg" id="es_txt_button_pg" onClick="return es_submit_pages('http://localhost:8888/wordpress')" value="Subscribe" type="button">
						</div>
						<input name="es_txt_name_pg" id="es_txt_name_pg" value="" type="hidden"><input name="es_txt_group_pg" id="es_txt_group_pg" value="" type="hidden">
					</form>
				</div>			
			
			
			</div>
		</div>
	</div>


</div> <!-- container -->

<?php get_footer(); ?>