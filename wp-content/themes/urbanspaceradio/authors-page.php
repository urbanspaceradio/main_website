<?php
/* Template name: Authors Page */
defined('ABSPATH') || exit;
get_header();
$block_authors = getBlock_authors();
$authors = getAuthors();
?>
	<div class="siteWrapper authors">
		<section class="header-mainText">
			<h1><?php echo $block_authors['title_authors']; ?></h1>
        <?php echo $block_authors['desc_authors']; ?>
		</section>
		<section class="authors-items">
        <?php while ($authors->have_posts()) : $authors->the_post(); ?>
			  <div class="podcastCart rotateCart authors-cart">
				  <a href="<?php the_permalink(); ?>">
					  <div class="cartContainer">
						  <div class="side front">
                      <?php
                      $term_img_url = get_the_post_thumbnail_url(null, 'authors_img');
                      if (!$term_img_url) {
                        $term_img_url = get_template_directory_uri() . '/assets/img/no_img.png';
                      }
                      ?>
							  <img alt="avatar" src="<?php echo $term_img_url; ?>">
						  </div>
						  <div class="side back">
							  <h2><?php the_title(); ?></h2>
							  <p><?php echo wp_trim_words(get_the_excerpt(), 12); ?></p>
						  </div>
					  </div>
				  </a>
			  </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
		</section>
		<section class="bottomDescription">
        <?php echo $block_authors['bottom_description']; ?>
		</section>
		<div class="btn-greenHover bottomBtn">
			<a href="<?php echo site_url('/contacts'); ?>">хочу долучитись</a>
		</div>
	</div>
<?php get_footer(); ?>