<?php
/* Template name: Partners Page */
defined('ABSPATH') || exit;
get_header();
$partnersMeta = getBlock_subscribe();
$partners = getPartner();
?>

	<div class="siteWrapper partners">
		<section class="header-mainText">
			<h1><?php echo $partnersMeta['title']; ?></h1>
			<p><?php echo $partnersMeta['description']; ?></p>
		</section>
		<section class="partners-items">
        <?php while ($partners->have_posts()) : $partners->the_post(); ?>
			  <div class="partners-items_partner">
				  <div class="img"><?php the_post_thumbnail(); ?></div>
				  <div class="btn-greenHover partners-btn">
					  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				  </div>
			  </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
		</section>
	</div>
	<section class="bottomDescription">
		<p><?php echo $partnersMeta['desc_subscribe-button']; ?></p>
	</section>
	<div class="btn-greenHover bottomBtn">
		<a href="<?php echo site_url('/contacts'); ?>">хочу долучитись</a>
	</div>

<?php get_footer();

