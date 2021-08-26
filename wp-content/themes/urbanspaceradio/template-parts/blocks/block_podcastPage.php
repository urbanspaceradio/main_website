<?php
defined('ABSPATH') || exit;
$block_podcastPage = getBlock_podcastPage();
$posts = new WP_Query($args);

global $wp_query;
print_r( $posts );
?>
<div class="podcasts">
  <section class="podcasts-divider">
    <div class="siteWrapper">
      <div class="header-mainText">
        <h1><?php echo $block_podcastPage['podcastPage-title']; ?></h1>
        <p><?php echo $block_podcastPage['podcastPage-desc']; ?></p>
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
    <?php if ($posts->have_posts()){ while ($posts->have_posts()){
      $posts->the_post(); ?>
      <div class="podcasts-seasons">
        <a class="podcastCart" href="single-podcast.html">
          <img alt="1" src="assets/img/temp/podcasts/1.png">
          <p><?php the_title(); ?></p>
        </a>
      </div>
      <?php
    }}
    wp_reset_postdata();
      ?>
    <div class="podcasts-seasons">
      <a class="podcastCart" href="single-podcast.html">
        <img alt="1" src="assets/img/temp/podcasts/1.png">
        <p>сезон 1</p>
      </a>
    </div>
  </section>
</div>