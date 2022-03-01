<?php
defined('ABSPATH') || exit;
get_header();
the_post();
$single_new = getSingleNew();
$postUrl = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
?>

  <div class="siteWrapper new single-event">
    <section class="new-header">
      <div class="header-mainText new-header_mainText">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <div class="share-button">
          <span>Поділітися цим:</span>
          <a target="_blank" class="share-button share-facebook"
             href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on Facebook">
            <svg  viewBox="0 0 72 72" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <!-- Generator: Sketch 49.2 (51160) - http://www.bohemiancoding.com/sketch -->
              <title>Facebook</title>
              <desc>Created with Sketch.</desc>
              <defs></defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Social-Icons---Rounded-Black" transform="translate(-152.000000, -43.000000)">
                  <g id="Facebook" transform="translate(152.000000, 43.000000)">
                    <rect id="Rounded" fill="#000000" x="0" y="0" width="72" height="72" rx="8"></rect>
                    <path d="M60.4641463,13.4173171 L60.4641463,22.7278049 L54.9382927,22.7421951 C50.6068293,22.7421951 49.7721951,24.8 49.7721951,27.807561 L49.7721951,34.4702439 L60.09,34.4702439 L58.7517073,44.8887805 L49.7721951,44.8887805 L49.7721951,72 L39.0097317,72 L39.0097317,44.8887805 L30,44.8887805 L30,34.4702439 L39.0097317,34.4702439 L39.0097317,26.7858537 C39.0097317,17.8639024 44.4478049,13 52.42,13 C56.2204634,13 59.5,13.2878049 60.4641463,13.4173171 Z" fill="#FFFFFF"></path>
                  </g>
                </g>
              </g>
            </svg>
          </a>
          <a target="_blank" class="share-button share-twitter"
             href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta('twitter'); ?>"
             title="Tweet this">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
<metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
              <g><path d="M308.9,341c121.6,61.6,224.2,58.1,224.2,58.1s-38.9-136.3,81.4-196.8c120.3-60.5,203.3,41.4,203.3,41.4s21-5.8,36.6-11.6c15.7-5.8,38.3-16.1,38.3-16.1l-37.1,66.5l57.2-6.1c0,0-7,10.3-29.9,31.4c-22.9,21.1-32.3,32-32.3,32s8.2,164.1-77.9,290.5c-86.1,126.4-197.2,202.2-358.8,218.1c-161.5,16-266.8-49.8-266.8-49.8s70.7-4.1,115.7-21.3s109.8-62.8,109.8-62.8s-92.1-28.5-125.1-60.5c-33-32-41.3-50.9-41.3-50.9l90.9-1.1c0,0-95.6-50.9-122.7-91.3c-27.1-40.3-30.7-79.4-30.7-79.4l69.9,28.4c0,0-58.1-79.3-66.4-141c-8.3-61.7,10.7-94.8,10.7-94.8S187.3,279.3,308.9,341z M687.8,10H312.2c-106.5,0-174,0.5-237.9,64.2C10.5,138.2,10,206,10,312.2v375.7c0,106.5,0.5,174,64.2,237.9c64,64,131.8,64.3,238,64.3h375.7c106.5,0,174-0.5,237.9-64.2c63.9-64,64.3-131.8,64.3-238V312.2c0-106.5-0.5-174-64.2-237.9C861.8,10.3,794,10,687.8,10z"/></g>
</svg>
          </a>
          <a target="_blank" class="share-button share-linkedin "
             href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta('twitter'); ?>">
            <svg  viewBox="0 0 72 72" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <!-- Generator: Sketch 49.2 (51160) - http://www.bohemiancoding.com/sketch -->
              <title>Linkedin</title>
              <desc>Created with Sketch.</desc>
              <defs></defs>
              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Social-Icons---Rounded-Black" transform="translate(-376.000000, -267.000000)">
                  <g id="Linkedin" transform="translate(376.000000, 267.000000)">
                    <path d="M8,72 L64,72 C68.418278,72 72,68.418278 72,64 L72,8 C72,3.581722 68.418278,-8.11624501e-16 64,0 L8,0 C3.581722,8.11624501e-16 -5.41083001e-16,3.581722 0,8 L0,64 C5.41083001e-16,68.418278 3.581722,72 8,72 Z" id="Rounded" fill="#000000"></path>
                    <path d="M62,62 L51.315625,62 L51.315625,43.8021149 C51.315625,38.8127542 49.4197917,36.0245323 45.4707031,36.0245323 C41.1746094,36.0245323 38.9300781,38.9261103 38.9300781,43.8021149 L38.9300781,62 L28.6333333,62 L28.6333333,27.3333333 L38.9300781,27.3333333 L38.9300781,32.0029283 C38.9300781,32.0029283 42.0260417,26.2742151 49.3825521,26.2742151 C56.7356771,26.2742151 62,30.7644705 62,40.051212 L62,62 Z M16.349349,22.7940133 C12.8420573,22.7940133 10,19.9296567 10,16.3970067 C10,12.8643566 12.8420573,10 16.349349,10 C19.8566406,10 22.6970052,12.8643566 22.6970052,16.3970067 C22.6970052,19.9296567 19.8566406,22.7940133 16.349349,22.7940133 Z M11.0325521,62 L21.769401,62 L21.769401,27.3333333 L11.0325521,27.3333333 L11.0325521,62 Z" fill="#FFFFFF"></path>
                  </g>
                </g>
              </g>
            </svg>
          </a>
          <a target="_blank" class="share-button share-telegram"
             href="https://t.me/share/url?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta('twitter'); ?>">
            <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 854 852" width="854" height="852"><style>.s0{fill:#f7f6f5}.s1{fill:#000000}.s2{fill:#ffffff}</style><path class="s0" d="m1027 1028h-1200v-1200h1200z" /><path class="s1" d="m852 218.8l-0.1 418.5c0 4.7-0.1 14.7-0.4 22.5c-0.7 19.1-2.2 43.7-4.5 54.9c-3.4 16.9-8.6 32.8-15.4 46.1c-8 15.6-18.2 29.7-30.3 41.8c-12.1 12-26.1 22.2-41.8 30.2c-13.3 6.8-29.3 12-46.2 15.4c-11.1 2.2-35.6 3.7-54.5 4.4c-7.8 0.3-17.9 0.4-22.6 0.4l-418.5-0.1c-4.7 0-14.7-0.1-22.5-0.4c-19.1-0.7-43.7-2.2-55-4.5c-16.8-3.4-32.7-8.6-46-15.4c-15.6-8-29.7-18.2-41.8-30.3c-12-12.1-22.2-26.1-30.2-41.8c-6.8-13.3-12-29.3-15.4-46.2c-2.2-11.1-3.7-35.6-4.4-54.5c-0.3-7.8-0.4-17.9-0.4-22.6l0.1-418.5c0-4.7 0.1-14.7 0.4-22.5c0.7-19.1 2.2-43.7 4.5-54.9c3.4-16.9 8.6-32.8 15.4-46.1c8-15.6 18.2-29.7 30.3-41.8c12.1-12 26.1-22.2 41.8-30.2c13.3-6.8 29.3-12 46.2-15.4c11.1-2.2 35.6-3.7 54.5-4.4c7.8-0.3 17.9-0.4 22.6-0.4l418.5 0.1c4.7 0 14.7 0.1 22.5 0.4c19.1 0.7 43.7 2.2 55 4.5c16.8 3.4 32.7 8.6 46 15.4c15.6 8 29.6 18.2 41.8 30.3c12 12.1 22.2 26.1 30.2 41.8c6.8 13.3 12 29.3 15.4 46.2c2.2 11.1 3.7 35.6 4.4 54.5c0.3 7.8 0.4 17.9 0.4 22.6z" /><path class="s2" d="m713.4 205.5c0 3.5-0.5 6.8-0.8 11.9q-3.3 52.6-100.7 445q-5.9 22.9-26.8 23.7c-7.6 0.3-16.9-1.2-27.9-10.8c-22-18.9-73.1-55.1-120.5-87.8c-14.3 12-42.9 36.7-72.5 66.3q-41.9 41.9-36.5 0l12.9-136.8l0.3 0.2q0.6-1.4 1.6-2.5q246.8-219.5 253.4-242.5c0.5-1.8-1.4-2.7-4-1.9c-16.4 6-300.6 185.5-332 205.3q-1.8 1.2-7 0.5l-137.9-45q-16.4-6.7-11.1-21.8c1.1-3.2 3.3-5.8 9.8-10.4q30.6-21.3 565.6-213.6q15.1-5.1 24-1.7c4.1 1.6 6.7 3.3 8.9 9.7c0.8 2.3 1.3 7.2 1.2 12.2z" /></svg>
          </a>

        </div>
      </div>

      <div class="aboutUSR new-img">

        <?php if (!$single_new['main_img']) {

          $single_new_img = get_template_directory_uri() . '/assets/img/single-event-no-ing.png';
        } else {
          $single_new_img = $single_new['main_img'];
        } ?>

        <img src="<?php echo $single_new_img; ?>" alt="poster">

      </div>

    </section>


    <?php if ($single_new['slider']) : ?>
      <section class="new-photos">
        <h2><?php echo $single_new['slider_description']; ?></h2>
        <div class="new-photos_slider">
          <?php foreach ($single_new['slider'] as $item) : ?>
            <div class="aboutUSR new-slider_item">
              <div class="new-slider_img">
                <img src="<?php echo $item['img']; ?>" alt="Photo">
              </div>
              <div class="new-slider-text">
                <?php echo $item['description']; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>



    <?php if ($single_new['partners']) : ?>
      <section class="bottomDescription new-bottomDescription">
        <h2><?php echo $single_new['partners_title']; ?></h2>
        <?php echo $single_new['partners_description']; ?>
        <div class="new-partners">
          <?php foreach ($single_new['partners'] as $partner) :
            $term_img_url = get_the_post_thumbnail_url($partner->ID);
            if (!$term_img_url) {
              $term_img_url = get_template_directory_uri() . '/assets/img/no_img.png';
            }
            ?>
            <a href="<?php the_permalink($partner->ID); ?>" class="new-partner-item"><img
                src="<?php echo $term_img_url; ?>" alt="Partner"></a>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>
  </div>

<?php get_footer();