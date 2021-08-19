<?php
defined( 'ABSPATH' ) || exit;
$mostPopular = getBlock_mostPopular();
?>
<section class="mostPopular">
  <h2><?php echo $mostPopular['mostPopular-title']; ?></h2>
  <div class="mostPopular-podcasts">
    <a class="podcastCart" href="#">
      <img alt="1" src="assets/img/temp/podcasts/1.png">
      <p>сам собі людина</p>
    </a>
    <a class="podcastCart" href="#">
      <img alt="2" src="assets/img/temp/podcasts/2.png">
      <p>ХТОЗНАЯК</p>
    </a>
    <a class="podcastCart" href="#">
      <img alt="3" src="assets/img/temp/podcasts/3.png">
      <p>ФОРМУЛА</p>
    </a>
    <a class="podcastCart" href="#">
      <img alt="4" src="assets/img/temp/podcasts/4.png">
      <p>homes ror...</p>
    </a>
    <a class="podcastCart" href="#">
      <img alt="5" src="assets/img/temp/podcasts/5.png">
      <p>планета катастроф</p>
    </a>
    <a class="podcastCart" href="#">
      <img alt="6" src="assets/img/temp/podcasts/6.png">
      <p>Мох</p>
    </a>
  </div>
  <div class="btn mostPopular-btn">
    <a href="#">переглянути усі наші подкасти</a>
  </div>
</section>
