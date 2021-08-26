<?php
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', 'my_scripts_and_styles' );
add_action( 'after_setup_theme', 'register_menu' );
add_action( 'acf/init', 'be_register_blocks' );

function my_scripts_and_styles() {
  wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick/slick.css', array(), '0.1.0', 'all' );
  wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick/slick-theme.css', array(), '0.1.0', 'all' );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '0.1.0', 'all' );

  wp_deregister_script( 'jquery' );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], null, true );
  wp_enqueue_script( 'jquery.jplayer', get_template_directory_uri() . '/assets/js/jquery.jplayer.min.js', [], null, true );
  wp_enqueue_script( 'slick.min.js', get_template_directory_uri() . '/assets/js/slick.min.js', [], null, true );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [], null, true );
}

function register_menu() {
  register_nav_menus( [
    'menu_header'      => 'Головне меню',
    'menu_footer'      => 'Футер меню'
  ] );
}

//___________Blocks__________
function be_register_blocks() {
  if ( ! function_exists( 'acf_register_block' ) ) {
    return;
  }
  // main page
  acf_register_block( [
    'name'            => 'block_mainPlayer',
    'title'           => 'Блок - Головний плеєр',
    'render_template' => 'template-parts/blocks/block_mainPlayer.php',
    'category'        => 'formatting',
    'icon'            => 'format-aside'
  ] );

  acf_register_block( [
    'name'            => 'block_mostPopular',
    'title'           => 'Блок - Найпопулярніше на USR',
    'render_template' => 'template-parts/blocks/block_mostPopular.php',
    'category'        => 'formatting',
    'icon'            => 'format-aside'
  ] );
  acf_register_block( [
    'name'            => 'block_aboutUSR',
    'title'           => 'Блок - Про URS',
    'render_template' => 'template-parts/blocks/block_aboutUSR.php',
    'category'        => 'formatting',
    'icon'            => 'format-aside'
  ] );
// about us page
  acf_register_block( [
    'name'            => 'block_ourMission',
    'title'           => 'Блок - Наша місія',
    'render_template' => 'template-parts/blocks/block_ourMission.php',
    'category'        => 'formatting',
    'icon'            => 'format-aside'
  ] );
  acf_register_block( [
    'name'            => 'block_ourTeam',
    'title'           => 'Блок - Наша команда',
    'render_template' => 'template-parts/blocks/block_ourTeam.php',
    'category'        => 'formatting',
    'icon'            => 'format-aside'
  ] );
  acf_register_block( [
    'name'            => 'block_radaUSR',
    'title'           => 'Блок - Наглядова рада',
    'render_template' => 'template-parts/blocks/block_radaUSR.php',
    'category'        => 'formatting',
    'icon'            => 'format-aside'
  ] );
// Authors page
  acf_register_block( [
    'name'            => 'block_authors',
    'title'           => 'Блок - Автори',
    'render_template' => 'template-parts/blocks/block_authors.php',
    'category'        => 'formatting',
    'icon'            => 'format-aside'
  ] );
  // Partners Page
  acf_register_block( [
    'name'            => 'block_partners',
    'title'           => 'Блок - Партнери',
    'render_template' => 'template-parts/blocks/block_partners.php',
    'category'        => 'formatting',
    'icon'            => 'format-aside'
  ] );
  // block
  acf_register_block( [
    'name'            => 'block_subscribe',
    'title'           => 'Блок - Кнопка "долучитись"',
    'render_template' => 'template-parts/blocks/block_subscribe.php',
    'category'        => 'formatting',
    'icon'            => 'format-aside'
  ] );
  // podcast page
  acf_register_block( [
    'name'            => 'block_podcastPage',
    'title'           => 'Блок - Подкасти',
    'render_template' => 'template-parts/blocks/block_podcastPage.php',
    'category'        => 'formatting',
    'icon'            => 'format-aside'
  ] );

}
function getBlock_mostPopular() {
  return get_field( 'block_mostPopular');
}
function getBlock_aboutUSR() {
  return get_field( 'block_aboutUSR' );
}
function getBlock_mainPlayer() {
  return get_field( 'block_mainPlayer' );
}
function getBlock_ourMission() {
  return get_field( 'block_ourMission' );
}
function getBlock_ourTeam() {
  return get_field( 'block_ourTeam' );
}
function getBlock_radaUSR() {
  return get_field( 'block_radaUSR' );
}
function getBlock_authors() {
  return get_field( 'block_authors' );
}
function getBlock_partners() {
  return get_field( 'block_partners' );
}
function getBlock_subscribe() {
  return get_field( 'subscribe_desc' );
}
function getBlock_podcastPage() {
  return get_field( 'block_podcastPage' );
}