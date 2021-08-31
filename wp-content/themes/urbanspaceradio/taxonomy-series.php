<?php
/* Template name: Seasons Page */
defined('ABSPATH') || exit;
get_header();
$query_vars = get_queried_object();
$series = get_terms(['taxonomy' => 'series','hide_empty' => true, 'parent' => $query_vars->term_id]);

if ($query_vars->parent) {
  get_template_part( 'template-parts/single-podcast');
} else {?>
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
					<h2><?php echo $query_vars->name; ?></h2>
					<div class="podcasts-filter_type">
						<div class="btn-greenHover"><a href="#">за жанрами</a></div>
						<div class="btn-greenHover"><a href="#">за авторами</a></div>
						<div class="btn-greenHover search"><a href="#">пошук</a></div>
					</div>
				</div>
			</div>
		</section>
		<section class="siteWrapper">
			<div class="podcasts-seasons">
           <?php foreach ($series as $item){
             $term_id_img = get_term_meta($item->term_id)['podcast_series_image_settings'][0];
             $term_img_url = wp_get_attachment_url($term_id_img);
             if(!$term_img_url){
               $term_img_url = get_template_directory_uri().'/assets/img/no_img.png';
             }
             ?>
				  <a class="podcastCart" href="<?php echo get_term_link($item->term_id); ?>">
					  <img src="<?php echo $term_img_url; ?>" alt="picture"/>
					  <p><?php echo $item->name; ?></p>
				  </a>
           <?php } ?>
			</div>
		</section>
		<section class="singlePodcast-descriptions">
			<div class="singlePodcast-descriptions_text">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in augue nunc. Fusce in consectetur mi.
					Nullam a congue sapien. Nulla in vulputate mauris, in tempor eros.</p>
			</div>
		</section>
	</div>
<?php } ?>

<?php get_footer(); ?>
