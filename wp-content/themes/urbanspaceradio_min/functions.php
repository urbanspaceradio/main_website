<?php
defined('ABSPATH') || exit;

add_filter('show_admin_bar', '__return_false');

add_action('init', 'register_post_types');
add_action('wp_enqueue_scripts', 'my_scripts_and_styles');
add_action('after_setup_theme', 'register_menu');
add_action('acf/init', 'be_register_blocks');

function my_scripts_and_styles() {
  wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick/slick.css', array(), '0.1.0', 'all');
  wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick/slick-theme.css', array(), '0.1.0', 'all');
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '0.1.0', 'all');

  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], null, true);
  wp_enqueue_script('jquery.jplayer', get_template_directory_uri() . '/assets/js/jquery.jplayer.min.js', [], null, true);
  wp_enqueue_script('slick.min.js', get_template_directory_uri() . '/assets/js/slick.min.js', [], null, true);
  wp_enqueue_script('player', get_template_directory_uri() . '/assets/js/player.js', [], null, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
  wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', [], null, true);
}

function register_menu() {
  register_nav_menus(['menu_header' => 'Головне меню', 'menu_footer' => 'Футер меню']);
  add_theme_support('post-thumbnails');
}

//___________Blocks__________
function be_register_blocks() {
  if (!function_exists('acf_register_block')) {
    return;
  }
  // main page
  acf_register_block(['name' => 'block_mainPlayer', 'title' => 'Блок - Головний плеєр', 'render_template' => 'template-parts/blocks/block_mainPlayer.php', 'category' => 'formatting', 'icon' => 'format-aside']);

  acf_register_block(['name' => 'block_mostPopular', 'title' => 'Блок - Найпопулярніше на USR', 'render_template' => 'template-parts/blocks/block_mostPopular.php', 'category' => 'formatting', 'icon' => 'format-aside']);
  acf_register_block(['name' => 'block_aboutUSR', 'title' => 'Блок - Про URS', 'render_template' => 'template-parts/blocks/block_aboutUSR.php', 'category' => 'formatting', 'icon' => 'format-aside']);
  // about us page
  acf_register_block(['name' => 'block_ourMission', 'title' => 'Блок - Наша місія', 'render_template' => 'template-parts/blocks/block_ourMission.php', 'category' => 'formatting', 'icon' => 'format-aside']);
  acf_register_block(['name' => 'block_ourTeam', 'title' => 'Блок - Наша команда', 'render_template' => 'template-parts/blocks/block_ourTeam.php', 'category' => 'formatting', 'icon' => 'format-aside']);
  acf_register_block(['name' => 'block_radaUSR', 'title' => 'Блок - Наглядова рада', 'render_template' => 'template-parts/blocks/block_radaUSR.php', 'category' => 'formatting', 'icon' => 'format-aside']);
  // Authors page
  acf_register_block(['name' => 'block_authors', 'title' => 'Блок - Автори', 'render_template' => 'template-parts/blocks/block_authors.php', 'category' => 'formatting', 'icon' => 'format-aside']);
  acf_register_block(['name' => 'block_events', 'title' => 'Блок - Події', 'render_template' => 'template-parts/blocks/block_events.php', 'category' => 'formatting', 'icon' => 'format-aside']);
  // Partners Page
  acf_register_block(['name' => 'block_partners', 'title' => 'Блок - Партнери', 'render_template' => 'template-parts/blocks/block_partners.php', 'category' => 'formatting', 'icon' => 'format-aside']);
  // block
  acf_register_block(['name' => 'block_subscribe', 'title' => 'Блок - Кнопка "долучитись"', 'render_template' => 'template-parts/blocks/block_subscribe.php', 'category' => 'formatting', 'icon' => 'format-aside']);
  // podcast page
  acf_register_block(['name' => 'block_podcastPage', 'title' => 'Блок - Подкасти', 'render_template' => 'template-parts/blocks/block_podcastPage.php', 'category' => 'formatting', 'icon' => 'format-aside']);
  /// contact page
  acf_register_block(['name' => 'block_contactsPage', 'title' => 'Блок - Контакти', 'render_template' => 'template-parts/blocks/block_contactPage.php', 'category' => 'formatting', 'icon' => 'format-aside']);
}

function register_post_types() {
  register_post_type('events', array('labels' => array('name' => 'Event', 'singular_name' => 'Event', 'add_new' => 'Додати подію', 'add_new_item' => 'Додавання події', 'edit_item' => 'Редагування події', 'new_item' => 'Нова подія', 'view_item' => 'Дивитись подію', 'search_items' => 'Шукати подію', 'not_found' => 'Не знайдено', 'not_found_in_trash' => 'Не знайдено в корзині', 'parent_item_colon' => '', 'menu_name' => 'Події',), 'public' => true, 'menu_position' => 7, 'menu_icon' => 'dashicons-format-aside', 'hierarchical' => true, 'supports' => ['title', 'editor', 'thumbnail'],//'excerpt', 'author','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies' => ['category'], 'has_archive' => true, 'rewrite' => true, 'query_var' => true,));

  register_post_type('partners', array('labels' => array('name' => 'Partner', 'singular_name' => 'Partner', 'add_new' => 'Додати партнера', 'add_new_item' => 'Додавання партнера', 'edit_item' => 'Редагування партнера', 'new_item' => 'Новий партнер', 'view_item' => 'Дивитись партнера', 'search_items' => 'Шукати партнера', 'not_found' => 'Не знайдено', 'not_found_in_trash' => 'Не знайдено в корзині', 'parent_item_colon' => '', 'menu_name' => 'Партнери',), 'public' => true, 'menu_position' => 8, 'menu_icon' => 'dashicons-format-aside', 'hierarchical' => true, 'supports' => ['title', 'editor', 'thumbnail'],//'excerpt', 'author','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies' => ['category'], 'has_archive' => true, 'rewrite' => true, 'query_var' => true,));
}

function getBlock_mostPopular() {
  return get_field('block_mostPopular');
}

function getBlock_aboutUSR() {
  return get_field('block_aboutUSR');
}

function getBlock_mainPlayer() {
  return get_field('block_mainPlayer');
}

function getBlock_ourMission() {
  return get_field('block_ourMission');
}

function getBlock_ourTeam() {
  return get_field('block_ourTeam');
}

function getBlock_events() {
  return get_field('block_events');
}

function getBlock_radaUSR() {
  return get_field('block_radaUSR');
}

function getBlock_authors() {
  return get_field('block_authors');
}

function getBlock_partners() {
  return get_field('block_partners');
}

function getBlock_subscribe() {
  return get_field('subscribe_desc');
}

function getBlock_podcastPage() {
  return get_field('block_podcastPage');
}

function getBlock_contactPage() {
  return get_field('block_contactPage');
}

function get_episode($term) {
  $args = array('posts_per_page' => -1, 'post_type' => 'podcast', 'order' => 'ASC', 'tax_query' => array(array('taxonomy' => 'series', 'field' => 'term_id', 'terms' => $term)));
  return get_posts($args);
}

function getEvents() {
  return new WP_Query(['numberposts' => -1, 'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish', 'post_type' => 'events',]);
}

function getPartner() {
  return new WP_Query(['numberposts' => -1, 'orderby' => 'date', 'order' => 'DESC', 'post_status' => 'publish', 'post_type' => 'partners',]);
}

//___________FOOTER_____________
function copyright_date() {
  $start_date = '2021';
  $current_date = date('Y');

  if ($start_date !== $current_date) {
    echo $start_date . ' - ' . $current_date;
  }
  else {
    echo $start_date;
  }
}


function the_excerpt_max_charlength($sentences, $limit) {

  $words = explode(' ', $sentences );

  if( count($words) <= 3 ){
    return implode(' ', $words);
  }

  if( count($words) > $limit ){
    return sprintf("%s&hellip;", implode(' ', array_slice($words, 0, $limit)) );
  }

}