<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/screen.css" media="screen" />
	<!--[if lt IE 9]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_nav_menu(array('container' => 'nav')); ?>	