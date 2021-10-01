<?php
defined('ABSPATH') || exit;
get_header();
the_post();
$authorMeta = getAuthorMeta(get_the_ID());
?>

	<div class="siteWrapper partner">
		<section class="partner-header">
			<div class="header-mainText partner-header_mainText">
				<h1><?php the_title(); ?></h1>
           <?php the_content(); ?>
			</div>
			<div class="aboutUSR partner-img">
           <?php
           $term_img_url = get_the_post_thumbnail_url(null, 'new_img');
           if (!$term_img_url) {
             $term_img_url = get_template_directory_uri() . '/assets/img/no_img.png';
           }
           ?>
				<img alt="avatar" src="<?php echo $term_img_url; ?>">
			</div>
		</section>
     <?php if ($authorMeta['podcasts']) : ?>
		  <section class="partner-didTogether">
			  <div class="header-mainText partner-didTogether_description">
				  <h2><?php echo $authorMeta['title'] ?></h2>
             <?php echo $authorMeta['description'] ?>
			  </div>
			  <div class="partner-didTogether_podcasts">
             <?php foreach ($authorMeta['podcasts'] as $podcast) :
               $term_img_url = get_the_post_thumbnail_url($podcast->term_id);
               if (!$term_img_url) {
                 $term_img_url = get_template_directory_uri() . '/assets/img/no_img.png';
               }
               ?>
					 <a class="podcastCart" href="<?php echo get_term_link($podcast->term_id); ?>">
						 <div class="img">
							 <img alt="1" src="<?php echo $term_img_url; ?>">
						 </div>
						 <p><?php echo wp_trim_words($podcast->name, 2); ?></p>
					 </a>
             <?php endforeach; ?>
			  </div>
		  </section>
     <?php endif; ?>
	</div>

<?php get_footer();

