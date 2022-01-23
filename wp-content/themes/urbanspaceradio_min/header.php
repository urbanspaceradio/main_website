<?php
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta <?php bloginfo('charset'); ?>>
	<base href="./">
	<title><?php bloginfo('name');
     echo is_home() ? '' : ' / ' . get_the_title(); ?></title>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	  })(window,document,'script','dataLayer','GTM-TZSH5JW');</script>
  <!-- End Google Tag Manager -->
  <!-- Facebook Pixel Code -->
  <script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		  n.queue=[];t=b.createElement(e);t.async=!0;
		  t.src=v;s=b.getElementsByTagName(e)[0];
		  s.parentNode.insertBefore(t,s)}(window, document,'script',
		  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '349752110169807');
	  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
                 src="https://www.facebook.com/tr?id=349752110169807&ev=PageView&noscript=1"
    /></noscript>
  <!-- End Facebook Pixel Code -->
  <meta name="facebook-domain-verification" content="83zs5sacudrn4p3hqpgr5bgr20p5mc" />
	<meta content="urban подкасти, актуальні подкасти, свіжі подкасти, урбан подкасти, подкасти українською, подкасти на українській, подкасти українським, подкасти на українском язике, подкасти слухати, подкасти на google podcasts, подкасти apple podcasts, google podcasts, apple podcasts, топ подкасти україни, цікаві подкасти, подкасти це, подкасті, найкращі українські подкасти, підкасти це, де слухати подкасти, подкасти слухати, сайт з подкастами, аудіо книги скачать, що таке подкаст, аудіо книги, google подкасти, подкасти про психологію, легкі подкасти, urban space radio, urban space 100, USR, урбан радіо" name="keywords">
  <meta content="Радіо нового формату, в ефірі якого звучить українська сучасна музика і програми на тему урбаністики та розвитку міста" name="description">
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
<!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZSH5JW"
                  height="0" width="0" style="display:none;visibility:hidden">
  </iframe>
</noscript>
<!-- End Google Tag Manager (noscript)-->
<div class="preLoader">
	<div class="preLoader-img">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/preloader_img.gif" alt="">
	</div>
</div>
<header class="headerWrapper">
	<div class="siteWrapper header">
		<div class="header-logo">
			<a href="<?php echo home_url() ?>">
				<img alt="USR" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logoDark.svg">
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
				<li><a href="<?php echo site_url('/events'); ?>">новини</a></li>
				<div onclick="runWfpWdgt('https://secure.wayforpay.com/button/b569b98266d95');" class="button-donation">
					<span class="button-donation donat-header">підтримати</span>
				</div>
				<li id="mobileMenu" class="menu">
					<span></span>
				</li>
			</ul>
		</nav>
		<div class="mobileMenu">
			<div class="mobileMenu_header">
				<img alt="USR" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logoLight.svg">
				<span class="closeMenuBtn">&#x2715</span>
			</div>
			<ul class="mobileMenu-menu">
           <?php wp_nav_menu(['theme_location' => 'menu_header', 'container' => null, 'items_wrap' => '%3$s']); ?>
				<li onclick="runWfpWdgt('https://secure.wayforpay.com/button/b569b98266d95');">підтримати</li>
			</ul>
			<div class="divider"></div>
			<div class="footer-info_item mobileMenu-contacts">
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