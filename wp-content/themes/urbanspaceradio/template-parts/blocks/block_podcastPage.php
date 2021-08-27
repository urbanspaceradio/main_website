<?php
defined('ABSPATH') || exit;
$block_podcastPage = getBlock_podcastPage();
$args = array(
  'posts_per_page' => 7,
  'orderby' => 'post_modified_gmt',
  'post_type' => 'podcast',
);
$posts = new WP_Query($args);
print_r($posts);
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
    <div class="podcasts-seasons">
      <?php if ($posts->have_posts()) {
        while ($posts->have_posts()) {
          $posts->the_post(); ?>
          <a class="podcastCart" href="<?php echo get_post_permalink($posts->ID); ?>">
            <img src="<?php echo get_the_post_thumbnail_url($posts->ID); ?>" alt="picture"/>
            <p><?php the_title(); ?></p>
          </a>
          <?php
        }
      }
      wp_reset_postdata();
      ?>
    </div>
  </section>
</div>