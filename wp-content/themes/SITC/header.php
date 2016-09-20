<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link href='https://fonts.googleapis.com/css?family=Oswald:300,400' rel='stylesheet' type='text/css'> <!-- header font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> <!-- Open Sans -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- site-header -->
	<header class="site-header">
		<div class="container">
			<a href="<?php echo home_url(); ?>"><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>">
			<h1><?php bloginfo('name'); ?></h1></a>
			<h3><?php bloginfo('description') ?></h3>
		</div> <!-- container -->
	</header>
	