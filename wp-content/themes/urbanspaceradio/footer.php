<?php
defined('ABSPATH') || exit;
?>
<footer class="footerWrapper">
  <div class="siteWrapper footer">
    <div class="footer-info">
      <div class="footer-info_item">
        <img alt="USR" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logoLight.png">
      </div>
      <div class="footer-info_item">
        <div>ПРО RADIO</div>
        <?php
        wp_nav_menu( [
          'theme_location'  => 'menu_footer',
          'container'       => 'null',
          'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
        ] );
        ?>
<!--        <ul>-->
<!--          <li><a href="#">про нас</a></li>-->
<!--          <li><a href="#">партнери</a></li>-->
<!--          <li><a href="#">події</a></li>-->
<!--        </ul>-->
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
          <li><a href="https://podcasts.google.com/feed/aHR0cDovL3VyYmFuc3BhY2VyYWRpby5jb20vZmVlZC9wb2RjYXN0" target="_blank">google podcasts</a></li>
          <li><a href="https://podcasts.apple.com/ua/podcast/urban-space-radio/id1459038329" target="_blank">apple podcasts</a></li>
        </ul>
      </div>
      <div class="footer-info_item">
        <div>КОНТАКТИ</div>
        <ul>
          <li><a href="#">+ 38 (096) 265 82 71</a></li>
<!--          <li><a href="tel:--><?php //echo $phone_us ['business_number']; ?><!--">-->
<!--              --><?php //echo $phone_us ['business_number']; ?><!--</a></li>-->
          <li><a href="#">media.urbanspaceradio@gmail.com</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-rights">
      Made in Ivano-Frankivsk<br/>© 2021 Urban Space Radio. All Rights Reserved <br/>
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
</body>
</html>
