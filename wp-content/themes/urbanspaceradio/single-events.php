<?php
defined('ABSPATH') || exit;
get_header();
the_post();
?>

<div class="siteWrapper new">
    <section class="new-header">
      <div class="header-mainText new-header_mainText">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
      <div class="aboutUSR new-img">
        <?php the_post_thumbnail('new_img'); ?>
      </div>
    </section>
    <section class="new-photos">
      <h2>ФОТО З ПОДІЇ</h2>
      <div class="new-photos_slider">
        <div class="aboutUSR new-slider_item">
          <div class="new-slider_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_img.png" alt="Slider img">
          </div>
          <div class="new-slider-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in augue nunc.</p>
          </div>
        </div>
        <div class="aboutUSR new-slider_item">
          <div class="new-slider_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_img.png" alt="Slider img">
          </div>
          <div class="new-slider-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in augue nunc.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="bottomDescription new-bottomDescription">
      <h2>ХТО БУВ ЗАЛУЧЕНИЙ</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in augue nunc. Fusce in consectetur mi. Nullam a congue sapien. Nulla in vulputate mauris, in tempor eros.Aliquam ut mollis tortor, at lobortis quam. Sed tempus aliquam ultricies. Mauris enim felis, accumsan ac elementum ac, varius nec purus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in augue nunc. Fusce in consectetur mi. Nullam a congue sapien. Nulla in vulputate mauris, in tempor eros. </p>
      <div class="new-partners">
        <div class="new-partner-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/1.png" alt="Partner"></div>
        <div class="new-partner-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/2.png" alt="Partner"></div>
        <div class="new-partner-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/partners/3.png" alt="Partner"></div>
      </div>
    </section>
  </div>

<?php get_footer();