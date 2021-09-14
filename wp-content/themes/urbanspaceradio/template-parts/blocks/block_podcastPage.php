<?php
defined('ABSPATH') || exit;
$block_podcastPage = getBlock_podcastPage();
$series = get_terms(['taxonomy' => 'series', 'hide_empty' => true, 'parent' => 0, 'orderby' => 'id', 'order' => 'DESC',]);
?>
<div class="podcasts">
	<section class="podcasts-divider">
		<div class="siteWrapper">
			<div class="header-mainText">
				<h1><?php echo $block_podcastPage['podcastPage-title']; ?></h1>
				<?php echo $block_podcastPage['podcastPage-desc']; ?>
			</div>
			<div class="podcasts-filter">
				<ul class="podcasts-filter_years">
					<li><a class="active" href="#">2021</a></li>
					<li><a href="#">2020</a></li>
					<li><a href="#">2019</a></li>
					<li><a href="#">2018</a></li>
					<li><a href="#">2017</a></li>
				</ul>
				<div class="podcasts-filter_type">
					<div class="btn-greenHover"><a href="#">за жанрами</a></div>
					<div class="btn-greenHover"><a href="#">за авторами</a></div>
					<div class="btn-greenHover search"><a href="#">пошук</a></div>
				</div>
			</div>
		</div>
	</section>
	<section class="siteWrapper">
		<div class="podcasts-seasons">
        <?php foreach ($series as $item) {
          $term_id_img = get_term_meta($item->term_id)['podcast_series_image_settings'][0];
          $term_img_url = wp_get_attachment_url($term_id_img);
          if (!$term_img_url) {
            $term_img_url = get_template_directory_uri() . '/assets/img/no_img.png';
          }
          ?>
			  <a class="podcastCart" href="<?php echo get_term_link($item->term_id); ?>">
				  <img src="<?php echo $term_img_url; ?>" alt="picture"/>
				  <p><?php echo the_excerpt_max_charlength($item->name, 2); ?></p>
			  </a>
        <?php } ?>
		</div>
	</section>
</div>