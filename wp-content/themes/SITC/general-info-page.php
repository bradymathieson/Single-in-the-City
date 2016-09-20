<?php 

/* 
Template Name: General Info 
*/

get_header(); 

?>

<div class="search-bar">
	<div class="container">
		<?php get_search_form(); ?>
	</div>
</div>

<div class="container">

<?php if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post page">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</article>

	<?php endwhile;

else :
	echo '<p>No posts found</p>';

endif;

?>

</div> <!-- container -->

<?php get_footer(); ?>