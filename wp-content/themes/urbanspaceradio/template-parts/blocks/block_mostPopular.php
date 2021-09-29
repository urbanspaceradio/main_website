<?php
defined('ABSPATH') || exit;
$mostPopular = getBlock_mostPopular();

?>
<section class="mostPopular">
	<h2>НАЙПОПУЛЯРНІШЕ НА URBAN SPACE RADIO</h2>
	<div class="mostPopular-podcasts">
     <?php foreach ($mostPopular as $popular) :
       $term_id_img = get_term_meta($popular->term_id)['podcast_series_image_settings'][0];
       $term_img_url = wp_get_attachment_url($term_id_img);
       if (!$term_img_url) {
         $term_img_url = get_template_directory_uri() . '/assets/img/no_img.png';
       }
       ?>
		  <a class="podcastCart" href="<?php echo get_term_link($popular->term_id); ?>">
			  <div class="img">
				  <img alt="podcast_item" src="<?php echo $term_img_url; ?>">
			  </div>
			  <p><?php echo wp_trim_words($popular->name, 3); ?></p>
		  </a>
     <?php endforeach; ?>
	</div>
	<div class="btn-greenHover mostPopular-btn">
		<a href="<?php echo site_url('/podcasts'); ?>">переглянути усі наші подкасти</a>
	</div>
</section>
