<?php
defined('ABSPATH') || exit;
get_header();
the_post();
$partnerPodcasts = getBlock_partners();
$partner_link = $partnerPodcasts['partner_link'];
?>

	<div class="siteWrapper partner">
		<section class="partner-header">
			<div class="header-mainText partner-header_mainText">
				<h1><?php the_title(); ?></h1>
           <?php the_content(); ?>
           <?php if ($partner_link) : ?>
				  <div class="btn-greenHover partner-btn">
					  <a href="<?php echo $partner_link; ?>" target="_blank">перейти на партнера</a>
				  </div>
           <?php endif; ?>
			</div>
			<div class="aboutUSR partner-img">
           <?php the_post_thumbnail(); ?>
			</div>
		</section>
		<section class="partner-didTogether">
			<div class="header-mainText partner-didTogether_description">
				<h2><?php echo $partnerPodcasts['title_partners'] ?></h2>
				<p><?php echo $partnerPodcasts['desc_partners'] ?></p>
			</div>
			<div class="partner-didTogether_podcasts">
           <?php foreach ($partnerPodcasts['podcast_partner'] as $podcast) :
             $term_id_img = get_term_meta($podcast->term_id)['podcast_series_image_settings'][0];
             $term_img_url = wp_get_attachment_url($term_id_img);
             if (!$term_img_url) {
               $term_img_url = get_template_directory_uri() . '/assets/img/no_img.png';
             }
             ?>
				  <a class="podcastCart" href="<?php echo get_term_link($podcast->term_id) ?>">
					  <img alt="1" src="<?php echo $term_img_url; ?>">
					  <p><?php echo $podcast->name; ?></p>
				  </a>
           <?php endforeach; ?>
			</div>
		</section>
	</div>

<?php get_footer();

