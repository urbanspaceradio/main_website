<?php
defined('ABSPATH') || exit;
$block_ourTeam = getBlock_ourTeam();
?>

<div class="siteWrapper">
	<section class="about-ourTeam">
		<h1 class="about-ourTeam_title"><?php echo $block_ourTeam['title_ourTeam']; ?></h1>
		<div class="about-ourTeam_container">
        <?php foreach ($block_ourTeam['item_ourteam'] as $ourTeam) :
          $photoOurTeamUrl = $ourTeam['photo_ourTeam'];
          if (!$photoOurTeamUrl) {
            $photoOurTeamUrl = get_template_directory_uri() . '/assets/img/no_img.png';
          }
          ?>
			  <div class="podcastCart rotateCart">
				  <div class="cartContainer">
					  <div class="side front">
						  <img alt="<?php echo $ourTeam['name_ourTeam']; ?>" src="<?php echo $photoOurTeamUrl; ?>">
					  </div>
					  <div class="side back">
						  <h2><?php echo $ourTeam['name_ourTeam']; ?></h2>
						  <p><?php echo wp_trim_words($ourTeam['desc_ourTeam'], 45); ?></p>
					  </div>
				  </div>
			  </div>
        <?php endforeach; ?>
		</div>
		<div class="btn-greenHover bottomBtn">
			<a href="<?php echo site_url('/contacts'); ?>">стати членом команди</a>
		</div>
	</section>
</div>
<div class="divider"></div>