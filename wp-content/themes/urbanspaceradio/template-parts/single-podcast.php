<?php
/* Template name: Single Series Page */
defined('ABSPATH') || exit;
get_header();
$query_vars = get_queried_object();
$series = get_terms(['taxonomy' => 'series', 'hide_empty' => true, 'slug' => $query_vars->slug]);
$term_id_img = get_term_meta($series[0]->term_id)['podcast_series_image_settings'][0];
$term_google_url = get_term_meta($series[0]->term_id)['podcasts_meta_info_google_podcasts'][0];
$term_apple_url = get_term_meta($series[0]->term_id)['podcasts_meta_info_apple_podcasts'][0];

$partner_title_1 = get_term_meta($series[0]->term_id)['podcasts_meta_info_partners_1_title'][0];
$partner_img_1 = get_term_meta($series[0]->term_id)['podcasts_meta_info_partners_1_img'][0];
$partner_title_2 = get_term_meta($series[0]->term_id)['podcasts_meta_info_partners_2_title'][0];
$partner_img_2 = get_term_meta($series[0]->term_id)['podcasts_meta_info_partners_2_img'][0];
$partner_title_3 = get_term_meta($series[0]->term_id)['podcasts_meta_info_partners_3_title'][0];
$partner_img_3 = get_term_meta($series[0]->term_id)['podcasts_meta_info_partners_3_img'][0];
$partner_title_4 = get_term_meta($series[0]->term_id)['podcasts_meta_info_partners_4_title'][0];
$partner_img_4 = get_term_meta($series[0]->term_id)['podcasts_meta_info_partners_4_img'][0];
$partner_description = get_term_meta($series[0]->term_id)['podcasts_meta_info_partner_description'][0];

$term_img_url = wp_get_attachment_url($term_id_img);
if (!$term_img_url) {
  $term_img_url = get_template_directory_uri() . '/assets/img/no_img.png';
}
$episodes = get_episode($series[0]->term_id);
?>

<div class="episode">
	<div class="siteWrapper">
		<div class="slick">
			<section class="episode-slider">
				<div class="episode-slider_description">
					<h2><?php echo $series[0]->name; ?></h2>
              <?php echo $series[0]->description; ?>
              <?php if ($term_apple_url || $term_google_url) : ?>
					  <div class="episode-slider_podcastsBtn">
						  <p>Обрери свою платформу для прослуховування</p>
                   <?php if ($term_google_url) : ?>
							 <a class="google" href="<?php echo $term_google_url ?>" target="_blank"></a>
                   <?php endif; ?>
                   <?php if ($term_apple_url) : ?>
							 <a class="apple" href="<?php echo $term_apple_url ?>" target="_blank"></a>
                   <?php endif; ?>
					  </div>
              <?php endif; ?>
				</div>
				<div class="episode-slider_img">
					<div class="podcastCart episodeCart">
						<img alt="1" src="<?php echo $term_img_url; ?>">
					</div>
				</div>
			</section>
        <?php if ($term_apple_url || $term_google_url) : ?>
			  <div class="episode-slider_podcastsBtn podcastBtn">
				  <p>Обрери свою платформу для прослуховування</p>
             <?php if ($term_google_url) : ?>
					 <a class="google" href="<?php echo $term_google_url ?>" target="_blank"></a>
             <?php endif; ?>
             <?php if ($term_apple_url) : ?>
					 <a class="apple" href="<?php echo $term_apple_url ?>" target="_blank"></a>
             <?php endif; ?>
			  </div>
        <?php endif; ?>
			<section class="episode-items">
				<h2>ЕПІЗОДИ</h2>
           <?php foreach ($episodes as $episode) {
             $audio_file = get_post_meta($episode->ID)['audio_file'][0];
             ?>
				  <div class="episode-items_item">
					  <div class="episode-mobile">
						  <div class="img">
							  <img alt="Img" src="<?php echo get_the_post_thumbnail_url($episode->ID); ?>"/>
						  </div>
						  <h3><?php echo $episode->post_title; ?></h3>
					  </div>
					  <div class="descriptions">
						  <h3><?php echo $episode->post_title; ?></h3>
						  <div class="text-description">
							  <p><?php echo wp_trim_words($episode->post_content, '20') ?></p>
						  </div>
						  <div class="text showContent">
                      <?php echo $episode->post_content; ?>
							  <audio controls controlsList="nodownload">
								  <source src="<?php echo $audio_file; ?>" type="audio/mpeg">
								  Your browser does not support the audio element.
							  </audio>
						  </div>
					  </div>
				  </div>
           <?php } ?>
			</section>
		</div>
	</div>
  <?php if ($partner_img_1) : ?>
	  <div class="divider"></div>
	  <div class="siteWrapper">
		  <section class="episode-partners">
          <?php if ($partner_img_1) : ?>
				 <div class="episode-partners_partner">
					 <div class="label"><?php echo $partner_title_1 ?></div>
					 <img alt="1" src="<?php echo wp_get_attachment_url($partner_img_1) ?>">
				 </div>
          <?php endif; ?>
          <?php if ($partner_img_2) : ?>
				 <div class="episode-partners_partner">
					 <div class="label"><?php echo $partner_title_2 ?></div>
					 <img alt="1" src="<?php echo wp_get_attachment_url($partner_img_2) ?>">
				 </div>
          <?php endif; ?>
          <?php if ($partner_img_3) : ?>
				 <div class="episode-partners_partner">
					 <div class="label"><?php echo $partner_title_3 ?></div>
					 <img alt="1" src="<?php echo wp_get_attachment_url($partner_img_3) ?>">
				 </div>
          <?php endif; ?>
          <?php if ($partner_img_4) : ?>
				 <div class="episode-partners_partner">
					 <div class="label"><?php echo $partner_title_4 ?></div>
					 <img alt="1" src="<?php echo wp_get_attachment_url($partner_img_4) ?>">
				 </div>
          <?php endif; ?>
		  </section>
       <?php if ($partner_description) : ?>
			 <section class="episode-description">
            <?php echo $partner_description; ?>
			 </section>
       <?php endif; ?>
	  </div>
  <?php endif; ?>
</div>
<?php wp_footer(); ?>
