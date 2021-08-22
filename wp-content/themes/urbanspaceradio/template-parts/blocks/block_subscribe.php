<?php
defined('ABSPATH') || exit;
$Block_subscribe = getBlock_subscribe();
print_r(getBlock_subscribe());
?>
<section class="bottomDescription">
  <p><?php echo $Block_subscribe['desc-subscribeButton']; ?></p>
</section>
<div class="btn-green bottomBtn">
  <a href="#">хочу долучитись</a>
</div>
