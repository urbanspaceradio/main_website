<?php
defined('ABSPATH') || exit;
$block_radaUSR = getBlock_radaUSR();
?>

<div class="siteWrapper">
	<section class="about-supervisory">
		<div class="header-mainText">
			<h1><?php echo $block_radaUSR['title_radaUSR']; ?></h1>
        <?php echo $block_radaUSR['desc_radaUSR']; ?>
		</div>
		<div class="about-supervisory_items">
        <?php foreach ($block_radaUSR['item_radausr'] as $radaUSR) :
          $photoRadaUSR = $radaUSR['photo_item_radausr'];
          if (!$photoRadaUSR) {
            $photoRadaUSR = get_template_directory_uri() . '/assets/img/no_img.png';
          }
          ?>
			  <div class="podcastCart rotateCart">
				  <div class="cartContainer">
					  <div class="side front">
						  <img alt="avatar" src="<?php echo $photoRadaUSR; ?>">
					  </div>
					  <div class="side back">
						  <h2><?php echo $radaUSR['name_item_radausr']; ?></h2>
						  <p><?php echo wp_trim_words($radaUSR['desc_item_radausr'], 45); ?></p>
					  </div>
				  </div>
			  </div>
        <?php endforeach; ?>
		</div>
		<div class="header-mainText about-supervisory_text">
			<h1>НАШІ КОНТАКТИ</h1>
			<div class="contacts">
				<a href="tel:<?php echo get_field('mainMobile-contactPage', '1350'); ?>">
              <?php echo get_field('mainMobile-contactPage', '1350'); ?></a><br/>
				<a href="mailto:<?php echo get_field('mainEmail-contactPage', '1350'); ?>">
              <?php echo get_field('mainEmail-contactPage', '1350'); ?></a>
			</div>
		</div>
		<div class="btn-greenHover bottomBtn">
			<a href="<?php echo site_url('/contacts'); ?>">написати</a>
		</div>
	</section>
</div>