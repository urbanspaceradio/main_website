<?php
/* Template name: Single Series Page */
defined('ABSPATH') || exit;
get_header();
$series = get_terms(['taxonomy' => 'series','hide_empty' => true, 'parent' => 82]);

function get_episode($term) {
  $args = array(
    'posts_per_page' => -1,
    'post_type' => 'podcast',
    'tax_query' => array(
      array(
        'taxonomy' => 'series',
        'field' => 'term_id',
        'terms' => $term
      )
    )
  );
  return get_posts( $args );
}

?>

<div class="episode">
  <div class="siteWrapper">
    <div class="slick">
      <?php foreach ($series as $item){
        $term_id_img = get_term_meta($item->term_id)['podcast_series_image_settings'][0];
        $term_img_url = wp_get_attachment_url($term_id_img);
        if(!$term_img_url){
          $term_img_url = get_template_directory_uri().'/assets/img/no_img.png';
        }
        $episodes = get_episode($item->term_id);
        ?>
			<div>
				<section class="episode-slider">
					<div class="episode-slider_description">
						<h2><?php echo $item -> name; ?></h2>
						<p><?php echo $item -> description; ?></p>
						<div class="btn-greenHover">
							<a href="#">слухати</a>
						</div>
					</div>
					<div class="episode-slider_img">
						<div class="podcastCart episodeCart">
							<img alt="1" src="<?php echo $term_img_url; ?>">
						</div>
					</div>
				</section>
				<section class="episode-items">
					<h2>ЕПІЗОДИ</h2>
					<?php foreach ($episodes as $episode) {
                 $audio_file = get_post_meta($episode->ID)['audio_file'][0];
						?>
						 <div class="episode-items_item">
							 <img alt="1" src="<?php echo get_the_post_thumbnail_url($episode->ID); ?>"/>
							 <div class="descriptions">
								 <h3><?php echo $episode->post_title; ?></h3>
								 <p><?php echo $episode->post_content; ?></p>
								 <audio controls>
									 <source src="<?php echo $audio_file; ?>" type="audio/mpeg">
									 Your browser does not support the audio element.
								 </audio>
							 </div>
						 </div>
					<?php } ?>
				</section>
			</div>
      <?php } ?>
    </div>
  </div>
  <div class="divider"></div>
  <div class="siteWrapper">
    <section class="episode-partners">
      <div class="episode-partners_partner">
        <div class="label">партнер</div>
        <img alt="1" src="assets/img/temp/partners/1.png">
      </div>
      <div class="episode-partners_partner">
        <div class="label">партнер</div>
        <img alt="2" src="assets/img/temp/partners/2.png">
      </div>
      <div class="episode-partners_partner">
        <div class="label">партнер</div>
        <img alt="3" src="assets/img/temp/partners/3.png">
      </div>
      <div class="episode-partners_partner">
        <div class="label">автор</div>

      </div>
    </section>
    <section class="episode-description">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in augue nunc. Fusce in consectetur mi.
        Nullam a congue sapien. Nulla in vulputate mauris, in tempor eros.</p>
      <p>Aliquam ut mollis tortor, at lobortis quam. Sed tempus aliquam ultricies. Mauris enim felis, accumsan ac
        elementum ac, varius nec purus.</p>
    </section>
  </div>
</div>
<?php wp_footer(); ?>
