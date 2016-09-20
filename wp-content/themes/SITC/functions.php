<?php

function import_files() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'import_files');

register_nav_menus(array(
	'footer' => __( 'Footer Menu'),
));

add_theme_support( 'custom-header');
add_theme_support( 'post-thumbnails' ); 

// Customize excerpt word count length
function custom_excerpt_length() {
	return 15;
}

add_filter('excerpt_length', 'custom_excerpt_length');

//function to call first uploaded image in functions file
function main_image() {
$files = get_children('post_parent='.get_the_ID().'&post_type=attachment
&post_mime_type=image&order=desc');
  if($files) :
    $keys = array_reverse(array_keys($files));
    $j=0;
    $num = $keys[$j];
    $image=wp_get_attachment_image($num, 'large', true);
    $imagepieces = explode('"', $image);
    $imagepath = $imagepieces[1];
    $main=wp_get_attachment_url($num);
		$template=get_template_directory();
		$the_title=get_the_title();
    print "<img src='$main' alt='$the_title' class='frame' />";
  endif;
}

?>