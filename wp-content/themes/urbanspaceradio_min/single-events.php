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
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
              <title>01</title>
              <path class="st0" d="M478.4,6H33.6C18.3,6,6,18.4,6,33.6v444.8C6,493.7,18.4,506,33.6,506h239.5V312.6h-64.9V237h64.9v-55.7
	c0-64.6,39.4-99.8,97-99.8c27.6,0,51.3,2.1,58.2,3V152h-39.7c-31.3,0-37.4,14.9-37.4,36.8V237h75l-9.8,75.7h-65.2V506h127.2
	c15.2,0,27.6-12.4,27.6-27.6V33.6C506,18.3,493.6,6,478.4,6z"/>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="linkedin">
              <path
                d="M0 0v24h24v-24h-24zm8 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.397-2.586 7-2.777 7 2.476v6.759z"/>
            </svg>
          </a>
          <a target="_blank" class="share-button share-telegram"
             href="https://t.me/share/url?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta('twitter'); ?>">
            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 455 455" style="enable-background:new 0 0 455 455;" xml:space="preserve">
<g>
  <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M0,0v455h455V0H0z M384.814,100.68l-53.458,257.136
		c-1.259,6.071-8.378,8.822-13.401,5.172l-72.975-52.981c-4.43-3.217-10.471-3.046-14.712,0.412l-40.46,32.981
		c-4.695,3.84-11.771,1.7-13.569-4.083l-28.094-90.351l-72.583-27.089c-7.373-2.762-7.436-13.171-0.084-16.003L373.36,90.959
		C379.675,88.517,386.19,94.049,384.814,100.68z"/>
  <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M313.567,147.179l-141.854,87.367c-5.437,3.355-7.996,9.921-6.242,16.068
		l15.337,53.891c1.091,3.818,6.631,3.428,7.162-0.517l3.986-29.553c0.753-5.564,3.406-10.693,17.522-14.522l117.069-108.822
		C318.739,149.061,316.115,145.614,313.567,147.179z"/>
</g>
              <g></g><g></g><g></g><g></g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
</svg>

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