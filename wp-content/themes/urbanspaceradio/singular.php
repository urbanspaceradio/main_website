<?php
/* Template name: Seasons */
defined('ABSPATH') || exit;
get_header();
$query_vars = get_queried_object();
$seasons = getSeasonsMeta($query_vars->ID)['podcasts'];
?>
	<div class="podcasts singlePodcast">
		<section class="podcasts-divider">
			<div class="siteWrapper">
				<div class="header-mainText">
					<h1><?php echo $query_vars->post_title; ?></h1>
					<p><?php echo $query_vars->post_content; ?></p>
				</div>
			</div>
		</section>
		<section class="siteWrapper">
			<div class="podcasts-seasons">
           <?php foreach ($seasons as $item) {
             $term_id_img = get_term_meta($item->term_id)['podcast_series_image_settings'][0];
             $term_img_url = wp_get_attachment_image_src($term_id_img, [300, 300])[0];
             if (!$term_img_url) {
               $term_img_url = get_template_directory_uri() . '/assets/img/no_img.png';
             }
             ?>
				  <a class="podcastCart" href="<?php echo get_term_link($item->term_id); ?>">
					  <div class="img">
						  <img src="<?php echo $term_img_url; ?>" alt="picture"/>
					  </div>
					  <p><?php echo wp_trim_words($item->name, 3); ?></p>
				  </a>
           <?php } ?>
			</div>
		</section>
	</div>

<?php get_footer(); ?>
