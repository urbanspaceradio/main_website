<?php
defined('ABSPATH') || exit;
$block_contactPage = getBlock_contactPage();
?>
<footer class="footerWrapper">
	<div class="siteWrapper footer">
		<div class="footer-info">
			<div class="footer-info_item footerLogo">
				<img alt="USR" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logoLight.png">
			</div>
			<div class="footer-info_item">
				<div>ПРО RADIO</div>
           <?php
           wp_nav_menu(['theme_location' => 'menu_footer', 'container' => 'null', 'items_wrap' => '<ul class="%2$s">%3$s</ul>',]);
           ?>
			</div>
			<div class="footer-info_item">
				<div>СЛІДКУЙ</div>
				<ul>
					<li><a href="https://www.instagram.com/urban_space_radio/" target="_blank">instagram</a></li>
					<li><a href="https://www.facebook.com/urbanspaceradio" target="_blank">facebook</a></li>
				</ul>
			</div>
			<div class="footer-info_item">
				<div>СЛУХАЙ</div>
				<ul>
					<li><a href="https://podcasts.google.com/feed/aHR0cDovL3VyYmFuc3BhY2VyYWRpby5jb20vZmVlZC9wb2RjYXN0"
							 target="_blank">google podcasts</a></li>
					<li><a href="https://podcasts.apple.com/ua/podcast/urban-space-radio/id1459038329" target="_blank">apple
							podcasts</a></li>
				</ul>
			</div>
			<div class="footer-info_item">
				<div>КОНТАКТИ</div>
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
		<div class="footer-rights">
			Made in Ivano-Frankivsk<br/>&copy; <?php copyright_date() ?> Urban Space Radio. All Rights Reserved <br/>
			<span class="developed">Developed by
			<a href="https://www.facebook.com/nazar.meInychenko/"
				target="_blank">Nazar Melnychenko</a> &
			<a href="https://www.facebook.com/roman.korvackiy/"
				target="_blank">Roman Korvatskyi</a>
		</span>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
<script>
    $(window).load(function () {
        $(".preLoader").fadeOut("slow");
    });
</script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-72089923-1', 'auto');
	ga('send', 'pageview');
	ga('send', 'event', 'Button', 'Play', 'PlayRadio');
</script>
</body>
</html>
