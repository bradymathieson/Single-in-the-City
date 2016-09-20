<?php get_header(); ?>

<div class="search-bar">
	<div class="container">
		<?php get_search_form(); ?>
	</div>
</div>

<div class="container">

	<div id="archive-header">

		<?php
			if (is_author()) {
				the_post();
				echo get_the_author();
				rewind_posts();
			} elseif (is_tag()) {
				single_tag_title();
			} elseif (is_category()) {
				?>
				<h3><?php single_cat_title(); ?></h3>
				<p><b><?php echo category_description(); ?></b></p>
				
				<?php
			}
		?>

	</div> <!-- archive-header -->

	<?php if (is_category('ask-sim')) { ?>
		<?php echo do_shortcode('[contact-form-7 id="1175" title="Ask Sim form"]'); ?>
	<?php } ?>

	<div style="display:flex;">
		<?php

			$count = 0;

			if (have_posts()) :
				while (have_posts()) : the_post(); ?>

				<?php if ($count == 3) {
					$count = 0;
					?> </div><div style="display:flex"><?php
				} ?>

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

				<?php ++$count; ?>

				<?php endwhile;

			else :
				echo '<p>No posts found</p>';

			endif;

		?>
	</div> <!-- archive-results -->

</div> <!-- container -->

<?php get_footer(); ?>