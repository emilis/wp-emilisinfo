<?php  load_theme_textdomain('whiteasmilk'); ?>
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php 
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	wp_head(); 
	?>
</head>
<body>

<div id="page">
<div id="header">
	<img id="logo" src="http://emilis.info/other/emilis_neoficiali7-50-gray.jpg" align="left">
	<h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a></h1>
	<p id="blog_description"><?php bloginfo('description'); ?></p>
	
</div>
<hr class="hrhide" />
