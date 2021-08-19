<?php
defined('ABSPATH') || exit;
$Block_partners = getBlock_partners();
?>
<div class="siteWrapper partners">
  <section class="header-mainText">
    <h1><?php echo $Block_partners['title_partners']; ?></h1>
    <p><?php echo $Block_partners['desc_partners']; ?></p>
  </section>
  <section class="partners-items">
    <?php foreach ($Block_partners['items-partners'] as $Block_partners_1) : ?>
      <div class="partners-items_partner">
        <div class="img"><img alt="1" src="<?php echo $Block_partners_1['photo_items-partners']; ?>"></div>
        <div class="btn-green partners-btn"><a href="#"><?php echo $Block_partners_1['name_items-partners']; ?></a></div>
      </div>
    <?php endforeach; ?>
  </section>
</div>