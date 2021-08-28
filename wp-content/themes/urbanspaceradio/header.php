<?php
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<base href="./">
	<title><?php bloginfo('name');
     echo is_home() ? '' : ' / ' . get_the_title(); ?></title>
	<meta content="" name="description">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<meta content="path/to/image.jpg" property="og:image">
	<!--	<link href="--><?php //echo get_template_directory_uri(); ?><!--assets/img/favicon/favicon.ico" rel="icon">-->
	<!--	<link href="-->
  <?php //echo get_template_directory_uri(); ?><!--assets/img/favicon/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">-->
	<meta content="#000" name="theme-color">
  <?php wp_head(); ?>
</head>
<body>
<div class="preLoader">
	<div class="preLoader-img">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/preloader_img.png" alt="">
	</div>
	<div class="preLoader-text">загрузка...</div>
</div>
<header class="headerWrapper">
	<div class="siteWrapper header">
		<div class="header-logo">
			<a href="<?php echo home_url() ?>">
				<img alt="USR" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logoDark.png">
			</a>
		</div>
		<nav>
			<ul class="header-navigation">
           <?php wp_nav_menu(['theme_location' => 'menu_header', 'container' => null, 'items_wrap' => '%3$s']); ?>
			</ul>
		</nav>
	</div>
</header>