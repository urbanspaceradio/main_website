<?php
defined('ABSPATH') || exit;
get_header();
the_post();
$single_new = getSingleNew();
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
     <?php if ($single_new['slider']) : ?>
		  <section class="new-photos">
			  <h2><?php echo $single_new['slider_description']; ?></h2>
			  <div class="new-photos_slider">
             <?php foreach ($single_new['slider'] as $item) : ?>
					 <div class="aboutUSR new-slider_item">
						 <div class="new-slider_img">
							 <img src="<?php echo $item['img']; ?>" alt="Photo">
						 </div>
						 <div class="new-slider-text">
                     <?php echo $item['description']; ?>
						 </div>
					 </div>
             <?php endforeach; ?>
			  </div>
		  </section>
     <?php endif; ?>
     <?php if ($single_new['partners']) : ?>
		  <section class="bottomDescription new-bottomDescription">
			  <h2><?php echo $single_new['partners_title']; ?></h2>
          <?php echo $single_new['partners_description']; ?>
			  <div class="new-partners">
             <?php foreach ($single_new['partners'] as $partner) :
               $term_img_url = get_the_post_thumbnail_url($partner->ID);
               if (!$term_img_url) {
                 $term_img_url = get_template_directory_uri() . '/assets/img/no_img.png';
               }
               ?>
					 <a href="<?php the_permalink($partner->ID); ?>" class="new-partner-item"><img
							 src="<?php echo $term_img_url; ?>" alt="Partner"></a>
             <?php endforeach; ?>
			  </div>
		  </section>
     <?php endif; ?>
	</div>

<?php get_footer();