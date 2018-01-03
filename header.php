<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php bloginfo('name'); ?></title>
	<!-- ——————————————————————————————————————————————————————————————————— META -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Description" content="<?php bloginfo('description'); ?>" />
	<meta name="Keywords" content="<?php bloginfo('name'); ?>, DJ" />
	<meta name="Author" content="Benjamin Wiederkehr" />
	<meta name="Copyright" content="2014" />
	<meta name="Distribution" content="Global" />
	<meta name="Language" content="en" />
	<meta name="Robots" content="ALL" />
	<meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:url" content="<?php echo get_settings('home'); ?>" />
	<!-- ——————————————————————————————————————————————————————————————————— IMAGE -->
	<link rel="image_src" href="<?php bloginfo('stylesheet_directory'); ?>/img/benjiblaze_logo_black.png" />
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/benjiblaze_logo_black.png" />
	<!-- ——————————————————————————————————————————————————————————————————— FAVICON -->
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png"/>
	<!-- ——————————————————————————————————————————————————————————————————— CSS -->
	<link rel="stylesheet" href="http://benjaminwiederkehr.com/assets/css/style.css" />
	<link rel="stylesheet" href="http://benjaminwiederkehr.com/assets/css/responsive.css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<!-- ——————————————————————————————————————————————————————————————————— JS -->
	<script type="text/javascript" src="//use.typekit.net/xwb8vud.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<!-- ——————————————————————————————————————————————————————————————————— WP HEAD -->
	<?php wp_head(); ?>
</head>

<body>