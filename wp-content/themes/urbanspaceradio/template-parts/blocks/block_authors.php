<?php
defined('ABSPATH') || exit;
$block_authors = getBlock_authors();
?>
<section class="header-mainText">
	<h1><?php echo $block_authors['title_authors']; ?></h1>
	<?php echo $block_authors['desc_authors']; ?>
</section>
<section class="authors-items">
  <?php foreach ($block_authors['author_item'] as $author) : ?>
	  <div class="podcastCart rotateCart authors-cart">
		  <div class="cartContainer">
			  <div class="side front">
				  <img alt="avatar" src="<?php echo $author['author_avatar']; ?>">
			  </div>
			  <div class="side back">
				  <h2><?php echo $author['author_name']; ?></h2>
				 <p><?php echo wp_trim_words($author['author_desc'], 45); ?></p>
			  </div>
		  </div>
	  </div>
  <?php endforeach; ?>
</section>
<section class="bottomDescription">
	<?php echo $block_authors['bottom_description']; ?>
</section>
<div class="btn-greenHover bottomBtn">
	<a href="<?php echo site_url('/contacts'); ?>">хочу долучитись</a>
</div>
