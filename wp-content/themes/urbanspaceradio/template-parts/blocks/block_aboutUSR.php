<?php
defined( 'ABSPATH' ) || exit;
$Block_aboutUSR = getBlock_aboutUSR();
?>
<section>
  <div class="siteWrapper">
    <div class="aboutUSR">
      <div class="aboutUSR-header">
        <div class="aboutUSR-header_text">
          <h1><?php echo $Block_aboutUSR['aboutUSR-title']; ?></h1>
          <p><?php echo $Block_aboutUSR['aboutUSR-desc']; ?></p>
        </div>
        <div class="aboutUSR-header_img">
          <img alt="aboutUSR" src="<?php echo $Block_aboutUSR['aboutUSR-img']; ?>">
        </div>
      </div>
      <div class="aboutUSR-mainText">
        <p><?php echo $Block_aboutUSR['aboutUSR-text']; ?></p>
      </div>
      <div class="btn-green btn-green-main">
        <a href="#">підтримати проект</a>
      </div>
    </div>
  </div>
</section>
