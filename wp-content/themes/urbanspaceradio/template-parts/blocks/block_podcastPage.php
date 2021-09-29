<?php
defined('ABSPATH') || exit;
$block_podcastPage = getBlock_podcastPage();
$series = get_terms(['taxonomy' => 'series', 'hide_empty' => true, 'parent' => 0, 'orderby' => 'id', 'order' => 'DESC']);
$years = get_terms(['taxonomy' => 'year', 'hide_empty' => false, 'orderby' => 'name', 'order' => 'DESC']);
?>
<div class="podcasts">
	<section class="podcasts-divider">
		<div class="siteWrapper">
			<div class="header-mainText">
				<h1><?php echo $block_podcastPage['podcastPage-title']; ?></h1>
           <?php echo $block_podcastPage['podcastPage-desc']; ?>
			</div>
		</div>
		<div class="podcastFilter-wrapper">
			<div class="podcasts-filter siteWrapper">
				<ul id="filter" class="podcasts-filter_years yearsSlider">
					<li class="activeYear" data-filter="all">Всі</li>
              <?php foreach ($years as $year) : ?>
					  <li data-filter="year-<?php echo $year->term_id; ?>"><?php echo $year->name; ?></li>
              <?php endforeach; ?>
				</ul>
				<div class="podcasts-search">
					<form method="get" id="advanced-searchform" role="search">
						<input type="text" name="search" id="name" required/>
						<input type="submit" value="пошук"/>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="siteWrapper">
		<div id="seasons" class="podcasts-seasons">
        <?php $i = 0; foreach ($series as $item) {
          $term_id_img = get_term_meta($item->term_id)['podcast_series_image_settings'][0];
          $yearID = get_term_meta($item->term_id)['podcasts_meta_info_year'][0];
          $term_img_url = wp_get_attachment_url($term_id_img);
          if (!$term_img_url) {
            $term_img_url = get_template_directory_uri() . '/assets/img/no_img.png';
          }
          ?>
			  <div data-id="<?php echo $i; ?>" data-type="year-<?php echo $yearID; ?>">
				  <a class="podcastCart" href="<?php echo get_term_link($item->term_id); ?>">
					  <div class="img">
						  <img src="<?php echo $term_img_url; ?>" alt="picture"/>
					  </div>
					  <p><?php echo wp_trim_words($item->name, 3); ?></p>
				  </a>
			  </div>
        <?php $i++; } ?>
		</div>
	</section>
</div>