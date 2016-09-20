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

	<p id="post-hierarchy">
		Home > Our Blog > <?php the_title(); ?><br />
	</p>

	<article class="post">

		<div id="jumbotron">

			<div id="jumbotron-left">
				<h3>OUR BLOG</h3>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
				<?php the_post_thumbnail(); ?>
			</div>

			<div id="jumbotron-space"></div>

			<div id="jumbotron-right">
				<?php echo get_avatar( get_the_author_meta( 'ID' ) , 90 ); ?>
				<h6>Written by</h6>
				<h4><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></h4>
				<h4 style="font-weight: 400;"><?php the_author_meta('description'); ?></h4>
				<span class="post-date"><?php the_time('jS F Y'); ?></span>
			</div>

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
				<!--<i>This is a blog post by Floh member, <?php the_author(); ?>. Learn more at www.floh.in (a network that connects singles in real life).</i>-->
				<?php the_content(); ?>
			</div>

			<div id="post-space"></div>

			<?php get_sidebar('popular-posts'); ?>
			
		</post>

	</article>

	<?php endwhile;

else :
	echo '<p>No posts found</p>';

endif;

?>

</div> <!-- container -->

<?php get_footer(); ?>