<?php
defined('ABSPATH') || exit;
$block_ourMission_1 = getBlock_ourMission();
?>

<div class="siteWrapper">
	<section class="about-header">
		<div class="header-mainText about-header_mainText">
			<h1><?php echo $block_ourMission_1['title-ourMission']; ?></h1>
			<p> <?php echo $block_ourMission_1['desc-ourMission']; ?></p>
		</div>
		<img alt="About img" src="<?php echo $block_ourMission_1['photo-ourMission']; ?>">
	</section>
	<section class="about-values">
     <?php foreach ($block_ourMission_1['ourMission-item'] as $block_ourMission_11) : ?>
		  <div class="about-values_item">
			  <div class="img">
				  <img alt="No img" src="<?php echo $block_ourMission_11['photo-ourMission-item']; ?>">
			  </div>
			  <div class="description">
				  <h2 class="description-title"><?php echo $block_ourMission_11['title-ourmission-item']; ?></h2>
				  <div class="text">
					  <p><?php echo $block_ourMission_11['text-ourmission-item']; ?></p>
				  </div>
			  </div>
		  </div>
     <?php endforeach; ?>
	</section>
</div>
<div class="divider"></div>