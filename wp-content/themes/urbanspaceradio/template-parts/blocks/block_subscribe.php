<?php
defined('ABSPATH') || exit;
$Block_subscribe = getBlock_subscribe();
?>
<section class="bottomDescription">
	<p><?php echo $Block_subscribe['desc_subscribe-button']; ?></p>
</section>
<div class="btn-greenHover bottomBtn">
	<a href="<?php echo site_url('/contacts'); ?>">хочу долучитись</a>
</div>
