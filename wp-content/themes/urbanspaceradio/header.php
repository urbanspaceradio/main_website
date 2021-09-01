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
	<meta content="#000" name="theme-color">
  <script type="text/javascript" id="widget-wfp-script" src="https://secure.wayforpay.com/server/pay-widget.js?ref=button"></script>
  <script type="text/javascript">function runWfpWdgt(url){var wayforpay=new Wayforpay();wayforpay.invoice(url);}</script>
  <?php wp_head(); ?>
</head>
<body>
<!--<div class="preLoader">-->
<!--	<div class="preLoader-img">-->
<!--		<img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/preloader_img.png" alt="">-->
<!--	</div>-->
<!--	<div class="preLoader-text">загрузка...</div>-->
<!--</div>-->
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