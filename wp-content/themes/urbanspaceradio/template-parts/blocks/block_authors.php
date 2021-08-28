<?php
defined('ABSPATH') || exit;
$Block_authors_1 = getBlock_authors();
?>
<section class="header-mainText">
	<h1><?php echo $Block_authors_1['title_authors']; ?></h1>
	<p><?php echo $Block_authors_1['desc_authors']; ?></p>
</section>
<section class="authors-items">
  <?php foreach ($Block_authors_1['author_item'] as $Block_authors_11) : ?>
	  <div class="podcastCart rotateCart authors-cart">
		  <div class="cartContainer">
			  <div class="side front">
				  <img alt="avatar" src="<?php echo $Block_authors_11['author_avatar']; ?>">
			  </div>
			  <div class="side back">
				  <h2><?php echo $Block_authors_11['author_name']; ?></h2>
				  <p><?php echo $Block_authors_11['author_desc']; ?></p>
			  </div>
		  </div>
	  </div>
  <?php endforeach; ?>
</section>
