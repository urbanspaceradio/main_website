<?php
/* Template name: Single Podcast Page */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<div class="podcasts singlePodcast">
  <section class="podcasts-divider">
    <div class="siteWrapper">
      <div class="header-mainText">
        <h1>2020 РІК З URBAN SPACE RADIO</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in augue nunc. Fusce in consectetur mi.
          Nullam a congue sapien. Nulla in vulputate mauris, in tempor eros.</p>
        <p>Aliquam ut mollis tortor, at lobortis quam. Sed tempus aliquam ultricies. Mauris enim felis, accumsan ac
          elementum ac, varius nec purus.</p>
      </div>
      <div class="podcasts-filter singlePodcast-filter">
        <h2>Сезон 2</h2>
        <div class="podcasts-filter_type">
          <div class="btn-green"><a href="#">за жанрами</a></div>
          <div class="btn-green"><a href="#">за авторами</a></div>
          <div class="btn-green search"><a href="#">пошук</a></div>
        </div>
      </div>
    </div>
  </section>
  <section class="siteWrapper">
    <div class="singlePodcast-items">
      <a class="podcastCart" href="episode.html">
        <img alt="1" src="assets/img/temp/podcasts/1.png">
        <p>podcast</p>
      </a>
    </div>
  </section>
  <section class="singlePodcast-descriptions">
    <div class="singlePodcast-descriptions_text">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in augue nunc. Fusce in consectetur mi.
        Nullam a congue sapien. Nulla in vulputate mauris, in tempor eros.</p>
    </div>
    <div class="btn-green btn-green-main">
      <a href="#">перейти до наступного сезону</a>
    </div>
  </section>
</div>
<?php wp_footer();?>
