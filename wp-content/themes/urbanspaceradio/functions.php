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
  wp_enqueue_script( 'jquery-3.6.0.min', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', [], null, true );
  wp_enqueue_script( 'common', get_template_directory_uri() . '/assets/js/common.js', [], null, true );
  wp_enqueue_script( 'jquery.jplayer', get_template_directory_uri() . '/assets/js/jquery.jplayer.min.js', [], null, true );
  wp_enqueue_script( 'slick.min.js', get_template_directory_uri() . '/assets/js/slick.min.js', [], null, true );
}

function register_menu() {
  register_nav_menus( [
    'menu_header'      => 'Головне меню'
  ] );
}

//___________Blocks__________
function be_register_blocks() {
  if ( ! function_exists( 'acf_register_block' ) ) {
    return;
  }
  acf_register_block( [
    'name'            => 'block_mostPopular',
    'title'           => 'Блок - "Найпопулярніше на USR"',
    'render_template' => 'template-parts/blocks/block_mostPopular.php',
    'category'        => 'formatting',
    'icon'            => 'format-aside'
  ] );
  acf_register_block( [
    'name'            => 'block_aboutUSR',
    'title'           => 'Блок - "Про URS"',
    'render_template' => 'template-parts/blocks/aboutUSR.php',
    'category'        => 'formatting',
    'icon'            => 'format-aside'
  ] );

}