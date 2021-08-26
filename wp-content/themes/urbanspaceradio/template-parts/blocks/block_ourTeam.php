<?php
defined('ABSPATH') || exit;
$block_ourTeam_1 = getBlock_ourTeam();
?>

<div class="siteWrapper">
  <section class="about-ourTeam">
    <h2 class="about-ourTeam_title"><?php echo $block_ourTeam_1['title_ourTeam']; ?></h2>
    <div class="about-ourTeam_container">
      <?php foreach ($block_ourTeam_1['item_ourteam'] as $block_ourTeam_11) : ?>
        <div class="podcastCart rotateCart">
          <div class="cartContainer">
            <div class="side front">
              <img alt="avatar" src="<?php echo $block_ourTeam_11['photo_ourTeam']; ?>">
            </div>
            <div class="side back">
              <h2><?php echo $block_ourTeam_11['name_ourTeam']; ?></h2>
              <p><?php echo $block_ourTeam_11['desc_ourTeam']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="btn-greenHover bottomBtn">
      <a href="#">стати членом команди</a>
    </div>
  </section>
</div>
<div class="divider"></div>