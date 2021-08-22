<?php
/* Template name: Main Page */
defined('ABSPATH') || exit;
get_header();
?>
<?php get_template_part( 'template-parts/blocks/block_mainPlayer' ); ?>
<?php get_template_part( 'template-parts/blocks/block_mostPopular' ); ?>
<?php get_template_part( 'template-parts/blocks/block_aboutUSR' ); ?>
<?php get_footer();?>
