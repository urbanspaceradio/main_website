<?php
defined('ABSPATH') || exit;
$Block_aboutUSR_1 = getBlock_aboutUSR();
?>
<section>
	<div class="siteWrapper">
		<div class="aboutUSR">
			<div class="aboutUSR-header">
				<div class="aboutUSR-header_text">
					<h2><?php echo $Block_aboutUSR_1['aboutUSR-title']; ?></h2>
              <?php echo $Block_aboutUSR_1['aboutUSR-desc']; ?>
				</div>
				<div class="aboutUSR-header_img">
					<img alt="aboutUSR" src="<?php echo $Block_aboutUSR_1['aboutUSR-img']; ?>">
				</div>
			</div>
			<div class="aboutUSR-mainText">
           <?php echo $Block_aboutUSR_1['aboutUSR-text']; ?>
			</div>
			<div onclick="runWfpWdgt('https://secure.wayforpay.com/button/b569b98266d95');"
				  class="btn-greenHover btn-green-main">
				<a>підтримати проект</a>
			</div>
		</div>
	</div>
</section>
