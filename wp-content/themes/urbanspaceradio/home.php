<?php
/* Template name: Main Page */
defined('ABSPATH') || exit;
get_header();
$args = array(
  'series'        => 'city-changers',
  'post_type'   => 'podcast',
  'post_status' => 'publish',
  'numberposts' => -1
);
$posts = new WP_Query($args);
the_content();
get_footer();
?>
