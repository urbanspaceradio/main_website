<?php
defined('ABSPATH') || exit;
get_header();
$series = new WP_Term_Query(['taxonomy' => 'series', 'hide_empty' => true, 'name__like' => $_GET['search']]);
?>
<div class="podcasts singlePodcast">
	<section>
		<div class="siteWrapper">
			<div class="header-mainText">
				<h1>За пошуковим запитом <b>"<?php echo $_GET['search'] ?>"</b> знайдено подкастів:
					<b><?php echo count($series->terms); ?></b></h1>
			</div>
		</div>
	</section>
	<section class="siteWrapper">
		<div class="podcasts-seasons">
        <?php
        if ($series->terms) :
          foreach ($series->terms as $item) :
            $term_id_img = get_term_meta($item->term_id)['podcast_series_image_settings'][0];
            $term_img_url = wp_get_attachment_url($term_id_img);
            if (!$term_img_url) {
              $term_img_url = get_template_directory_uri() . '/assets/img/no_img.png';
            }
            ?>
				 <a class="podcastCart" href="<?php echo home_url('archives/series/') . $item->slug; ?>">
					 <img src="<?php echo $term_img_url; ?>" alt="picture"/>
					 <p><?php echo wp_trim_words($item->name, 2); ?></p>
				 </a>
          <?php endforeach; endif; ?>
		</div>
	</section>
</div>


<?php get_footer(); ?>
