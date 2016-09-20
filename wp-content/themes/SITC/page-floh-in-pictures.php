<?php 

get_header(); 

?>

<div class="search-bar">
	<div class="container">
		<?php get_search_form(); ?>
	</div>
</div>

<div class="container">

	<p id="post-hierarchy">
		Home > Floh in Pictures<br />
	</p>
	<h3>FLOH IN PICTURES</h3>
	<p><b>This section is a placeholder! Put whatever text you want here!</b></p>

	<div id="fip">

		<?php

			if (have_posts()) :
				while (have_posts()) : the_post();

			?>

			<?php	
					the_content();

				endwhile;

			else :
				echo "Goodbye!";

			endif;


		?>



	</div> <!-- fip -->

	<?php get_sidebar('popular-posts'); ?>

</div> <!-- container -->

<?php get_footer(); ?>