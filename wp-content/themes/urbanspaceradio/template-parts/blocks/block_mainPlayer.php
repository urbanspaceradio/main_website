<?php
defined('ABSPATH') || exit;
$Block_mainPlayer_1 = getBlock_mainPlayer();
?>

<section>
	<div class="mainPlayer">
		<div class="mainPlayer-container">
			<div class="jp-audio-stream">
				<div class="mainPlayer-container_btn">
					<a href="<?php echo site_url('/player'); ?>" class="play"
						onclick="window.open('<?php echo site_url('/player'); ?>','popup','width=960,height=1080'); return false;"></a>
				</div>
				<div class="mainPlayer-container_info activeInfo">
					<div class="js-singer">Loading...</div>
					<div class="js-song">Loading...</div>
					<div class="now">зараз в ефірі</div>
				</div>
			</div>
		</div>
	</div>
</section>
