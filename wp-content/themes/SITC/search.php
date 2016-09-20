<?php get_header(); ?>

<div class="search-bar-on-page">
	<div class="container">
		<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
			<div>
				<input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Search the site" />
				<input type="submit" id="searchsubmit" value="Search" class="btn" style="display:none;" />
			</div>
		</form>
	</div>
</div>

<div class="container">

	<br /><h3 id="search-title">SEARCH RESULTS FOR <u><?php echo strtoupper($_GET['s']); ?></u></h3><br />

	<?php

	if (have_posts()) :
		while (have_posts()) : the_post(); ?>

		<article class="search-result">
			<a href="<?php the_permalink(); ?>">
			<?php 
			if (has_post_thumbnail()) { the_post_thumbnail(); }
			else {
				main_image();
			}
			?>
			<div class="search-text">
				<h2><?php the_title(); ?></h2></a>
				<?php the_excerpt(); ?>
				<span class="search-date"><?php the_time('jS F Y'); ?></span>
			</div>
		</article>

		<?php endwhile;

	else :
		echo '<p>No posts found</p>';

	endif;

	?>

</div>

</div> <!-- container -->

<?php get_footer(); ?>