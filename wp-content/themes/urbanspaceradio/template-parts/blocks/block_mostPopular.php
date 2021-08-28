<?php
defined('ABSPATH') || exit;
$mostPopular = getBlock_mostPopular();

?>
<section class="mostPopular">
	<h2><?php echo $mostPopular['mostPopular-title']; ?></h2>
  <?php foreach ($mostPopular['podcast-item'] as $mostPopular_1) : ?>
	  <div class="mostPopular-podcasts">
		  <a class="podcastCart" href="#">
			  <img alt="podcast_item" src="<?php echo $mostPopular_1['podcast-img']; ?>">
			  <p><?php echo $mostPopular_1['podcast-name']; ?></p>
		  </a>
	  </div>
  <?php endforeach; ?>
	<div class="btn-greenHover mostPopular-btn">
		<a href="#">переглянути усі наші подкасти</a>
	</div>
</section>
