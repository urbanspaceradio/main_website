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
	<script type="text/javascript" id="widget-wfp-script"
			  src="https://secure.wayforpay.com/server/pay-widget.js?ref=button"></script>
	<script type="text/javascript">function runWfpWdgt(url) {
           var wayforpay = new Wayforpay();
           wayforpay.invoice(url);
       }</script>
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
				<div onclick="runWfpWdgt('https://secure.wayforpay.com/button/b569b98266d95');" class="button-donation">
					<span class="button-donation donat-header">підтримати</span>
				</div>
			</ul>

			<ul class="mobileNavigation">
				<li id="mobileMenu" class="menu">меню</li>
				<li><a href="<?php echo site_url('/contacts'); ?>">контакти</a></li>
				<div onclick="runWfpWdgt('https://secure.wayforpay.com/button/b569b98266d95');" class="button-donation">
					<span class="button-donation donat-header">підтримати</span>
				</div>
			</ul>
		</nav>
		<div class="mobileMenu">
			<div class="mobileMenu_header">
				<img alt="USR" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logoLight.png">
				<span class="closeMenuBtn">&#x2715</span>
			</div>
			<ul class="mobileMenu-menu">
           <?php wp_nav_menu(['theme_location' => 'menu_header', 'container' => null, 'items_wrap' => '%3$s']); ?>
				<li onclick="runWfpWdgt('https://secure.wayforpay.com/button/b569b98266d95');">підтримати</li>
			</ul>
			<div class="divider"></div>
			<div class="footer-info_item mobileMenu-contacts">
				<div class="title">КОНТАКТИ</div>
				<ul>
					<li>
						<a href="tel:<?php echo get_field('mainMobile-contactPage', '1350'); ?>">
                    <?php echo get_field('mainMobile-contactPage', '1350'); ?></a>
					</li>
					<li>
						<a href="mailto:<?php echo get_field('mainEmail-contactPage', '1350'); ?>">
                    <?php echo get_field('mainEmail-contactPage', '1350'); ?></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>