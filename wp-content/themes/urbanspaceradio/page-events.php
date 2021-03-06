<?php
/* Template name: Events Page */
defined('ABSPATH') || exit;
get_header();
$events = getBlock_events();
$getEvents = getEvents();
?>
  <div class="events">
    <div class="siteWrapper">
      <section class="header-mainText">
        <h1><?php echo $events['event_title']; ?></h1>
        <?php echo $events['event_description']; ?>
      </section>
      <section class="events-items">
        <?php while ($getEvents->have_posts()) : $getEvents->the_post(); ?>
          <div class=" aboutUSR events-items_item">
            <a href="<?php the_permalink(); ?>">
              <div class="img">
                <?php the_post_thumbnail(); ?>
              </div>
              <div class="text">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
              </div>
            </a>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      </section>
    </div>
  </div>
<?php get_footer();