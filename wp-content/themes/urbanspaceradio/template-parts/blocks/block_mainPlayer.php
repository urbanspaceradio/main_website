<?php
defined( 'ABSPATH' ) || exit;
$Block_mainPlayer_1 = getBlock_mainPlayer();
?>

<section>
  <div class="mainPlayer">
    <div class="mainPlayer-container">
      <div class="jp-jplayer" id="player"></div>
      <div arHia-label="media player" class="jp-audio-stream" id="jp_container_1" role="application">
        <div class="mainPlayer-container_btn jp-play">
          <div class="play"></div>
          <div class="pause"></div>
        </div>
        <div class="mainPlayer-container_info activeInfo">
          <div class="js-singer">Loading...</div>
          <div class="js-song">Loading...</div>
          <div class="now">зараз в ефірі</div>
        </div>
      </div>
    </div>
  </div>
</section>
