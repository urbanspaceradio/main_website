<?php
defined('ABSPATH') || exit;
$block_radaUSR_1 = getBlock_radaUSR();
?>

<div class="siteWrapper">
  <section class="about-supervisory">
    <div class="header-mainText">
      <h1><?php echo $block_radaUSR_1['title_radaUSR']; ?></h1>
      <p><?php echo $block_radaUSR_1['desc_radaUSR']; ?></p>
    </div>
    <div class="about-supervisory_items">
      <?php foreach ($block_radaUSR_1['item_radausr'] as $block_radaUSR_11) : ?>
        <div class="podcastCart rotateCart">
          <div class="cartContainer">
            <div class="side front">
              <img alt="avatar" src="<?php echo $block_radaUSR_11['photo_item_radausr']; ?>">
            </div>
            <div class="side back">
              <h2><?php echo $block_radaUSR_11['name_item_radausr']; ?></h2>
              <p><?php echo $block_radaUSR_11['desc_item_radausr']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="header-mainText about-supervisory_text">
      <h1>НАШІ КОНТАКТИ</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in augue nunc. Fusce in consectetur mi.
        Nullam a congue sapien. Nulla in vulputate mauris, in tempor eros.</p>
      <p>Aliquam ut mollis tortor, at lobortis quam. Sed tempus aliquam ultricies. Mauris enim felis, accumsan ac
        elementum ac, varius nec purus.</p>
    </div>
    <div class="btn-green bottomBtn">
      <a href="#">написати</a>
    </div>
  </section>
</div>