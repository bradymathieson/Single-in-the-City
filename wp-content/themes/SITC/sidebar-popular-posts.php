<div id="post-sidebar">
	<?php
	    if (function_exists('wpp_get_mostpopular'))
	        wpp_get_mostpopular('post_type="post"&thumbnail_width=400&stats_views=0&header="Popular Articles"&header_start="<h1>"&header_end="</h1>"&limit=4');
	?>
</div>