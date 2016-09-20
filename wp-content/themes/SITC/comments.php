<?php if($comments) : ?>
	<h3>Comments</h3>
	<ul id="comment-section">
		<?php foreach ($comments as $comment) : ?>
		<li id="comment-<?php comment_ID(); ?>">
			<?php if ($comment->comment_approved == '0') : ?>
				<p>Comment undergoing moderation.</p>
			<?php endif; ?>
			<?php comment_text(); ?>
			<p id="comment-author"><?php comment_author_link(); ?> on <?php comment_date(); ?></p>
		</li>
		<?php endforeach; ?>
	</ul>
<?php else : ?>
	<p>Be the first to comment.</p>
<?php endif; ?>

<?php if (comments_open()) : ?>
	<?php if (get_option('comment_registration') && !user_ID) : ?>
		<p>You must be logged in to comment.</p>
	<?php else : ?>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment-form">
			<?php if($user_ID) : ?>
				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a></p>
			<?php else : ?>
				<p>
					<label for="author">Name</label><br>
					<input type="text" name="author" id="comment-author-form" value="<?php echo $comment_author; ?>" />
				</p>
				<p>
					<label for="email">Email</label><br>
					<input type="email" name="email" id="comment-email" value="<?php echo $comment_author_email; ?>" />
				</p>
				<p>
					<label for="url">Website</label><br>
					<input type="text" name="url" id="comment-url" value="<?php echo $comment_author_url; ?>" />
				</p>
			<?php endif; ?>
			<p>
				<label for="comment">Comment</label>
				<textarea name="comment" id="comment" rows="5"></textarea>
			</p>
			<p><input type="submit" name="submit" id="comment-submit" value="Submit" /></p>
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			<?php do_action('comment_form', $post->ID); ?>
		</form>
	<?php endif; ?>
<?php else : ?>
	<p>Comments currently closed.</p>
<?php endif; ?>
