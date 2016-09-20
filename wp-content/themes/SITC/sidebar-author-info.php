<div id="jumbotron-right">
	<?php echo get_avatar( get_the_author_meta( 'ID' ) , 90 ); ?>
	<h6>Written by</h6>
	<h4><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></h4>
	<h4 style="font-weight: 400;"><?php the_author_meta('description'); ?></h4>
	<span class="post-date"><?php the_time('jS F Y'); ?></span>
</div>