<?php
defined('ABSPATH') || exit;
$block_contactPage = getBlock_contactPage();
?>

<div id="scrollUp" class="scrollUp">
  <span>&#9650;</span>
</div>

<footer class="footerWrapper">
  <div class="siteWrapper footer">
    <div class="footer-info">
      <div class="footer-info_item footerLogo">
        <img alt="USR" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-uxr_white.svg">
      </div>
      <div class="footer-info_item aboutRadio">
        <div>ПРО RADIO</div>
        <?php
        wp_nav_menu(['theme_location' => 'menu_footer', 'container' => 'null', 'items_wrap' => '<ul class="%2$s">%3$s</ul>',]);
        ?>
      </div>
      <div class="footer-info_item desktopMenu">
        <div>СЛІДКУЙ</div>
        <ul>
          <li><a href="https://www.instagram.com/urban_space_radio/" target="_blank">instagram</a></li>
          <li><a href="https://www.facebook.com/urbanspaceradio" target="_blank">facebook</a></li>
        </ul>
      </div>
      <div class="footer-info_item desktopMenu">
        <div>СЛУХАЙ</div>
        <ul>
          <li><a href="https://podcasts.google.com/feed/aHR0cDovL3VyYmFuc3BhY2VyYWRpby5jb20vZmVlZC9wb2RjYXN0"
                 target="_blank">google podcasts</a></li>
          <li><a href="https://podcasts.apple.com/ua/podcast/urban-space-radio/id1459038329" target="_blank">apple
              podcasts</a></li>
          <li><a href="https://www.youtube.com/channel/UCV5o1ECG2NtdbVJoihPPsQA" target="_blank">YouTube</a></li>
        </ul>
      </div>
      <div class="footer-info_item desktopMenu">
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
    <div class="footer-mobileMenu">
      <a href="https://podcasts.google.com/feed/aHR0cDovL3VyYmFuc3BhY2VyYWRpby5jb20vZmVlZC9wb2RjYXN0" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/socials/googlePodcast.svg"
             alt="Google Podcast">
      </a>
      <a href="https://podcasts.apple.com/ua/podcast/urban-space-radio/id1459038329" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/socials/applePodcast.svg" alt="Apple Podcast">
      </a>
      <a href="https://www.facebook.com/urbanspaceradio/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/socials/facebook.svg" alt="Facebook">
      </a>
      <a href="https://www.instagram.com/urban_space_radio/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/socials/instagram.svg" alt="Instagram">
      </a>
      <div class="footer-mobileContacts">
        <a href="mailto:<?php echo get_field('mainEmail-contactPage', '1350'); ?>">
          <?php echo get_field('mainEmail-contactPage', '1350'); ?></a><br>
        <a href="tel:<?php echo get_field('mainMobile-contactPage', '1350'); ?>">
          <?php echo get_field('mainMobile-contactPage', '1350'); ?></a>
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
			</span></br>
      <span class="developed">Design by
			<a href="https://directa.cc/"
         target="_blank">directa bureau</a>
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
</body>
</html>
