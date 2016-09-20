<?php get_header(); ?>

<div class="search-bar">
	<div class="container">
		<?php get_search_form(); ?>
	</div>
</div>

<div class="container">

<?php if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>

	<?php endwhile;

else :
	echo '<p>No posts found</p>';

endif;

?>

</div> <!-- container -->

<?php get_footer('extended'); ?>