<?php
defined('ABSPATH') || exit;
$events = getBlock_events();
?>
<div class="events">
	<div class="siteWrapper">
		<section class="header-mainText">
			<h1><?php echo $events['event_title']; ?></h1>
			<p><?php echo $events['event_description']; ?></p>
		</section>
		<section class="events-items">
			<?php foreach ($events['events'] as $event) : ?>
				<div class=" aboutUSR events-items_item">
					<div class="img">
						<img alt="Img" src="<?php echo $event['event_img']; ?>">
					</div>
					<div class="text">
						<h2><?php echo $event['event_title']; ?></h2>
						<p><?php echo $event['events_description']; ?></p>
					</div>
				</div>
			<?php endforeach;?>
		</section>
	</div>
	<div class="divider"></div>
	<div class="bottomDescription events-bottomDescription">
		<?php echo $events['event_bottom_description']; ?>
	</div>
</div>
