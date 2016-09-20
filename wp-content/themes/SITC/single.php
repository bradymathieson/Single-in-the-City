<?php get_header(); ?>

<div class="search-bar">
	<div class="container">
		<?php get_search_form(); ?>
	</div>
</div>

<div class="container">

<?php

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<?php if(!in_category('ask-sim')) { ?>

	<p id="post-hierarchy">
		Home > 

		<?php 

		if (has_category()) {
			foreach (get_the_category() as $category) echo $category->cat_name; 
			echo ' > ';
		}

		?> <?php the_title(); ?><br />
	</p>

	<article class="post">

		<div id="jumbotron">

			<div id="jumbotron-left">
				<h3><?php foreach (get_the_category() as $category) echo strtoupper($category->cat_name); ?></h3>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
				<?php the_post_thumbnail(); ?>
			</div>

			<div id="jumbotron-space"></div>

			<?php get_sidebar('author-info'); ?>

		</div>

		<div id="post">

			<div id="post-content">
				<div id="post-social-icons">

					<a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=FlohNetwork" title="Share on Twitter" rel="nofollow" target="_blank">
						<img src="<?php echo get_bloginfo('template_directory'); ?>/share_icons/twitter-share.png" />
					</a>
					<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>">
						<img src="<?php echo get_bloginfo('template_directory'); ?>/share_icons/facebook-share.png" />
					</a>

				</div>
				<?php the_content(); ?>
			</div>

			<div id="post-space"></div>

			<?php get_sidebar('popular-posts'); ?>
			
		</div>

	</article>

	<?php } else { ?>

	<article class="top-ask">
		<div id="jumbotron-left">
			<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?><br />
			<h2><?php the_title(); ?></h2>
		</div>
		<div id="jumbotron-space"></div>
		<div id="jumbotron-right">
			<div id="author-acronym"><?php 
				$author = explode(" ", get_the_author());
				$acronym = "";

				foreach ($author as $name) {
					$acronym .= strtoupper($name[0]);
				}

				echo $acronym;
			?></div>
			<h6>Asked by</h6>
			<h4><?php the_author(); ?></h4>
			<span class="post-date"><?php the_time('jS F Y'); ?></span>
		</div>
	</article>
	<article class="post">
		<div id="post">

			<div id="post-content">
				<div id="post-social-icons">

					<a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=FlohNetwork" title="Share on Twitter" rel="nofollow" target="_blank">
						<img src="<?php echo get_bloginfo('template_directory'); ?>/share_icons/twitter-share.png" />
					</a>
					<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>">
						<img src="<?php echo get_bloginfo('template_directory'); ?>/share_icons/facebook-share.png" />
					</a>

				</div>
				<?php the_content(); ?>
				<?php echo do_shortcode('[contact-form-7 id="1175" title="Ask Sim form"]'); ?>
				<div id="other-asks">
					<?php
						$count = 0;
						$random = new WP_Query('cat=45&orderby="rand"&posts_per_page=6');

						if ($random->have_posts()) :
							while ($random->have_posts()) : $random->the_post(); ?>

								<?php if ($count == 2) {
									$count = 0;
									?></div><div id="other-asks"><?php
								} ?>
								
								<article class="search-result" style="height: 300px; width: 45%; padding: 10px;">
									<a href="<?php the_permalink(); ?>">
									<h3><?php the_title(); ?></h3>
									<?php the_excerpt(30); ?>
									</a>
								</article>

								<?php ++$count; ?>
								
							<?php endwhile;
							else :
								echo '<p>No posts</p>';
							endif;

					?>
				</div> <!-- other-asks -->

			</div>

			<div id="post-space"></div>

			<?php get_sidebar('popular-posts'); ?>
			
		</div>
	</article>

	<?php } ?>


	<?php endwhile;

else :
	echo '<p>No posts found</p>';

endif;

?>

<br><?php comments_template(); ?> 

</div> <!-- container -->

<?php get_footer('extended'); ?>