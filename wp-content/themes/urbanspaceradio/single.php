<?php
/* Template name: Single Podcast Page */
defined('ABSPATH') || exit;
get_header();
$args = array(
  'taxonomy' => 'series',
  'post_type' => 'podcast',
  'meta_query' => array(
    array(
      'key' => 'audio_file'
    ),
  ),);
$query = new WP_Query($args);
?>
<div class="episode">
  <div class="siteWrapper">
    <div class="slick">

          <div>
            <section class="episode-slider">
              <div class="episode-slider_description">
                <h2></h2>
                <p></p>
                <div class="btn-greenHover">
                  <a href="#">слухати</a>
                </div>
              </div>
              <div class="episode-slider_img">
                <div class="podcastCart episodeCart">
                  <img alt="1" src="">
                </div>
              </div>
            </section>
            <section class="episode-items">
              <h2>ЕПІЗОДИ</h2>
              <?php if ($query->have_posts()) {
              while ($query->have_posts()) {
              $query->the_post(); ?>
              <a class="episode-items_item" href="<?php echo get_post_permalink($query->ID); ?>">
                <img alt="1" src="<?php echo get_the_post_thumbnail_url($query->ID); ?>">
                <div class="descriptions">
                  <h3><?php the_title();?></h3>
                  <p><?php echo get_post_field('post_content');?></p>
                </div>
              </a>
              <?php }
              } ?>
            </section>
          </div>

    </div>
    <div class="btn-greenHover loadMore"><a href="#">&#x25BC;</a></div>
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
