<?php
defined('ABSPATH') || exit;
$block_podcastPage = getBlock_podcastPage();
$seasons = getSeasons();
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
        <div class="filterWrapper">
			  <ul id="filter" class="podcasts-filter_years yearsSlider">
				  <li class="activeYear" data-filter="all">Всі</li>
             <?php foreach ($years as $year) : ?>
					 <li data-filter="year-<?php echo $year->name; ?>"><?php echo $year->name; ?></li>
             <?php endforeach; ?>
			  </ul>
		  </div>
        <div class="podcasts-search">
          <form method="get" id="advanced-searchform" role="search">
            <input type="text" name="s_podcasts" id="name" required/>
				 <button>пошук</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="siteWrapper">
    <div id="seasons" class="podcasts-seasons">
      <?php $i = 0;
      while ($seasons->have_posts()) : $seasons->the_post();
        $term_img_url = get_the_post_thumbnail_url(get_the_ID(), [500, 500]);
        $year = getSeasonsMeta(get_the_ID())['year'];
        if (!$term_img_url) {
          $term_img_url = get_template_directory_uri() . '/assets/img/no_img.png';
        }
        ?>
        <div data-id="<?php echo $i; ?>" data-type="year-<?php echo $year->name; ?>">
          <a class="podcastCart" href="<?php the_permalink(); ?>">
            <div class="img">
              <img src="<?php echo $term_img_url; ?>" alt="picture"/>
            </div>
            <p><?php echo wp_trim_words(get_the_title(), 3); ?></p>
          </a>
        </div>
        <?php $i++; endwhile;
      wp_reset_postdata(); ?>
    </div>
  </section>
</div>
